import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";

export const getSelectableItemsColumns = (handlers = {}, excludeKeys = []) => [
    {
        id: "select",
        header: "",
        cell: ({ row }) => {
            const item = row.original;
            return (
                <Checkbox
                    checked={item.checked}
                    onCheckedChange={(val) => handlers.onToggleSelect?.(item.item_id, val)}
                />
            );
        },
    },
    {
        accessorKey: "name",
        header: "Item Name",
        sortable: true,
    },
    {
        accessorKey: "category.category_name",
        header: "Category",
        sortable: true,
    },
    {
        accessorKey: "quantity_available",
        header: "Available",
        sortable: true,
        cell: ({ getValue, row }) => {
            const item = row.original;
            return (
                <span className="text-sm text-muted-foreground block">
                    {getValue()} {item.unit}
                </span>
            );
        },
    },    
    {
        id: "quantity_controls",
        header: "Quantity to Borrow",
        cell: ({ row }) => {
            const item = row.original;

            return (
                <div className="flex items-center space-x-2">
                    <Button
                        size="sm"
                        variant="outline"
                        onClick={() => handlers.onDecrement?.(item.item_id)}
                    >
                        -
                    </Button>
                    <span>{item.quantity}</span>
                    <Button
                        size="sm"
                        variant="outline"
                        onClick={() => handlers.onIncrement?.(item.item_id)}
                        disabled={item.quantity >= item.quantity_available}
                    >
                        +
                    </Button>
                </div>
            );
        },
    },
].filter(col => !excludeKeys.includes(col.accessorKey || col.id));

export default getSelectableItemsColumns;