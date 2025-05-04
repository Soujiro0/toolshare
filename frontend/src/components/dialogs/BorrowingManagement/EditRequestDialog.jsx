import SelectItemsDialog from "@/components/dialogs/BorrowingManagement/SelectItemsDialog";
import { getAuthorizedStudentColumns } from "@/components/tables/BorrowingManagement/AuthorizedStudentColumn";
import { getRequestedItemColumns } from "@/components/tables/BorrowingManagement/RequestedItemColumn";
import DataTable from "@/components/tables/DataTable";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Toaster } from "@/components/ui/sonner";
import { Textarea } from "@/components/ui/textarea";
import { Plus } from "lucide-react";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";
import { toast } from "sonner";

const EditRequestDialog = ({ request, onClose, onSubmit, isOpen }) => {
    const [remarks, setRemarks] = useState("");
    const [purpose, setPurpose] = useState("");
    const [items, setItems] = useState([]);
    const [authorizedStudents, setAuthorizedStudents] = useState([]);
    const [studentName, setStudentName] = useState("");
    const [studentId, setStudentId] = useState("");
    const [isSelectItemsDialogOpen, setSelectItemsDialogOpen] = useState(false);

    useEffect(() => {
        if (request) {
            setRemarks(request.remarks || "");
            setPurpose(request.purpose || "");
            setItems(request.requested_items || []);
            setAuthorizedStudents(request.authorized_students || []);
        }
    }, [request]);

    const processedItems = items.map((requestItem) => {
        const item = requestItem.item || requestItem;
        return {
            item_id: item.item_id,
            name: item.name,
            quantity: requestItem.quantity || 1,
        };
    });

    const normalizeItemsForTable = (items) =>
        items.map((requestItem) => {
            const item = requestItem.item || requestItem;
            return {
                item: {
                    item_id: item.item_id,
                    name: item.name,
                    unit: item.unit,
                },
                quantity: requestItem.quantity || 1,
            };
        });

    const handleAddStudent = () => {
        if (studentName.trim() && studentId.trim()) {
            setAuthorizedStudents((prev) => [...prev, { name: studentName.trim(), student_id: studentId.trim() }]);
            setStudentName("");
            setStudentId("");
        } else {
            toast.error("Please enter both student name and ID.");
        }
    };

    const handleRemoveStudent = (idToRemove) => {
        setAuthorizedStudents((prev) => prev.filter((s) => s.student_id !== idToRemove));
    };

    const handleSelectItems = (selectedItems) => {
        setItems(selectedItems);
        setSelectItemsDialogOpen(false);
    };

    const handleRemoveItem = (itemToRemove) => {
        const removeId = (itemToRemove.item || itemToRemove).item_id;
        setItems(items.filter((i) => (i.item || i).item_id !== removeId));
    };

    const handleSubmit = () => {
        const payload = {
            remarks,
            purpose: purpose || remarks,
            items: items.map((i) => ({
                item_id: (i.item || i).item_id,
                quantity: i.quantity || 1,
            })),
            authorized_students: authorizedStudents,
        };
        onSubmit(payload);
    };

    const requestItemsColumns = getRequestedItemColumns({
        onDeleteRequestItem: handleRemoveItem,
    });

    const authorizedStudentsColumns = getAuthorizedStudentColumns({
        onRemoveStudent: handleRemoveStudent,
    });

    if (!request) return null;

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent className="w-[50%] min-w-[50%]">
                    <DialogHeader>
                        <DialogTitle>Edit Request</DialogTitle>
                    </DialogHeader>

                    <div className="space-y-4">
                        <div className="space-y-2">
                            <Label>Purpose:</Label>
                            <Textarea
                                className="resize-none"
                                placeholder="Write your purpose of request"
                                value={purpose}
                                onChange={(e) => setPurpose(e.target.value)}
                                name="purpose"
                            />
                        </div>

                        <div className="space-y-2">
                            <Label>Authorized Students:</Label>
                            <div className="flex gap-2">
                                <Input value={studentName} onChange={(e) => setStudentName(e.target.value)} placeholder="Student Name" />
                                <Input value={studentId} onChange={(e) => setStudentId(e.target.value)} placeholder="Student ID" />
                                <Button className="ml-auto" onClick={handleAddStudent}>
                                    Add
                                    <Plus />
                                </Button>
                            </div>
                        </div>
                        <div className="mt-2">
                            <DataTable
                                columns={authorizedStudentsColumns}
                                data={authorizedStudents}
                                searchKeys={["name"]}
                                filters={[]}
                                showEntries={false}
                                showSearchFilter={false}
                                entrySize={5}
                            />
                        </div>

                        <div className="space-y-2">
                            <div className="flex items-center">
                                <Label>Selected Items:</Label>
                                <Button className="ml-auto" onClick={() => setSelectItemsDialogOpen(true)}>
                                    Edit Items
                                    <Plus />
                                </Button>
                            </div>
                            <DataTable
                                data={normalizeItemsForTable(items)}
                                columns={requestItemsColumns}
                                showEntries={false}
                                showSearchFilter={false}
                            />
                        </div>

                        <Button className="w-full" onClick={handleSubmit}>
                            Save Changes
                        </Button>
                    </div>
                </DialogContent>
            </Dialog>

            <SelectItemsDialog
                open={isSelectItemsDialogOpen}
                onClose={() => setSelectItemsDialogOpen(false)}
                selectedItems={processedItems}
                onSelect={handleSelectItems}
            />
        </>
    );
};

EditRequestDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    onSubmit: PropTypes.func.isRequired,
    request: PropTypes.shape({
        request_id: PropTypes.number.isRequired,
        remarks: PropTypes.string,
        purpose: PropTypes.string,
        requested_items: PropTypes.array,
        authorized_students: PropTypes.array,
    }),
};

export default EditRequestDialog;
