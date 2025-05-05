import ApiService from "@/api/ApiService";
// import AssignUnitsDialog from "@/components/dialogs/AssignUnitsDialog";
// import ReturnCheckDialog from "@/components/dialogs/ReturnCheckDialog";
import ViewRequestDetails from "@/components/dialogs/BorrowingManagement/ViewRequestDetails";
import Header from "@/components/layout/Header";
import DataTable from "@/components/tables/DataTable";
import { getRequestTransactionColumns } from "@/components/tables/RequestTransactionManagement/RequestTransactionColumn";
import { AuthContext } from "@/context/AuthContext";
import { useContext, useEffect, useState } from "react";
import { Toaster } from "sonner";

const RequestTransaction = () => {
    const { auth } = useContext(AuthContext);
    const userId = auth.user?.user_id;
    const [loading, setLoading] = useState(false);
    const [requests, setRequests] = useState([]);
    // const [selectedRequest, setSelectedRequest] = useState(null);
    // const [openAssign, setOpenAssign] = useState(false);
    // const [openReturn, setOpenReturn] = useState(false);
    const [selectedRequest, setSelectedRequest] = useState(null);
    const [isViewOpen, setIsViewOpen] = useState(false);

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

    const columns = getRequestTransactionColumns({
        onViewRequest: handleViewRequest,
    });

    useEffect(() => {
        fetchRequests();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <Header headerTitle="Request Transactions" />
            <div className="p-4">
                <DataTable columns={columns} data={requests} searchKeys={[]} isLoading={loading} />
            </div>

            <ViewRequestDetails
                isOpen={isViewOpen}
                onClose={() => setIsViewOpen(false)}
                request={selectedRequest}
                onSubmit={() => {
                    setIsViewOpen(false);
                    fetchRequests(); // refresh data
                }}
            />

            {/* <AssignUnitsDialog
                open={openAssign}
                onClose={() => setOpenAssign(false)}
                request={selectedRequest}
                refresh={fetchRequests}
            />
            <ReturnCheckDialog
                open={openReturn}
                onClose={() => setOpenReturn(false)}
                request={selectedRequest}
            /> */}
        </>
    );
};

export default RequestTransaction;
