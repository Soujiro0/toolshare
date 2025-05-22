import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";
import { Eye, FilePenLine, Trash } from "lucide-react";
import { QRCodeSVG } from "qrcode.react";

export const getUnitColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            accessorKey: "property_no",
            header: "Property No",
            sortable: true,
        },
        {
            accessorKey: "status",
            header: "Status",
            sortable: true,
            cell: ({ getValue }) => {
                const status = getValue();

                const badgeVariant =
                    {
                        IN_USE: "bg-yellow-400 text-black text-[10px]",
                        AVAILABLE: "bg-emerald-500 text-white text-[10px]",
                        UNDER_MAINTENANCE: "bg-rose-500 text-white break-normal text-[8px]",
                    }[status] || "outline";

                return <Badge className={`${badgeVariant} break-words whitespace-normal`}>{status?.replace("_", " ")}</Badge>;
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
                                size="sm"
                                variant="outline"
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onViewHistory(unit);
                                }}
                            >
                                <Eye className="h-4 w-4" />
                            </Button>
                        )}
                        {/* Edit Unit */}
                        {handlers.onUpdateUnit && (
                            <Button
                                size="sm"
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onUpdateUnit(unit);
                                }}
                            >
                                <FilePenLine className="h-4 w-4" />
                            </Button>
                        )}
                        {/* Delete Unit */}
                        {handlers.onDeleteUnit && (
                            <Button
                                variant="destructive"
                                size="sm"
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onDeleteUnit(unit);
                                }}
                            >
                                <Trash className="h-4 w-4" />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];

    const desktopColumns = [
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
            accessorKey: "item.name",
            header: "Item Name",
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
            cell: ({ getValue }) => {
                const condition = getValue();

                const badgeVariant =
                    {
                        GOOD: "bg-yellow-400 text-black",
                        EXCELLENT: "bg-emerald-500 text-white",
                        POOR: "bg-rose-500 text-white",
                    }[condition] || "outline";

                return <Badge className={badgeVariant}>{condition?.replace("_", " ")}</Badge>;
            },
        },
        {
            accessorKey: "status",
            header: "Status",
            sortable: true,
            cell: ({ getValue }) => {
                const status = getValue();

                const badgeVariant =
                    {
                        IN_USE: "bg-yellow-400 text-black",
                        AVAILABLE: "bg-emerald-500 text-white",
                        UNDER_MAINTENANCE: "bg-rose-500 text-white",
                    }[status] || "outline";

                return <Badge className={badgeVariant}>{status?.replace("_", " ")}</Badge>;
            },
        },
        {
            accessorKey: "qr_code",
            header: "QR Code",
            sortable: false,
            cell: ({ row }) => {
                const unit = row.original;
                return <QRCodeSVG value={`${unit.unit_id}`} size={70} marginSize={1} level="L" />;
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
    ];

    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey));
};

export default getUnitColumns;
