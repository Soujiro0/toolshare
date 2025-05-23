import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Eye, FilePen, Trash } from "lucide-react";

export const getRequestColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            accessorKey: "request_id",
            header: "Request ID",
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
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const request = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewRequest && (
                            <Button onClick={() => handlers.onViewRequest(request)} variant="ghost" size="sm">
                                <Eye className="h-4 w-4" />
                            </Button>
                        )}
                        {handlers.onEditRequest && (
                            <Button onClick={() => handlers.onEditRequest(request)} size="sm">
                                <FilePen className="h-4 w-4" />
                            </Button>
                        )}
                        {handlers.onDeleteRequest && (
                            <Button onClick={() => handlers.onDeleteRequest(request)} variant="destructive" size="sm">
                                <Trash className="h-4 w-4" />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];

    const desktopColumns = [
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
            accessorKey: "purpose",
            header: "Purpose",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value || <span className="text-muted-foreground italic">None</span>;
            },
        },
        {
            accessorKey: "remarks",
            header: "Remarks",
            sortable: false,
            cell: ({ getValue }) => {
                const value = getValue();
                return value || <span className="text-muted-foreground italic">None</span>;
            },
        },
        {
            accessorKey: "authorized_students",
            header: "Authorized Students",
            sortable: false,
            cell: ({ getValue }) => {
                const value = getValue();
                return Array.isArray(value) && value.length > 0 ? (
                    `${value.length} student(s)`
                ) : (
                    <span className="text-muted-foreground italic">None</span>
                );
            },
        },
        {
            accessorKey: "total_request_items",
            header: "Total Items",
            sortable: true,
        },
        {
            accessorKey: "request_date",
            header: "Request Date",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? new Date(value).toLocaleString() : <span className="text-muted-foreground italic">N/A</span>;
            },
        },
        {
            accessorKey: "return_date",
            header: "Return Date",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? new Date(value).toLocaleString() : <span className="text-muted-foreground italic">N/A</span>;
            },
        },
        {
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const request = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewRequest && (
                            <Button onClick={() => handlers.onViewRequest(request)} variant="ghost">
                                View
                                <Eye />
                            </Button>
                        )}
                        {handlers.onEditRequest && (
                            <Button onClick={() => handlers.onEditRequest(request)}>
                                Edit
                                <FilePen />
                            </Button>
                        )}
                        {handlers.onDeleteRequest && (
                            <Button onClick={() => handlers.onDeleteRequest(request)} variant="destructive">
                                Delete
                                <Trash />
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

export default getRequestColumns;
