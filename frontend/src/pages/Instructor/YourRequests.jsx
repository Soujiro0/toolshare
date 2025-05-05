import ApiService from "@/api/ApiService";
import DeleteRequestDialog from "@/components/dialogs/BorrowingManagement/DeleteRequestDialog";
import EditRequestDialog from "@/components/dialogs/BorrowingManagement/EditRequestDialog";
import ViewRequestDetails from "@/components/dialogs/BorrowingManagement/ViewRequestDetails";
import Header from "@/components/layout/Header";
import { getRequestColumns } from "@/components/tables/BorrowingManagement/RequestColumn";
import DataTable from "@/components/tables/DataTable";
import { Toaster } from "@/components/ui/sonner";
import { AuthContext } from "@/context/AuthContext";
import { useContext, useEffect, useState } from "react";
import { toast } from "sonner";

const YourRequests = () => {
    const { auth } = useContext(AuthContext);
    const userId = auth.user?.user_id;

    const [loading, setLoading] = useState(false);
    const [data, setData] = useState([]);
    const [deleteDialogOpen, setDeleteDialogOpen] = useState(false);
    const [editDialogOpen, setEditDialogOpen] = useState(false);
    const [selectedRequest, setSelectedRequest] = useState(null);
    const [isViewOpen, setIsViewOpen] = useState(false);

    const handleViewRequest = (request) => {
        setSelectedRequest(request);
        setIsViewOpen(true);
    };

    const openDeleteDialog = (request) => {
        setSelectedRequest(request);
        setDeleteDialogOpen(true);
    };

    const openEditDialog = (request) => {
        setSelectedRequest(request);
        setEditDialogOpen(true);
    };

    const fetchRequests = async () => {
        setLoading(true);
        try {
            const res = await ApiService.RequestBorrowService.getUserRequests(userId);
            setData(res.data);
        } catch (error) {
            console.error("Error fetching requests:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleEditRequestSubmit = async (payload) => {
        try {
            await ApiService.RequestBorrowService.updateRequestFaculty(selectedRequest.request_id, payload);
            toast.success("Request updated successfully", {
                description: "Your request has been updated.",
            });

            fetchRequests(); // Ensure DB state is fetched fresh
            setEditDialogOpen(false);
        } catch (error) {
            console.error("Error updating request:", error);
            toast.error("Error updating request");
        }
    };

    const handleDeleteRequest = async () => {
        try {
            await ApiService.RequestBorrowService.deleteRequest(selectedRequest.request_id);
            toast.success("Request deleted successfully.");
            setData((prev) => prev.filter((r) => r.request_id !== selectedRequest.request_id));
        } catch (error) {
            console.error("Delete error:", error);
            toast.error("Failed to delete request.");
        } finally {
            setDeleteDialogOpen(false);
        }
    };

    const columns = getRequestColumns({
        onViewRequest: handleViewRequest,
        onEditRequest: openEditDialog,
        onDeleteRequest: openDeleteDialog,
    });

    useEffect(() => {
        if (!userId) return;
        fetchRequests();
    }, [userId]);

    return (
        <>
            <Toaster richColors position="top-center" expand />
            <Header headerTitle="Your Requests" />

            <DataTable data={data} columns={columns} isLoading={loading} />

            <ViewRequestDetails
                isOpen={isViewOpen}
                onClose={() => setIsViewOpen(false)}
                request={selectedRequest}
                onSubmit={() => {
                    setIsViewOpen(false);
                    fetchRequests(); // refresh data
                }}
            />

            <EditRequestDialog
                isOpen={editDialogOpen}
                onClose={() => setEditDialogOpen(false)}
                request={selectedRequest}
                onSubmit={handleEditRequestSubmit}
            />

            <DeleteRequestDialog
                isOpen={deleteDialogOpen}
                onClose={() => setDeleteDialogOpen(false)}
                request={selectedRequest}
                onDelete={handleDeleteRequest}
            />
        </>
    );
};

export default YourRequests;
