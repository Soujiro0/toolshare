import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";
import { Eye, FilePenLine, Trash } from "lucide-react";
import { QRCodeSVG } from "qrcode.react";

export const getUnitColumns = (handlers = {}, excludeKeys = []) =>
    [
        {
            accessorKey: "checkbox",
            id: "select",
            header: "",
            cell: ({ row }) => {
                const itemUnit = row.original;
                return (
                    <div className="flex items-center justify-start">
                        <Checkbox checked={itemUnit.checked} onCheckedChange={(val) => handlers.onToggleSelect?.(itemUnit.unit_id, val)} />
                    </div>
                );
            },
        },
        {
            accessorKey: "unit_id",
            header: "Unit ID",
            sortable: true,
        },
        {
            accessorKey: "property_no",
            header: "Property No",
            sortable: true,
        },
        {
            accessorKey: "brand",
            header: "Brand",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? value : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            accessorKey: "model",
            header: "Model",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? value : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            accessorKey: "specification",
            header: "Specs",
            sortable: false,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? value : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            accessorKey: "item_condition",
            header: "Condition",
            sortable: true,
        },
        {
            accessorKey: "status",
            header: "Status",
            sortable: true,
        },
        {
            accessorKey: "qr_code",
            header: "QR Code",
            sortable: false,
            cell: ({ row }) => {
                const unit = row.original;
                return <QRCodeSVG value={`${unit.property_no} ${unit.brand} ${unit.model}`} size={70} marginSize={1} level="L" />;
            },
        },
        {
            accessorKey: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const unit = row.original;
                return (
                    <div className="flex gap-2">
                        {/* View History */}
                        {handlers.onViewHistory && (
                            <Button
                                variant="outline"
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onViewHistory(unit);
                                }}
                            >
                                <span>View History</span>
                                <Eye />
                            </Button>
                        )}
                        {/* Edit Unit */}
                        {handlers.onUpdateUnit && (
                            <Button
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onUpdateUnit(unit);
                                }}
                            >
                                <span>Edit</span>
                                <FilePenLine />
                            </Button>
                        )}
                        {/* Delete Unit */}
                        {handlers.onDeleteUnit && (
                            <Button
                                variant="destructive"
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onDeleteUnit(unit);
                                }}
                            >
                                <span>Delete</span>
                                <Trash />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ].filter((col) => !excludeKeys.includes(col.accessorKey));

export default getUnitColumns;
