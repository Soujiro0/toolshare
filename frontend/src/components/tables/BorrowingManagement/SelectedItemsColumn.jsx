import { Button } from "@/components/ui/button";
import { X } from "lucide-react";

export const getSelectedItemsColumns = (handlers = {}, excludeKeys = []) => [
    {
        accessorKey: "name",
        header: "Item",
        sortable: true,
    },
    {
        accessorKey: "category.category_name",
        header: "Category",
        sortable: true,
        cell: ({ getValue }) => getValue() || <span className="text-gray-400 italic">N/A</span>,
    },
    {
        accessorKey: "quantity",
        header: "Quantity",
        sortable: false,
    },
    {
        id: "actions",
        header: "Actions",
        sortable: false,
        cell: ({ row }) => {
            const item = row.original;
            return (
                <div>
                    {handlers.onRemove && (
                        <Button
                            variant="outline"
                            onClick={() => handlers.onRemove(item.item_id)}
                        >
                            <span>Remove</span>
                            <X />
                        </Button>
                    )}
                </div>
            );
        },
    },
].filter(col => !excludeKeys.includes(col.accessorKey || col.id));

export default getSelectedItemsColumns;
