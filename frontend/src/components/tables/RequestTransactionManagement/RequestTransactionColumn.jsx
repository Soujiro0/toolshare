import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { formatDateTime } from "@/lib/utils";
import { Eye } from "lucide-react";

export const getRequestTransactionColumns = (handlers = {}, excludeKeys = []) => {
    const columns = [
        {
            accessorKey: "request_id",
            header: "Request ID",
            sortable: true,
        },
        {
            accessorKey: "user.user_id",
            header: "User ID",
            sortable: true,
        },
        {
            accessorKey: "user.name",
            header: "Requested By",
            sortable: true,
        },
        {
            accessorKey: "status",
            header: "Status",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                const status = value?.toUpperCase() || "N/A";

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
            accessorKey: "request_date",
            header: "Requested Date",
            sortable: true,
            cell: ({ row }) => <span>{formatDateTime(row.original.request_date)}</span>,
        },
        {
            accessorKey: "processed_date",
            header: "Processed Date",
            sortable: true,
            cell: ({ row }) => (
                <div>
                    {row.original.processed_date ? formatDateTime(row.original.processed_date) : (
                        <span className="text-muted-foreground italic">Not Processed</span>
                    )}
                </div>
            ),
        },
        {
            accessorKey: "return_date",
            header: "Return Date",
            sortable: true,
            cell: ({ row }) => (
                <div>
                    {row.original.return_date ? formatDateTime(row.original.return_date) : (
                        <span className="text-muted-foreground italic">Not Returned</span>
                    )}
                </div>
            ),
        },    
        {
            id: "actions",
            header: "Actions",
            cell: ({ row }) => {
                const request = row.original;
                return (
                    <div className="flex gap-1">
                        {handlers.onViewRequest && (
                            <>
                                <Button onClick={() => handlers.onViewRequest(request)}>
                                    View
                                    <Eye />
                                </Button>
                            </>
                        )}
                    </div>
                );
            },
        },
    ];

    return columns.filter((col) => {
        const key = col.accessorKey || col.id;
        return !excludeKeys.includes(key);
    });
};

export default getRequestTransactionColumns;