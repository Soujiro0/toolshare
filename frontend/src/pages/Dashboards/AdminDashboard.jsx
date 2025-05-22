import ViewRequestDetails from "@/components/dialogs/BorrowingManagement/ViewRequestDetails";
import AddItemDialog from "@/components/dialogs/InventoryManagement/AddItemDialog";
import RequestScannerDialog from "@/components/dialogs/RequestScanner";
import DataTable from "@/components/tables/DataTable";
import { getColumns } from "@/components/tables/InventoryManagement/ItemColumn";
import { getRequestTransactionColumns } from "@/components/tables/RequestTransactionManagement/RequestTransactionColumn";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import ItemAndUnitMetricsCard from "@/components/ui/dashboard/ItemAndUnitMetricsCard";
import RequestStatusCard from "@/components/ui/dashboard/RequestStatusCard";
import UserRequestMetricsCard from "@/components/ui/dashboard/UserRequestMetricsCard";
import BorrowingTrendsGraph from "@/components/ui/graphs/BorrowingTrendsGraph";
import InventoryHealthChart from "@/components/ui/graphs/InventoryHealthChart";
import PopularItemsGraph from "@/components/ui/graphs/PopularItemsGraph";
import TopRequestersChart from "@/components/ui/graphs/TopRequestersChart";
import { AuthContext } from "@/context/AuthContext";
import { useMediaQuery } from "@/hooks/useMediaQuery";
import { Plus, QrCode } from "lucide-react";
import { useContext, useEffect, useState } from "react";
import { toast, Toaster } from "sonner";
import ApiService from "../../api/ApiService";
import Header from "../../components/layout/Header";

const AdminDashboard = () => {
    const { auth } = useContext(AuthContext);
    const userId = auth.user?.user_id;
    const isMobile = useMediaQuery("(max-width: 768px)");

    const [loading, setLoading] = useState(true);
    const [stats, setStats] = useState({
        popularItems: [], // Add this new property
        recentItems: [],
        pendingRequests: [],
        pendingRequestCount: 0,
        totalItems: 0,
        totalUnits: 0,
        maintenanceUnits: [],
        inventoryHealth: [],
        topRequesters: [],
        approvedToday: 0,
        approvedThisWeek: 0,
        requestCount: [],
        requests: [],
    });

    const [selectedRequest, setSelectedRequest] = useState(null);
    const [isSubmitting, setIsSubmitting] = useState(false);

    const [addItemDialogOpen, setAddItemDialogOpen] = useState(false);
    const [scannerDialogOpen, setScannerDialogOpen] = useState(false);
    const [isViewOpen, setIsViewOpen] = useState(false);
    const [categories, setCategories] = useState([]);

    const fetchDashboardData = async () => {
        setLoading(true);
        try {
            const [itemsRes, requestsRes, unitsRes, categoriesRes, statsRes] = await Promise.all([
                ApiService.ItemService.getItems(),
                ApiService.RequestBorrowService.getAllRequests(),
                ApiService.ItemService.getItemUnits(),
                ApiService.ItemCategoryService.getAllCategories(),
                ApiService.DashboardService.getStats(), // New API endpoint needed
            ]);

            const requestCounts = requestsRes.data.reduce((acc, request) => {
                // Convert to local timezone and get date part only
                const date = new Date(request.request_date).toLocaleDateString("en-CA"); // YYYY-MM-DD format
                acc[date] = (acc[date] || 0) + 1;
                return acc;
            }, {});

            const trendsData = Object.entries(requestCounts)
                .map(([date, count]) => ({ date, count }))
                .sort((a, b) => new Date(a.date) - new Date(b.date))
                .slice(-7); // Get last 7 days

            console.log("trends Data", trendsData);

            const pendingRequests = requestsRes.data.filter((req) => req.status === "PENDING");
            const maintenanceUnits = unitsRes.data.filter((unit) => unit.status === "UNDER_MAINTENANCE");

            setStats({
                popularItems: itemsRes.data,
                recentItems: itemsRes.data.slice(-5).reverse(), // Last 5, newest first

                pendingRequests: pendingRequests.slice(0, 5),
                pendingRequestCount: pendingRequests.length,
                totalItems: itemsRes.data.length,
                totalUnits: unitsRes.data.length,
                maintenanceUnits,
                inventoryHealth: [
                    {
                        id: "available",
                        name: "Available",
                        value: unitsRes.data.filter((unit) => unit.status === "AVAILABLE").length,
                    },
                    {
                        id: "inUse",
                        name: "In Use",
                        value: unitsRes.data.filter((unit) => unit.status === "IN_USE").length,
                    },
                    {
                        id: "maintenance",
                        name: "Maintenance",
                        value: maintenanceUnits.length,
                    },
                ],
                topRequesters: statsRes.data.topRequesters,
                approvedToday: statsRes.data.approvedToday,
                approvedThisWeek: statsRes.data.approvedThisWeek,
                requestCount: trendsData,
                requests: requestsRes.data,
            });

            console.log(statsRes);

            setCategories(categoriesRes.data);
        } catch (error) {
            console.error("Error fetching dashboard data:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleManualRefresh = () => {
        fetchDashboardData(); // Pass false for manual refresh
        toast.success("Data refreshed");
    };

    const handleViewRequest = (request) => {
        setSelectedRequest(request);
        setIsViewOpen(true);
    };

    const handleAddItem = async (itemData) => {
        try {
            await ApiService.ItemService.createItem(itemData);
            fetchDashboardData();
            setAddItemDialogOpen(false);
        } catch (error) {
            console.error("Error adding item:", error);
        }
    };

    const handleStatusUpdateCall = async (requestId, newStatus) => {
        setIsSubmitting(true);
        try {
            const payload = {
                handled_by: userId,
                status: newStatus,
            };
            await ApiService.RequestBorrowService.statusUpdateRequestByAdmin(requestId, payload);
            fetchDashboardData();
            setIsViewOpen(false);
        } catch (error) {
            console.error("Error updating request status:", error);
        } finally {
            setIsSubmitting(false);
        }
    };

    const transactionColumns = getRequestTransactionColumns(
        isMobile,
        {
            onViewRequest: handleViewRequest,
        },
        ["processed_date", "user.user_id", "return_date"]
    );

    const itemColumns = getColumns(isMobile, {}, ["item_units_count", "actions", "unit", "acquisition_date"]);

    useEffect(() => {
        fetchDashboardData();
    }, []);

    return (
        <div className="px-1 sm:px-2 lg:px-2 py-2 sm:py-2 space-y-4">
            <Toaster richColors position="top-center" expand={true} />
            <Header headerTitle="Dashboard" />

            <div className="flex flex-col justify-end sm:flex-row items-center gap-4 mb-4">
                <Button className="w-full sm:w-auto" onClick={handleManualRefresh} variant="outline">
                    <span>Refresh Table</span>
                </Button>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <ItemAndUnitMetricsCard itemCount={stats.totalItems} unitCount={stats.totalUnits} isLoading={loading} />

                <UserRequestMetricsCard todayRequests={stats.approvedToday} weekRequests={stats.approvedThisWeek} isLoading={loading} />

                <RequestStatusCard requests={stats.requests} isLoading={loading} />

                <div className="col-span-full grid grid-cols-1 md:grid-cols-2 gap-4">
                    {/* Pending Requests */}
                    <Card>
                        <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
                            <div>
                                <CardTitle>Pending Requests</CardTitle>
                                <CardDescription>Total: {stats.pendingRequestCount}</CardDescription>
                            </div>
                            <Button onClick={() => setScannerDialogOpen(true)} size="sm">
                                <QrCode className="h-4 w-4 mr-2" />
                                Scan
                            </Button>
                        </CardHeader>
                        <CardContent>
                            <DataTable
                                columns={transactionColumns}
                                data={stats.pendingRequests}
                                searchKeys={[]}
                                isLoading={loading}
                                showEntries={false}
                                showSearchFilter={false}
                                className="w-full"
                            />
                        </CardContent>
                    </Card>

                    <Card>
                        <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
                            <div>
                                <CardTitle>Recent Items</CardTitle>
                                <CardDescription>Latest additions to inventory</CardDescription>
                            </div>
                            <Button onClick={() => setAddItemDialogOpen(true)} size="sm">
                                <Plus className="h-4 w-4 mr-2" />
                                Add New
                            </Button>
                        </CardHeader>
                        <CardContent>
                            <DataTable
                                columns={itemColumns}
                                data={stats.recentItems}
                                searchKeys={["name"]}
                                isLoading={loading}
                                showEntries={false}
                                showPagignation={false}
                                showSearchFilter={false}
                                className="w-full"
                            />
                        </CardContent>
                    </Card>
                </div>
            </div>

            <div className="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <InventoryHealthChart data={stats.inventoryHealth} isLoading={loading} />
                <TopRequestersChart data={stats.topRequesters} isLoading={loading} />
            </div>

            {/* Graphs Grid */}
            <div className="grid grid-cols-1 gap-4">
                <BorrowingTrendsGraph data={stats.requestCount} isLoading={loading} />
                <PopularItemsGraph data={stats.popularItems} isLoading={loading} />
            </div>

            <AddItemDialog isOpen={addItemDialogOpen} onClose={() => setAddItemDialogOpen(false)} onSave={handleAddItem} categories={categories} />

            <RequestScannerDialog
                isOpen={scannerDialogOpen}
                onClose={() => setScannerDialogOpen(false)}
                onScanSuccess={(scannedRequestId) => {
                    stats.pendingRequests.forEach((request) => {
                        if (request.request_id === Number(scannedRequestId)) {
                            setSelectedRequest(request);
                            return;
                        }
                    });
                    setIsViewOpen(true);
                    setScannerDialogOpen(false);
                }}
            />

            <ViewRequestDetails
                isOpen={isViewOpen}
                onClose={() => setIsViewOpen(false)}
                request={selectedRequest}
                onSubmitStatus={handleStatusUpdateCall}
                isSubmitting={isSubmitting}
                refresh={fetchDashboardData}
                isMobile={isMobile}
            />
        </div>
    );
};

export default AdminDashboard;
