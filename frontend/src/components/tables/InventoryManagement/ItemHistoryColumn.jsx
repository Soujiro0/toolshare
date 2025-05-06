import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Eye } from "lucide-react";

export const getItemUnitHistoryColumn = (handlers = {}, excludeKeys = []) =>
    [
        {
            accessorKey: "request.request_id",
            header: "Request ID",
            sortable: true,
        },
        {
            accessorKey: "request.user.user_id",
            header: "User ID",
            sortable: true,
        },
        {
            accessorKey: "request.user.name",
            header: "Borrower",
            sortable: true,
        },
        {
            accessorKey: "unit.property_no",
            header: "Property No.",
            sortable: true,
        },
        {
            accessorKey: "unit.item.name",
            header: "Item Name",
            sortable: true,
        },
        {
            accessorKey: "unit.brand",
            header: "Brand",
            sortable: true,
        },
        {
            accessorKey: "unit.model",
            header: "Model",
            sortable: true,
        },
        {
            accessorKey: "request.status",
            header: "Status",
            sortable: true,
            cell: ({ getValue }) => {
                const status = getValue()?.toUpperCase() || "N/A";
                const badgeVariant =
                    {
                        PENDING: "bg-yellow-400 text-black",
                        APPROVED: "bg-emerald-500 text-white",
                        REJECTED: "bg-rose-500 text-white",
                        CLAIMED: "bg-blue-500 text-white",
                        RETURNED: "bg-gray-300 text-black",
                    }[status] || "outline";
                return <Badge className={badgeVariant}>{status}</Badge>;
            },
        },
        {
            accessorKey: "item_condition_out",
            header: "Condition Out",
            sortable: true,
        },
        {
            accessorKey: "item_condition_in",
            header: "Condition In",
            sortable: true,
        },
        {
            accessorKey: "damage_status",
            header: "Damage",
            sortable: true,
            cell: ({ getValue }) => {
                const status = getValue()?.toUpperCase() || "N/A";
                const badgeVariant =
                    {
                        UNDAMAGED: "bg-yellow-400 text-black",
                        DAMAGED: "bg-rose-500 text-white",
                    }[status] || "outline";
                return <Badge className={badgeVariant}>{status}</Badge>;
            },
        },
        {
            accessorKey: "returned_date",
            header: "Returned Date",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? new Date(value).toLocaleString() : <span className="text-muted-foreground italic">N/A</span>;
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
                        {handlers.onView && (
                            <Button
                                onClick={() => handlers.onView(item)}
                                variant="ghost"
                            >
                                View
                                <Eye className="ml-2 h-4 w-4" />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ].filter((col) => !excludeKeys.includes(col.accessorKey || col.id));

export default getItemUnitHistoryColumn;
