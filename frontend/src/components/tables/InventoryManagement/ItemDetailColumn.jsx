import { Button } from "@/components/ui/button";
import { Eye, FilePenLine, Trash } from "lucide-react";

export const getUnitColumns = (handlers = {}, excludeKeys = []) =>
    [
        {
            accessorKey: "property_no",
            header: "Property No",
            sortable: true,
        },
        {
            accessorKey: "brand",
            header: "Brand",
            sortable: true,
        },
        {
            accessorKey: "model",
            header: "Model",
            sortable: true,
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
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const unit = row.original;
                return (
                    <div className="flex gap-2">
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
                        {handlers.onUpdateUnit && (
                            <Button
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handlers.onUpdateUnit(unit);
                                }}
                            >
                                <FilePenLine />
                                <span>Edit</span>
                            </Button>
                        )}
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
