import ApiService from "@/api/ApiService";
import { getAuthorizedStudentColumns } from "@/components/tables/BorrowingManagement/AuthorizedStudentColumn";
import { getRequestedItemColumns } from "@/components/tables/BorrowingManagement/RequestedItemColumn";
import DataTable from "@/components/tables/DataTable";
import { getUnitColumns } from "@/components/tables/InventoryManagement/ItemUnitColumn";
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Card, CardHeader, CardTitle } from "@/components/ui/card";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Label } from "@/components/ui/label";
import { Toaster } from "@/components/ui/sonner";
import { Textarea } from "@/components/ui/textarea";
import { AuthContext } from "@/context/AuthContext";
import { Loader2 } from "lucide-react";
import PropTypes from "prop-types";
import { useContext, useState } from "react";
import { toast } from "sonner";
import ReturnCheckDialog from "../ReturnCheckDialog";
import AssignUnitsDialog from "./AssignUnitsDialog";
import RequestQRCodeDialog from "./RequestQRCodeDialog";

const ViewRequestDetails = ({ isOpen, onClose, request, onSubmitStatus, isSubmitting, refresh }) => {
    const { auth } = useContext(AuthContext);
    const userRole = auth.user?.role;

    const [assignedItemsMap, setAssignedItemsMap] = useState({});
    const [showAssignModal, setShowAssignModal] = useState(false);
    const [showReturnDialog, setShowReturnDialog] = useState(false);

    const [showQrCodeDialog, setShowQrCodeDialog] = useState(false);

    const handleAssignUnits = (requestId, selectedUnits) => {
        setAssignedItemsMap((prev) => ({
            ...prev,
            [requestId]: selectedUnits,
        }));
    };

    const handleStatusUpdate = (newStatus) => {
        if (onSubmitStatus && request.request_id) {
            console.log("Updating status to:", newStatus);
            onSubmitStatus(request.request_id, newStatus);
        }
        console.log("SKIPPED");
    };

    const handleAssignUnitsCall = async (requestId, selectedUnits) => {
        try {
            const payload = {
                request_id: requestId,
                assigned_units: selectedUnits.map((unit) => ({
                    unit_id: unit.unit_id,
                    item_condition_out: unit.item_condition_out || unit.item_condition || "GOOD", // fallback if needed
                })),
            };

            const response = await ApiService.BorrowItemService.assignUnitToRequest(payload);
            console.log("Units assigned successfully:", response);

            if (!response.success) {
                console.error("Failed to assign units succ:", response.message);
                toast.error("Failed to assign units.");
                return;
            }
            toast.success("Units assigned successfully.");

            setAssignedItemsMap((prev) => ({
                ...prev,
                [requestId]: selectedUnits,
            }));
        } catch (error) {
            console.error("Error Assigning Units:", error);
            toast.error("Failed to assign units.");
        } finally {
            refresh();
            onClose();
        }
    };

    const hasAssignedItems = Array.isArray(request?.assigned_items) && request.assigned_items.length > 0;

    const transformedAssignedItems = (assignedItems) => {
        return assignedItems.map((item) => {
            // Extract the unit details
            const unit = item.unit || {};

            return {
                brand: unit.brand,
                checked: true, // You can change this logic as needed
                date_acquired: unit.date_acquired,
                item: {
                    item_id: unit.item_id,
                    name: unit.item?.name,
                    unit: unit.item?.unit,
                    acquisition_date: unit.item?.acquisition_date,
                    item_units_count: unit.item?.item_units_count,
                    date_created: unit.item?.date_created,
                    date_updated: unit.item?.date_updated,
                },
                item_condition: unit.item_condition,
                item_id: unit.item_id,
                model: unit.model,
                property_no: unit.property_no,
                specification: unit.specification,
                status: unit.status,
                unit_id: unit.unit_id,
            };
        });
    };

    const assignedItems = hasAssignedItems ? transformedAssignedItems(request.assigned_items) : assignedItemsMap[request?.request_id] || [];

    const authorizedStudentsColumns = getAuthorizedStudentColumns({}, ["actions"]);
    const requestItemsColumns = getRequestedItemColumns({}, ["actions"]);
    const unitColumns = getUnitColumns({}, ["checkbox", "actions", "qr_code", "status", "item_condition"]);

    if (!request) return null;

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
                                    <Badge
                                        className={
                                            {
                                                PENDING: "bg-yellow-400 text-black",
                                                APPROVED: "bg-emerald-500 text-white",
                                                REJECTED: "bg-rose-500 text-white",
                                                CLAIMED: "bg-blue-500 text-white",
                                                RETURNED: "bg-gray-300 text-black",
                                            }[request.status] || "outline"
                                        }
                                    >
                                        {request.status}
                                    </Badge>
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

                        {((request.status === "APPROVED" || request.status === "CLAIMED" || request.status === "RETURNED") && (userRole === "SUPER_ADMIN" || userRole === "ADMIN") ) && (
                            <div className="space-y-2">
                                <div className="flex items-center justify-between">
                                    <Label>Assign Items:</Label>
                                    <Button onClick={() => setShowAssignModal(true)}>Edit Assign Items</Button>
                                </div>
                                <DataTable columns={unitColumns} data={assignedItems || []} showEntries={false} showSearchFilter={false} />
                            </div>
                        )}
                    </div>

                    <DialogFooter className="flex gap-2">
                        {userRole === "INSTRUCTOR" && (
                            <>
                                <Button onClick={() => setShowQrCodeDialog(true)}>Generate QR Code</Button>
                            </>
                        )}

                        {(userRole === "SUPER_ADMIN" || userRole === "ADMIN") && (
                            <>
                                {request.status === "PENDING" && (
                                    <>
                                        <Button onClick={() => handleStatusUpdate("APPROVED")}>
                                            {isSubmitting ? <Loader2 className="animate-spin" size={16} /> : "APPROVE"}
                                        </Button>
                                        <Button variant="destructive" onClick={() => handleStatusUpdate("REJECTED")}>
                                            {isSubmitting ? <Loader2 className="animate-spin" size={16} /> : "REJECT"}
                                        </Button>
                                    </>
                                )}
                                {request.status === "APPROVED" && request.assigned_items.length === 0 && (
                                    <Button
                                        disabled={!assignedItems.length > 0}
                                        onClick={() => {
                                            handleAssignUnitsCall(request.request_id, assignedItems);
                                        }}
                                    >
                                        Confirmed Item Assign
                                    </Button>
                                )}

                                {request.status === "APPROVED" && request.assigned_items.length > 0 && (
                                    <Button disabled={!assignedItems.length} onClick={() => handleStatusUpdate("CLAIMED")}>
                                        CLAIMED
                                    </Button>
                                )}

                                {request.status === "CLAIMED" && (
                                    <>
                                        <Button variant="secondary" onClick={() => setShowReturnDialog(true)} disabled={!assignedItems.length}>
                                            Check Return Items
                                        </Button>
                                        <Button disabled={!assignedItems.length} onClick={() => handleStatusUpdate("RETURNED")}>
                                            RETURN
                                        </Button>
                                    </>
                                )}
                            </>
                        )}
                    </DialogFooter>

                    <RequestQRCodeDialog isOpen={showQrCodeDialog} onClose={() => setShowQrCodeDialog(false)} requestId={request.request_id}/>

                    <AssignUnitsDialog
                        isOpen={showAssignModal}
                        onClose={() => setShowAssignModal(false)}
                        request={request}
                        onSelect={(units) => handleAssignUnits(request.request_id, units)}
                        preselectedUnits={assignedItems}
                    />

                    <ReturnCheckDialog isOpen={showReturnDialog} onClose={() => setShowReturnDialog(false)} request={request} />
                        
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
        assigned_items: PropTypes.array,
    }),
    onSubmitStatus: PropTypes.func.isRequired,
    isSubmitting: PropTypes.bool,
    refresh: PropTypes.func,
};

export default ViewRequestDetails;
