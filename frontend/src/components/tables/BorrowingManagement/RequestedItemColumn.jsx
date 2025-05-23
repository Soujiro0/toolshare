import { Button } from "@/components/ui/button";
import { Eye, FilePen, Trash } from "lucide-react";

export const getRequestedItemColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            accessorKey: "item.name",
            header: "Item Details",
            sortable: true,
            cell: ({ row }) => {
                const item = row.original.item;
                return (
                    <div className="space-y-1">
                        <div className="font-medium">{item.name}</div>
                        <div className="text-sm text-muted-foreground">ID: {item.item_id || "N/A"}</div>
                    </div>
                );
            },
        },
        {
            accessorKey: "item.unit",
            header: "Qty",
            sortable: true,
            cell: ({ row }) => {
                const unit = row.original.item.unit;
                const quantity = row.original.quantity;
                return `${quantity || "N/A"} ${unit || "N/A"}`;
            },
        },
        {
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const requestItem = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewRequestItem && (
                            <Button onClick={() => handlers.onViewRequestItem(requestItem)} variant="ghost">
                                <Eye className="h-4 w-4" />
                            </Button>
                        )}
                        {handlers.onEditRequestItem && (
                            <Button onClick={() => handlers.onEditRequestItem(requestItem)}>
                                <FilePen className="h-4 w-4" />
                            </Button>
                        )}
                        {handlers.onDeleteRequestItem && (
                            <Button onClick={() => handlers.onDeleteRequestItem(requestItem)} variant="destructive" size="sm">
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
            accessorKey: "item.item_id",
            header: "Item ID",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value || <span className="text-muted-foreground italic">N/A</span>;
            },
        },
        {
            accessorKey: "item.name",
            header: "Item Name",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value || <span className="text-muted-foreground italic">N/A</span>;
            },
        },
        {
            accessorKey: "item.unit",
            header: "Requests Qty.",
            sortable: true,
            cell: ({ row }) => {
                const unit = row.original.item.unit;
                const quantity = row.original.quantity;
                return `${quantity || "N/A"} ${unit || "N/A"}`;
            },
        },
        {
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const requestItem = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewRequestItem && (
                            <Button onClick={() => handlers.onViewRequestItem(requestItem)} variant="ghost">
                                View
                                <Eye />
                            </Button>
                        )}
                        {handlers.onEditRequestItem && (
                            <Button onClick={() => handlers.onEditRequestItem(requestItem)}>
                                Edit
                                <FilePen />
                            </Button>
                        )}
                        {handlers.onDeleteRequestItem && (
                            <Button onClick={() => handlers.onDeleteRequestItem(requestItem)} variant="destructive">
                                Delete
                                <Trash />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];
    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey || col.id));
};

export default getRequestedItemColumns;
