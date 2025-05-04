import { Button } from "@/components/ui/button";
import { Eye, FilePen, Trash } from "lucide-react";

export const getRequestedItemColumns = (handlers = {}, excludeKeys = []) =>
    [
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
            header: "Quantity to be Borrowed",
            sortable: true,
            cell: ({ row }) => {
                const unit = row.original.item.unit;
                const quantity = row.original.quantity;
                return `${quantity || 'N/A'} ${unit || 'N/A'}`;
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
                            <Button
                                onClick={() => handlers.onViewRequestItem(requestItem)}
                                variant="ghost"
                            >
                                View
                                <Eye />
                            </Button>
                        )}
                        {handlers.onEditRequestItem && (
                            <Button
                                onClick={() => handlers.onEditRequestItem(requestItem)}
                            >
                                Edit
                                <FilePen />
                            </Button>
                        )}
                        {handlers.onDeleteRequestItem && (
                            <Button
                                onClick={() => handlers.onDeleteRequestItem(requestItem)}
                                variant="destructive"
                            >
                                Delete
                                <Trash />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ].filter((col) => !excludeKeys.includes(col.accessorKey || col.id));

export default getRequestedItemColumns;
