import ApiService from "@/api/ApiService";
import ViewRequestDetails from "@/components/dialogs/BorrowingManagement/ViewRequestDetails";
import ScannerDialog from "@/components/dialogs/ScannerDialog";
import Header from "@/components/layout/Header";
import DataTable from "@/components/tables/DataTable";
import { getRequestTransactionColumns } from "@/components/tables/RequestTransactionManagement/RequestTransactionColumn";
import { Button } from "@/components/ui/button";
import { AuthContext } from "@/context/AuthContext";
import { useMediaQuery } from "@/hooks/useMediaQuery";
import { useContext, useEffect, useState } from "react";
import { toast, Toaster } from "sonner";

const RequestTransaction = () => {
    const { auth } = useContext(AuthContext);
    const userId = auth.user?.user_id;
    const [loading, setLoading] = useState(false);
    const [requests, setRequests] = useState([]);
    const [selectedRequest, setSelectedRequest] = useState(null);
    const [isViewOpen, setIsViewOpen] = useState(false);
    const [isSubmitting, setIsSubmitting] = useState(false);

    const [isRequestScannerOpen, setIsRequestScannerOpen] = useState(false);

    const handleViewRequest = (request) => {
        setSelectedRequest(request);
        setIsViewOpen(true);
    };

    const fetchRequests = async () => {
        setLoading(true);
        try {
            const data = await ApiService.RequestBorrowService.getAllRequests();
            setRequests(data.data);
            console.log(userId);
        } catch (error) {
            console.error("Error fetching requests:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleStatusUpdateCall = async (requestId, newStatus) => {
        setIsSubmitting(true);
        const payload = {
            handled_by: userId,
            status: newStatus,
        };

        try {
            const data = await ApiService.RequestBorrowService.statusUpdateRequestByAdmin(requestId, payload);
            console.log(data);
            toast.success("Request status updated successfully");
            fetchRequests();
        } catch (error) {
            toast.error("Error to update request status");
            console.error("Error updating request status:", error);
        } finally {
            setIsSubmitting(false);
            setIsViewOpen(false);
        }
    };

    const isMobile = useMediaQuery("(max-width: 768px)");

    const columns = getRequestTransactionColumns(isMobile, {
        onViewRequest: handleViewRequest,
    }, []);

    useEffect(() => {
        fetchRequests();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

return (
    <div className="px-1 sm:px-2 lg:px-2 py-2 sm:py-2 space-y-4 sm:space-y-2">
        <Toaster richColors position="top-center" expand={true} />
        <Header headerTitle="Request Transactions" />
        
        <div className="flex flex-col justify-end sm:flex-row items-center gap-4 mb-4">
            <Button 
                className="w-full sm:w-auto"
                onClick={() => setIsRequestScannerOpen(true)}
            >
                <span>Scan a Request</span>
            </Button>
        </div>

        <div className="overflow-x-auto">
            <DataTable 
                columns={columns} 
                data={requests} 
                searchKeys={[]} 
                isLoading={loading}
                className="w-full"
            />
        </div>

        <ScannerDialog
            isOpen={isRequestScannerOpen}
            onClose={() => setIsRequestScannerOpen(false)}
            onScanSuccess={(scannedRequestId) => {
                requests.forEach((request) => {
                    if (request.request_id === Number(scannedRequestId)) {
                        setSelectedRequest(request);
                        return;
                    }
                });
                setIsViewOpen(true);
                setIsRequestScannerOpen(false)
            }}
        />

        <ViewRequestDetails
            isOpen={isViewOpen}
            onClose={() => setIsViewOpen(false)}
            request={selectedRequest}
            onSubmitStatus={handleStatusUpdateCall}
            isSubmitting={isSubmitting}
            refresh={fetchRequests}
            isMobile={isMobile}
        />
    </div>
);
};

export default RequestTransaction;
