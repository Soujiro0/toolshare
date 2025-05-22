import { Button } from "@/components/ui/button";
import { Checkbox } from "@/components/ui/checkbox";

export const getSelectableItemsColumns = (isMobile, handlers = {}, excludeKeys = []) => {
const mobileColumns = [
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
        id: "item_info",
        header: "Item",
        cell: ({ row }) => {
            const item = row.original;
            const imageUrl = item.image_url;
            return (
                <div className="flex space-x-3 items-start w-full max-w-xs">
                    <div className="w-16 h-16 flex-shrink-0">
                        {imageUrl ? (
                            <img
                                src={imageUrl}
                                alt={item.name}
                                className="w-full h-full object-cover rounded-md"
                            />
                        ) : (
                            <div className="w-full h-full bg-gray-100 rounded-md flex items-center justify-center">
                                <span className="text-sm text-gray-400">No image</span>
                            </div>
                        )}
                    </div>
                    <div className="space-y-1 min-w-0">
                        <div className="font-medium break-words whitespace-normal">{item.name}</div>
                        <div className="text-sm text-muted-foreground break-words whitespace-normal">
                            {item.category.category_name}
                        </div>
                        <div className="text-sm text-muted-foreground">
                            <strong>Available: </strong><br />
                            {item.quantity_available} {item.unit}
                        </div>
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
                    <Button size="sm" variant="outline" className="bg-red-400 text-white font-bold" onClick={() => handlers.onDecrement?.(item.item_id)}>
                        -
                    </Button>
                    <span><strong>{item.quantity}</strong></span>
                    <Button
                        size="sm"
                        variant="outline"
                        className="bg-green-600 text-white font-bold"
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
