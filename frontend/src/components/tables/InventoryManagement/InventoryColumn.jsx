import { Button } from "@/components/ui/button";

export const columns = (onViewDetails) => [
    { accessorKey: "item_id", header: "ID" },
    { accessorKey: "name", header: "Name" },
    { accessorKey: "category.category_name", header: "Category" },
    { accessorKey: "item_units_count", header: "Available Qty" },
    { accessorKey: "unit", header: "Unit" },
    {
        accessorKey: "acquisition_date",
        header: "Acquired",
        cell: ({ getValue }) => {
            const value = getValue();
            return value ? value : <span className="text-gray-400 italic">N/A</span>;
        },
    },
    {
        id: "actions",
        header: "Actions",
        cell: ({ row }) => (
            <>
                <div>
                    <Button onClick={() => {
                        console.log(row.original)
                        onViewDetails(row.original)
                    }}>View Details</Button>
                </div>
            </>
        ),
    },
];

export default columns;
