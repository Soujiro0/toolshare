import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { ScrollArea } from "@/components/ui/scroll-area";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";

const EditItemDialog = ({ isOpen, onClose, item, onSave, categories }) => {
    const [formData, setFormData] = useState({
        name: "",
        category_id: "",
        unit: "",
        acquisition_date: "",
    });

    const [imagePreview, setImagePreview] = useState(null);

    useEffect(() => {
        if (item) {
            setFormData({
                name: item.name || "",
                category_id: item.category?.category_id || "",
                unit: item.unit || "",
                acquisition_date: item.acquisition_date ? item.acquisition_date.split("T")[0] : "",
            });
            setImagePreview(item.image_url);
        }
    }, [item]);

    const handleImageChange = (e) => {
        const file = e.target.files[0];
        if (file) {
            setFormData({ ...formData, image: file });
            setImagePreview(URL.createObjectURL(file));
        }
    };

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prev) => ({ ...prev, [name]: value }));
    };

    const handleSave = () => {
        const formDataToSend = new FormData();

        // Laravel spoof for PUT
        formDataToSend.append("_method", "PUT");

        // Append flat fields
        formDataToSend.append("name", formData.name);
        formDataToSend.append("category_id", formData.category_id);
        formDataToSend.append("unit", formData.unit);
        formDataToSend.append("acquisition_date", formData.acquisition_date);

    // Always include remove_image with explicit boolean value
    if (formData.image) {
        formDataToSend.append("image", formData.image);
        formDataToSend.append("remove_image", "0"); // Explicitly set to "false"
    } else if (item.image_url && !imagePreview) {
        // If there was an image before and imagePreview is null, it means user wants to remove the image
        formDataToSend.append("remove_image", "1"); // Explicitly set to "true"
    } else {
        formDataToSend.append("remove_image", "0"); // Default case
    }

        // DEBUG: Log all entries to check what's actually being sent
        for (let pair of formDataToSend.entries()) {
            console.log(pair[0], pair[1]);
        }

        // Submit to parent handler
        onSave(item.item_id, formDataToSend);
        onClose();
    };

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="w-[95%] sm:w-[90%] h-[90vh] p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>Edit Item</DialogTitle>
                </DialogHeader>

                <ScrollArea className="h-[calc(90vh-8rem)]">
                    <div className="px-3">
                        <div className="grid gap-6">
                            <div className="flex flex-col gap-2">
                                <Label>Item Image</Label>
                                <div className="flex flex-col items-center gap-4">
                                    {imagePreview ? (
                                        <div className="w-32 h-32 relative">
                                            <img src={imagePreview} alt="Preview" className="w-full h-full object-cover rounded-lg" />
                                            <Button
                                                variant="destructive"
                                                size="sm"
                                                className="absolute -top-2 -right-2"
                                                onClick={() => {
                                                    setImagePreview(null);
                                                    setFormData({ ...formData, image: null });
                                                }}
                                            >
                                                ×
                                            </Button>
                                        </div>
                                    ) : (
                                        <div className="w-12 h-12 bg-gray-100 rounded-md flex items-center justify-center">
                                            <span className="text-xs text-center text-gray-400">No image</span>
                                        </div>
                                    )}
                                    <Input type="file" accept="image/*" onChange={handleImageChange} className="w-full" />
                                    <span className="text-sm text-muted-foreground">Supported formats: JPEG, PNG, JPG (max 2MB)</span>
                                </div>
                            </div>

                            <div className="flex flex-col gap-2">
                                <Label>Item Name</Label>
                                <Input name="name" value={formData.name} onChange={handleChange} required />
                            </div>

                            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div className="flex flex-col gap-2">
                                    <Label>Category</Label>
                                    <Select value={formData.category_id} onValueChange={(value) => setFormData({ ...formData, category_id: value })}>
                                        <SelectTrigger>
                                            <SelectValue placeholder="Select Category" />
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

                                <div className="flex flex-col gap-2">
                                    <Label>Unit</Label>
                                    <Input name="unit" value={formData.unit} onChange={handleChange} placeholder="e.g., pcs, sets" required />
                                </div>
                            </div>

                            <div className="flex flex-col gap-2 w-fit">
                                <Label>Acquisition Date</Label>
                                <Input type="date" name="acquisition_date" value={formData.acquisition_date} onChange={handleChange} />
                            </div>

                            <Button className="w-full mt-4" onClick={handleSave}>
                                Save Changes
                            </Button>
                        </div>
                    </div>
                </ScrollArea>
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
