import { Checkbox } from "@/components/ui/checkbox";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Textarea } from "@/components/ui/textarea";
import { useDebounce } from "@/hooks/useDebounce";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";

// eslint-disable-next-line react-refresh/only-export-components
const DebouncedTextArea = ({ value, onChange, disabled }) => {
    const [localValue, setLocalValue] = useState(value);
    const debouncedValue = useDebounce(localValue, 1000);

    useEffect(() => {
        setLocalValue(value);
    }, [value]);

    useEffect(() => {
        if (debouncedValue !== value) {
            onChange?.(debouncedValue);
        }
    }, [debouncedValue, onChange, value]);

    const handleChange = (e) => {
        setLocalValue(e.target.value);
    };

    return (
        <Textarea
            value={localValue}
            onChange={handleChange}
            placeholder="Add notes (optional)"
            className="resize-none lg:max-w-[300px] max-w-[170px]"
            disabled={disabled}
            rows={3}
        />
    );
};

DebouncedTextArea.propTypes = {
    value: PropTypes.string,
    onChange: PropTypes.func.isRequired,
    disabled: PropTypes.bool.isRequired,
};

export const getReturnCheckColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            id: "return_and_details",
            header: "Unit Details",
            cell: ({ row }) => {
                const unit = row.original.unit;
                return (
                    <div className="flex flex-col gap-4">
                        <div className="flex items-start gap-2">
                            <Label>Return</Label>
                            <Checkbox
                                checked={handlers.isChecked?.(unit.unit_id) || false}
                                onCheckedChange={() => handlers.onToggle?.(unit.unit_id)}
                            />
                        </div>
                        <div className="space-y-1">
                            <p>
                                <span className="font-medium">Property No:</span> {unit.property_no}
                            </p>
                            <p>
                                <span className="font-medium">Item:</span> {unit.item?.name}
                            </p>
                            <p>
                                <span className="font-medium">Brand:</span> {unit.brand}
                            </p>
                            <p>
                                <span className="font-medium">Model:</span> {unit.model}
                            </p>
                        </div>
                    </div>
                );
            },
        },
        {
            id: "status_details",
            header: "Status",
            className: "w-full min-w-[250px]",
            cell: ({ row }) => {
                const unit = row.original.unit;
                const unitId = unit.unit_id;

                return (
                    <div className="space-y-4">
                        <div className="space-y-2">
                            <Label className="text-sm font-medium">Damage Status:</Label>
                            <Select
                                onValueChange={(value) => handlers.onStatusChange?.(unitId, value)}
                                value={handlers.getDamageStatus?.(unitId) || row.original.damage_status || "UNDAMAGED"}
                                disabled={!handlers.isChecked?.(unitId)}
                            >
                                <SelectTrigger className="w-full">
                                    <SelectValue placeholder="Select status" />
                                </SelectTrigger>
                                <SelectContent>
                                    <SelectItem value="UNDAMAGED">Undamaged</SelectItem>
                                    <SelectItem value="DAMAGED">Damaged</SelectItem>
                                </SelectContent>
                            </Select>
                        </div>

                        <div className="space-y-2">
                            <Label className="text-sm font-medium">Damage Notes:</Label>
                            <DebouncedTextArea
                                value={handlers.getDamageNotes?.(unitId) || row.original.damage_notes || ""}
                                onChange={(value) => handlers.onNotesChange?.(unitId, value)}
                                disabled={!handlers.isChecked(unitId)}
                            />
                        </div>

                        <div className="space-y-2">
                            <Label className="text-sm font-medium">Return Date:</Label>
                            <p className="text-sm">{row.original.returned_date ?? "Not Returned"}</p>
                        </div>
                    </div>
                );
            },
        },
    ];

    const desktopColumns = [
        {
            id: "return",
            header: "Return",
            cell: ({ row }) => {
                const unit = row.original.unit;
                return (
                    <div className="text-center">
                        <Checkbox checked={handlers.isChecked?.(unit.unit_id) || false} onCheckedChange={() => handlers.onToggle?.(unit.unit_id)} />
                    </div>
                );
            },
        },
        {
            accessorFn: (row) => row.unit?.unit_id,
            accessorKey: "unit.unit_id",
            header: "Unit ID",
            sortable: true,
        },
        {
            accessorFn: (row) => row.unit?.property_no,
            accessorKey: "unit.property_no",
            header: "Property No.",
            sortable: true,
        },
        {
            accessorFn: (row) => row.unit?.item?.name,
            accessorKey: "unit.item.name",
            header: "Item Name",
            className: "min-w-[150px]",
            sortable: true,
        },
        {
            accessorFn: (row) => row.unit?.brand,
            accessorKey: "unit.brand",
            header: "Brand",
            sortable: true,
        },
        {
            accessorFn: (row) => row.unit?.model,
            accessorKey: "unit.model",
            header: "Model",
            sortable: true,
        },
        {
            id: "damage_status",
            header: "Damage Status",
            sortable: false,
            cell: ({ row }) => {
                const unit = row.original.unit;
                return (
                    <Select
                        onValueChange={(value) => handlers.onStatusChange?.(unit.unit_id, value)}
                        value={handlers.getDamageStatus?.(unit.unit_id) || row.original.damage_status || "UNDAMAGED"}
                        disabled={!handlers.isChecked?.(unit.unit_id)}
                    >
                        <SelectTrigger className="w-full">
                            <SelectValue placeholder="Select status" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="UNDAMAGED">Undamaged</SelectItem>
                            <SelectItem value="DAMAGED">Damaged</SelectItem>
                        </SelectContent>
                    </Select>
                );
            },
        },
        {
            id: "damage_notes",
            header: "Damage Notes",
            sortable: false,
            cell: ({ row }) => {
                const unit = row.original.unit;
                const unitId = unit.unit_id;

                return (
                    <DebouncedTextArea
                        value={handlers.getDamageNotes?.(unitId) || row.original.damage_notes || ""}
                        onChange={(value) => handlers.onNotesChange?.(unitId, value)}
                        disabled={!handlers.isChecked(unitId)}
                    />
                );
            },
        },
        {
            accessorFn: (row) => row.returned_date,
            header: "Return Date",
            sortable: true,
            cell: ({ getValue }) => getValue() ?? "Not Returned",
        },
    ];

    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey));
};

export default getReturnCheckColumns;
