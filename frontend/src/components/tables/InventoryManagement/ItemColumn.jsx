import { Button } from "@/components/ui/button";
import { Eye } from "lucide-react";

export const getColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            accessorKey: "image_url",
            header: "Image",
            cell: ({ row }) => {
                const imageUrl = row.getValue("image_url");
                return imageUrl ? (
                    <div className="w-12 h-12">
                        <img src={imageUrl} alt={row.getValue("name")} className="w-full h-full object-cover rounded-md" />
                    </div>
                ) : (
                    <div className="w-12 h-12 bg-gray-100 rounded-md flex items-center justify-center">
                        <span className="text-xs text-gray-400">No image</span>
                    </div>
                );
            },
        },
        {
            accessorKey: "item_id",
            header: "ID",
            sortable: true,
        },
        {
            accessorKey: "name",
            header: "Name",
            cell: ({ row }) => <div className="whitespace-normal break-words">{row.getValue("name")}</div>,
            sortable: true,
        },
        {
            accessorKey: "category.category_name",
            header: "Category",
            sortable: true,
        },
        {
            id: "actions",
            accessorKey: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const item = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewDetails && (
                            <Button onClick={() => handlers.onViewDetails(item)} size="sm" className="px-2 py-1">
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
            accessorKey: "image_url",
            header: "Image",
            cell: ({ row }) => {
                const imageUrl = row.getValue("image_url");
                return imageUrl ? (
                    <div className="w-16 h-16">
                        <img src={imageUrl} alt={row.getValue("name")} className="w-full h-full object-cover rounded-md" />
                    </div>
                ) : (
                    <div className="w-16 h-16 bg-gray-100 rounded-md flex items-center justify-center">
                        <span className="text-sm text-gray-400">No image</span>
                    </div>
                );
            },
        },
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
            accessorKey: "actions",
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
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey));
};

export default getColumns;
