import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";

const EditItemDialog = ({ isOpen, onClose, item, onSave, categories }) => {
    const [itemId, setItemId] = useState(0);
    const [editedItem, setEditedItem] = useState({
        name: "",
        category_id: "",
        unit: "",
        acquisition_date: "",
    });

    useEffect(() => {
        if (item) {
            setItemId(item.item_id);
            setEditedItem({
                name: item.name || "",
                category_id: item.category?.category_id || "",
                unit: item.unit || "",
                acquisition_date: item.acquisition_date || "",
            });
        }
    }, [item]);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setEditedItem((prev) => ({ ...prev, [name]: value }));
    };

    const handleSubmit = () => {
        onSave(itemId, editedItem);
        onClose();
    };

    if (!editedItem) return null;

        return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="w-[95%] sm:w-[80%] md:w-[70%] lg:w-[60%] max-w-[800px] max-h-[90vh] overflow-y-auto">
                <DialogHeader>
                    <DialogTitle>Edit Item Details</DialogTitle>
                </DialogHeader>

                <div className="grid gap-4">
                    <div className="flex flex-col gap-2">
                        <h1><strong>Item ID:</strong> {itemId}</h1>
                    </div>
                    {/* Item Name */}
                    <div className="flex flex-col gap-2">
                        <Label>Item Name</Label>
                        <Input name="name" value={editedItem.name} onChange={handleChange} placeholder="Enter item name" />
                    </div>

                    <div className="flex flex-col sm:flex-row gap-4">
                        {/* Category */}
                        <div className="flex flex-col gap-2 w-full sm:w-1/2">
                            <Label>Category ID</Label>
                            <Select value={editedItem.category_id} onValueChange={(value) => setEditedItem({ ...editedItem, category_id: value })}>
                                <SelectTrigger className="w-full">
                                    <SelectValue placeholder="Item Category" />
                                </SelectTrigger>
                                <SelectContent>
                                    {categories.map((cat) => (
                                        <SelectItem key={cat.category_id} value={cat.category_id}>
                                            {cat.category_name}
                                        </SelectItem>
                                    ))}
                                </SelectContent>
                            </Select>
                        </div>

                        {/* Unit */}
                        <div className="flex flex-col gap-2 w-full sm:w-1/2">
                            <Label>Unit</Label>
                            <Input name="unit" value={editedItem.unit} onChange={handleChange} placeholder="e.g., pcs, sets" />
                        </div>
                    </div>

                    {/* Acquisition Date */}
                    <div className="flex flex-col gap-2">
                        <Label>Acquisition Date</Label>
                        <Input type="date" name="acquisition_date" value={editedItem.acquisition_date || ""} onChange={handleChange} className="w-full sm:w-fit" />
                    </div>
                </div>

                <DialogFooter className="mt-6 flex-col sm:flex-row gap-2">
                    <Button variant="outline" onClick={onClose} className="w-full sm:w-auto">
                        Cancel
                    </Button>
                    <Button onClick={handleSubmit} className="w-full sm:w-auto">Save Changes</Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

EditItemDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    item: PropTypes.object,
    onSave: PropTypes.func.isRequired,
    categories: PropTypes.array.isRequired,
};

export default EditItemDialog;
