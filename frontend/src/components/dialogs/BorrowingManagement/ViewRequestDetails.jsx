import { getAuthorizedStudentColumns } from "@/components/tables/BorrowingManagement/AuthorizedStudentColumn";
import { getRequestedItemColumns } from "@/components/tables/BorrowingManagement/RequestedItemColumn";
import DataTable from "@/components/tables/DataTable";
import { Button } from "@/components/ui/button";
import { Card, CardHeader, CardTitle } from "@/components/ui/card";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Label } from "@/components/ui/label";
import { Toaster } from "@/components/ui/sonner";
import { Textarea } from "@/components/ui/textarea";
import { AuthContext } from "@/context/AuthContext";
import PropTypes from "prop-types";
import { useContext, useState } from "react";

const ViewRequestDetails = ({ isOpen, onClose, request, onSubmitStatus }) => {
    const { auth } = useContext(AuthContext);
    const userRole = auth.user?.role;

    const [showAssignModal, setShowAssignModal] = useState(false);

    if (!request) return null;

    const authorizedStudentsColumns = getAuthorizedStudentColumns({}, ["actions"]);
    const requestItemsColumns = getRequestedItemColumns({}, ["actions"]);

    const handleStatusUpdate = (newStatus) => {
        if (onSubmitStatus && request.request_id) {
            onSubmitStatus(request.request_id, newStatus);
        }
    };

    return (
        <>
            <Toaster richColors position="top-center" expand />
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent className="w-[50%] min-w-[50%] max-h-[90vh] overflow-y-auto">
                    <DialogHeader>
                        <DialogTitle>Request Details</DialogTitle>
                    </DialogHeader>

                    <div className="space-y-4 text-sm">
                        <div className="grid grid-cols-2 gap-2">
                            <Card>
                                <CardHeader>
                                    <CardTitle>Request ID</CardTitle>
                                    <p>{request.request_id}</p>
                                </CardHeader>
                            </Card>

                            <Card>
                                <CardHeader>
                                    <CardTitle>Status</CardTitle>
                                    <p>{request.status}</p>
                                </CardHeader>
                            </Card>

                            <Card>
                                <CardHeader>
                                    <CardTitle>Request Date</CardTitle>
                                    <p>{new Date(request.request_date).toLocaleString()}</p>
                                </CardHeader>
                            </Card>

                            <Card>
                                <CardHeader>
                                    <CardTitle>Requested By</CardTitle>
                                    <p>
                                        {request.user?.name} ({request.user?.email})
                                    </p>
                                </CardHeader>
                            </Card>
                        </div>

                        <div className="space-y-2">
                            <Label>Purpose:</Label>
                            <Textarea value={request.purpose || ""} disabled className="resize-none" />
                        </div>

                        <div className="space-y-2">
                            <Label>Remarks:</Label>
                            <Textarea value={request.remarks || "No Remarks Yet"} disabled className="resize-none" />
                        </div>

                        <div className="space-y-2">
                            <Label>Authorized Students:</Label>
                            <DataTable
                                columns={authorizedStudentsColumns}
                                data={request.authorized_students || []}
                                searchKeys={["name"]}
                                filters={[]}
                                showEntries={false}
                                showSearchFilter={false}
                                entrySize={5}
                            />
                        </div>

                        <div className="space-y-2">
                            <Label>Requested Items:</Label>
                            <DataTable
                                columns={requestItemsColumns}
                                data={request.requested_items || []}
                                showEntries={false}
                                showSearchFilter={false}
                            />
                        </div>
                    </div>

                    <DialogFooter className="flex gap-2">
                        {userRole === "INSTRUCTOR" && (
                            <>
                                <Button>
                                    Generate QR Code
                                </Button>
                            </>
                        )}

                        {userRole === "SUPER_ADMIN" || userRole === "ADMIN" && (
                            <>
                                                        {request.status === "PENDING" && (
                            <>
                                <Button onClick={() => handleStatusUpdate("APPROVED")}>APPROVE</Button>
                                <Button variant="destructive" onClick={() => handleStatusUpdate("REJECTED")}>
                                    REJECT
                                </Button>
                            </>
                        )}

                        {request.status === "APPROVED" && <Button onClick={() => setShowAssignModal(true)}>ASSIGN ITEMS</Button>}
                            </>
                        )}
                    </DialogFooter>

                    {/* Assign Items Modal Placeholder */}
                    {showAssignModal && (
                        <Dialog open={showAssignModal} onOpenChange={setShowAssignModal}>
                            <DialogContent>
                                <DialogHeader>
                                    <DialogTitle>Assign Items</DialogTitle>
                                </DialogHeader>
                                {/* Your custom assign-item form goes here */}
                                <p className="text-sm text-muted-foreground">Assign actual item units here...</p>
                                <DialogFooter>
                                    <Button onClick={() => setShowAssignModal(false)}>Close</Button>
                                </DialogFooter>
                            </DialogContent>
                        </Dialog>
                    )}
                </DialogContent>
            </Dialog>
        </>
    );
};

ViewRequestDetails.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    request: PropTypes.shape({
        request_id: PropTypes.number.isRequired,
        status: PropTypes.string,
        purpose: PropTypes.string,
        remarks: PropTypes.string,
        request_date: PropTypes.string,
        user: PropTypes.object,
        requested_items: PropTypes.array,
        authorized_students: PropTypes.array,
    }),
    onSubmitStatus: PropTypes.func.isRequired,
};

export default ViewRequestDetails;
