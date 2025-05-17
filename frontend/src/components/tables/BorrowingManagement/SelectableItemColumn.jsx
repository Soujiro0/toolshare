import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";

export const getSelectableItemsColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            id: "select",
            header: "",
            cell: ({ row }) => {
                const item = row.original;
                return <Checkbox checked={item.checked} onCheckedChange={(val) => handlers.onToggleSelect?.(item.item_id, val)} />;
            },
        },
        {
            id: "item_info",
            header: "Item Details",
            cell: ({ row }) => {
                const item = row.original;
                return (
                    <div className="space-y-1 min-w-0 w-[150px]">
                        <div className="font-medium break-words whitespace-normal">{item.name}</div>
                        <div className="text-sm text-muted-foreground break-words whitespace-normal">{item.category.category_name}</div>
                        <div className="text-sm text-muted-foreground">
                            Available: {item.quantity_available} {item.unit}
                        </div>
                    </div>
                );
            },
        },
        {
            id: "quantity_controls",
            header: "Quantity",
            cell: ({ row }) => {
                const item = row.original;
                return (
                    <div className="flex items-center space-x-2">
                        <Button size="sm" variant="outline" onClick={() => handlers.onDecrement?.(item.item_id)}>
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
    ];

    const desktopColumns = [
        {
            id: "select",
            header: "",
            cell: ({ row }) => {
                const item = row.original;
                return <Checkbox checked={item.checked} onCheckedChange={(val) => handlers.onToggleSelect?.(item.item_id, val)} />;
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
                        <Button size="sm" variant="outline" onClick={() => handlers.onDecrement?.(item.item_id)}>
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
    ];

    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey || col.id));
};

export default getSelectableItemsColumns;
