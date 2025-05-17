import SelectItemsDialog from "@/components/dialogs/BorrowingManagement/SelectItemsDialog";
import { getAuthorizedStudentColumns } from "@/components/tables/BorrowingManagement/AuthorizedStudentColumn";
import { getRequestedItemColumns } from "@/components/tables/BorrowingManagement/RequestedItemColumn";
import DataTable from "@/components/tables/DataTable";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { ScrollArea } from "@/components/ui/scroll-area";
import { Toaster } from "@/components/ui/sonner";
import { Textarea } from "@/components/ui/textarea";
import { useMediaQuery } from "@/hooks/useMediaQuery";
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

    const isMobile = useMediaQuery("(max-width: 768px)");

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

    const requestItemsColumns = getRequestedItemColumns(isMobile, {
        onDeleteRequestItem: handleRemoveItem,
    });

    const authorizedStudentsColumns = getAuthorizedStudentColumns(isMobile, {
        onRemoveStudent: handleRemoveStudent,
    });

    if (!request) return null;

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent className="w-[95%] sm:w-[90%] h-[90vh] p-4 lg:p-6" width="90%">
                    <DialogHeader>
                        <DialogTitle>Edit Request</DialogTitle>
                    </DialogHeader>

                    <ScrollArea className="h-[calc(90vh-8rem)]">
                        <div className="px-3">
                            <div className="grid gap-4">
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
                                    <div className="flex flex-col sm:flex-row gap-2">
                                        <Input
                                            value={studentName}
                                            onChange={(e) => setStudentName(e.target.value)}
                                            placeholder="Student Name"
                                            className="flex-1"
                                        />
                                        <Input
                                            value={studentId}
                                            onChange={(e) => setStudentId(e.target.value)}
                                            placeholder="Student ID"
                                            className="flex-1"
                                        />
                                        <Button onClick={handleAddStudent} className="w-full sm:w-auto">
                                            Add
                                            <Plus className="ml-2" />
                                        </Button>
                                    </div>
                                </div>

                                <div className="space-y-2">
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
                                    <div className="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                                        <div className="flex items-center justify-between w-full">
                                            <Label>Selected Items:</Label>
                                            <Button onClick={() => setSelectItemsDialogOpen(true)}>
                                                <Plus />
                                                Edit Items
                                            </Button>
                                        </div>
                                    </div>
                                    <DataTable
                                        data={normalizeItemsForTable(items)}
                                        columns={requestItemsColumns}
                                        showEntries={false}
                                        showSearchFilter={false}
                                    />
                                </div>

                                <Button className="w-full mt-4" onClick={handleSubmit}>
                                    Save Changes
                                </Button>
                            </div>
                        </div>
                    </ScrollArea>
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
