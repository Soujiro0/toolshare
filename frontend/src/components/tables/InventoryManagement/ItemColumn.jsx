import { Button } from "@/components/ui/button";
import { Eye } from "lucide-react";

export const getColumns = (handlers = {}, excludeKeys = []) => [
    {
        accessorKey: "item_id",
        header: "ID",
        sortable: true,
    },
    {
        accessorKey: "name",
        header: "Name",
        sortable: true,
    },
    {
        accessorKey: "category.category_name",
        header: "Category",
        sortable: true,
    },
    {
        accessorKey: "item_units_count",
        header: "Available Quantity",
        sortable: true,
    },
    {
        accessorKey: "unit",
        header: "Unit",
        sortable: true,
    },
    {
        accessorKey: "acquisition_date",
        header: "Acquired",
        sortable: false,
        cell: ({ getValue }) => {
            const value = getValue();
            return value ? value : <span className="text-gray-400 italic">N/A</span>;
        },
    },
    {
        id: "actions",
        header: "Actions",
        sortable: false,
        cell: ({ row }) => {
            const item = row.original;
            return (
                <div className="flex gap-2">
                    {handlers.onViewDetails && (
                        <Button onClick={() => handlers.onViewDetails(item)}>
                            <span>View</span>
                            <Eye />
                        </Button>
                    )}
                </div>
            );
        },
    },
].filter(col => !excludeKeys.includes(col.accessorKey));

export default getColumns;