import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { ScrollArea } from "@/components/ui/scroll-area";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Textarea } from "@/components/ui/textarea";
import PropTypes from "prop-types";
import { useState } from "react";

const defaultUnit = {
    brand: "",
    model: "",
    specification: "",
    item_condition: "EXCELLENT",
    quantity: 1,
};

const AddItemDialog = ({ isOpen, onClose, onSave, categories }) => {
    const [hasMultipleUnits, setHasMultipleUnits] = useState(false);
    const [formData, setFormData] = useState({
        name: "",
        category_id: "",
        unit: "",
        acquisition_date: "",
        units: [{ ...defaultUnit }],
    });
    const [multipleUnitToBeAdd, setMultipleUnitToBeAdd] = useState(1);

    const handleBaseChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
    };

    const handleUnitChange = (index, field, value) => {
        const updatedUnits = [...formData.units];
        updatedUnits[index][field] = value;
        setFormData({ ...formData, units: updatedUnits });
    };

    const addUnit = (numberOfUnitToBeAdded = 1) => {
        const newUnits = [...formData.units];
        for (let i = 0; i < numberOfUnitToBeAdded; i++) {
            newUnits.push({ ...defaultUnit });
        }
        setFormData({ ...formData, units: newUnits });
    };

    const removeUnit = (index) => {
        const updatedUnits = formData.units.filter((_, i) => i !== index);
        setFormData({ ...formData, units: updatedUnits });
    };

    const handleSave = () => {
        onSave(formData);
        setFormData({
            name: "",
            category_id: "",
            unit: "",
            acquisition_date: "",
            units: [{ ...defaultUnit }],
        });
        onClose();
    };

    return (
        <Dialog
            open={isOpen}
            onOpenChange={() => {
                onClose();
                setFormData({
                    name: "",
                    category_id: "",
                    unit: "",
                    acquisition_date: "",
                    units: [{ ...defaultUnit }],
                });
            }}
        >
            <DialogContent className="w-[95%] sm:w-[90%] h-[90vh] p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>Add New Item</DialogTitle>
                </DialogHeader>

                <ScrollArea className="h-[calc(90vh-8rem)]">
                    <div className="px-3">
                        <div className="grid gap-3">
                            <div className="grid grid-cols-1 lg:grid-cols-2 w-full gap-4">
                                <div className="w-full grid gap-3">
                                    <div className="flex flex-col gap-2">
                                        <Label>Item Name</Label>
                                        <Input name="name" value={formData.name} onChange={handleBaseChange} required />
                                    </div>

                                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                        <div className="flex flex-col gap-2">
                                            <Label>Category ID</Label>
                                            <Select
                                                value={formData.category_id}
                                                onValueChange={(value) => setFormData({ ...formData, category_id: value })}
                                            >
                                                <SelectTrigger className="w-[180px]">
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

                                        <div className="flex flex-col gap-2">
                                            <Label>Unit</Label>
                                            <Input
                                                name="unit"
                                                value={formData.unit}
                                                onChange={handleBaseChange}
                                                placeholder="e.g., pcs, sets"
                                                required
                                            />
                                        </div>
                                    </div>

                                    <div className="flex flex-col gap-2 w-fit">
                                        <Label>Acquisition Date</Label>
                                        <Input type="date" name="acquisition_date" value={formData.acquisition_date} onChange={handleBaseChange} />
                                    </div>

                                    <div className="flex items-center gap-2 my-2">
                                        <Label htmlFor="hasMultiple">Has multiple unit variants?</Label>
                                        <Checkbox
                                            id="hasMultiple"
                                            checked={hasMultipleUnits}
                                            onCheckedChange={(checked) => {
                                                setHasMultipleUnits(checked);
                                                if (!checked) {
                                                    setFormData({ ...formData, units: [formData.units[0]] });
                                                }
                                            }}
                                        />
                                    </div>

                                    {hasMultipleUnits && (
                                        <>
                                            <div className="flex items-center gap-2 my-2">
                                                <Label>How many multiple units to be add?</Label>
                                                <Input
                                                    type="number"
                                                    value={multipleUnitToBeAdd}
                                                    onChange={(e) => setMultipleUnitToBeAdd(Number(e.target.value))}
                                                    min="1"
                                                    className="w-24"
                                                />
                                            </div>
                                        </>
                                    )}
                                </div>

                                <div className="w-full grid gap-3">
                                    <div className="flex flex-col gap-4">
                                        <div className="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                                            <Label>Units: {formData.units.length}</Label>
                                            {hasMultipleUnits && (
                                                <div className="flex flex-wrap gap-2">
                                                    <Button variant="outline" onClick={() => addUnit(1)}>
                                                        + Add Single Unit
                                                    </Button>
                                                    <Button variant="outline" onClick={() => addUnit(multipleUnitToBeAdd)}>
                                                        + Add Multiple Unit
                                                    </Button>
                                                </div>
                                            )}
                                        </div>
                                        <ScrollArea className="h-[400px] sm:h-[600px]">
                                            {/* Set the height to make it scrollable */}
                                            <div className="flex flex-col gap-2">
                                                {[...formData.units].reverse().map((unit, reversedIndex) => {
                                                    const originalIndex = formData.units.length - 1 - reversedIndex;
                                                    return (
                                                        <div key={originalIndex} className="border p-4 rounded-md space-y-3 bg-muted/20">
                                                            <div className="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2">
                                                                <Label>Unit #{originalIndex + 1}</Label>
                                                                {hasMultipleUnits && formData.units.length > 1 && (
                                                                    <div className="text-right">
                                                                        <Button
                                                                            variant="destructive"
                                                                            size="sm"
                                                                            onClick={() => removeUnit(originalIndex)}
                                                                        >
                                                                            Remove Unit
                                                                        </Button>
                                                                    </div>
                                                                )}
                                                            </div>
                                                            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                                <div className="flex flex-col gap-2">
                                                                    <Label>Brand</Label>
                                                                    <Input
                                                                        value={unit.brand}
                                                                        onChange={(e) => handleUnitChange(originalIndex, "brand", e.target.value)}
                                                                        placeholder="Brand Name"
                                                                    />
                                                                </div>
                                                                <div className="flex flex-col gap-2">
                                                                    <Label>Model</Label>
                                                                    <Input
                                                                        value={unit.model}
                                                                        onChange={(e) => handleUnitChange(originalIndex, "model", e.target.value)}
                                                                        placeholder="Unit Model"
                                                                    />
                                                                </div>
                                                                <div className="flex flex-col gap-2 w-fit">
                                                                    <Label>Quantity</Label>
                                                                    <div className="flex items-center gap-2 w-fit">
                                                                        <Input
                                                                            type="number"
                                                                            value={unit.quantity}
                                                                            onChange={(e) =>
                                                                                handleUnitChange(originalIndex, "quantity", e.target.value)
                                                                            }
                                                                            min="1"
                                                                            className="w-24"
                                                                        />
                                                                        <span className="text-sm text-muted-foreground">
                                                                            {formData.unit ? (
                                                                                <span className="font-medium">{formData.unit}</span>
                                                                            ) : (
                                                                                <span className="italic text-gray-400">Unit not specified</span>
                                                                            )}
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div className="flex flex-col gap-2">
                                                                    <Label>Condition</Label>
                                                                    <Select
                                                                        value={unit.item_condition}
                                                                        onValueChange={(val) =>
                                                                            handleUnitChange(originalIndex, "item_condition", val)
                                                                        }
                                                                    >
                                                                        <SelectTrigger>
                                                                            <SelectValue placeholder="Condition" />
                                                                        </SelectTrigger>
                                                                        <SelectContent>
                                                                            <SelectItem value="EXCELLENT">Excellent</SelectItem>
                                                                            <SelectItem value="GOOD">Good</SelectItem>
                                                                            <SelectItem value="POOR">Poor</SelectItem>
                                                                        </SelectContent>
                                                                    </Select>
                                                                </div>
                                                            </div>

                                                            <div className="flex flex-col gap-2">
                                                                <Label>Specification</Label>
                                                                <Textarea
                                                                    className="resize-none"
                                                                    value={unit.specification}
                                                                    onChange={(e) => handleUnitChange(originalIndex, "specification", e.target.value)}
                                                                    placeholder="Unit specification"
                                                                />
                                                            </div>
                                                        </div>
                                                    );
                                                })}
                                            </div>
                                        </ScrollArea>
                                    </div>
                                </div>
                            </div>

                            <Button className="w-full mt-4" onClick={handleSave}>
                                Save Item
                            </Button>
                        </div>
                    </div>
                </ScrollArea>
            </DialogContent>
        </Dialog>
    );
};

AddItemDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    onSave: PropTypes.func.isRequired,
    categories: PropTypes.array.isRequired,
};

export default AddItemDialog;
