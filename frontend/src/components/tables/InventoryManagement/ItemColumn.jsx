import { Button } from "@/components/ui/button";
import { UseMediaQuery } from "@/hooks/useMediaQuery"; // Add this hook
import { Eye } from "lucide-react";

export const getColumns = (handlers = {}, excludeKeys = []) => {
    const isMobile = UseMediaQuery("(max-width: 768px)");

    const mobileColumns = [
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
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const item = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewDetails && (
                            <Button 
                                onClick={() => handlers.onViewDetails(item)}
                                size="sm"
                                className="px-2 py-1"
                            >
                                <Eye className="h-4 w-4" />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];

    const desktopColumns = [
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
                                <span className="hidden md:inline">View</span>
                                <Eye className="h-4 w-4 md:ml-2" />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];

    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter(col => !excludeKeys.includes(col.accessorKey));
};

export default getColumns;