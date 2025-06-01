import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { formatDateTime } from "@/lib/utils";
import { Eye } from "lucide-react";

export const getUserColumns = (isMobile, handlers = {}, excludeKeys = []) => {

    const mobileColumns = [
        {
            accessorKey: "user_id",
            header: "ID",
            sortable: true,
        },
        {
            accessorKey: "name",
            header: "Name",
            sortable: true,
        },
        {
            accessorKey: "role.role_name",
            header: "User Role",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? value.replace(/_/g, " ") : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const user = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewUserDetails && (
                            <Button onClick={() => handlers.onViewUserDetails(user)} size="sm" className="px-2 py-1">
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
            accessorKey: "user_id",
            header: "User ID",
            sortable: true,
        },
        {
            accessorKey: "username",
            header: "Username",
            sortable: true,
        },
        {
            accessorKey: "name",
            header: "Name",
            sortable: true,
        },
        {
            accessorKey: "email",
            header: "Email",
            sortable: true,
        },
        {
            accessorKey: "role.role_name",
            header: "User Role",
            sortable: true,
            cell: ({ getValue }) => {
                const role = getValue();

                const badgeVariant =
                {
                    SUPER_ADMIN: "bg-purple-700",
                    ADMIN: "bg-blue-700",
                    INSTRUCTOR: "bg-green-700",
                }[role] || "outline";

                return <Badge className={`${badgeVariant} break-words whitespace-normal`}>{role?.replace("_", " ")}</Badge>
            },
        },
        {
            accessorKey: "created_at",
            header: "Date Created",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? formatDateTime(value) : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            accessorKey: "updated_at",
            header: "Last Update",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? formatDateTime(value) : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            id: "actions",
            header: "Actions",
            sortable: false,
            cell: ({ row }) => {
                const user = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewUserDetails && (
                            <Button onClick={() => handlers.onViewUserDetails(user)}>
                                <span className="hidden md:inline">View</span>
                                <Eye />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];

    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey || col.id));
};

export default getUserColumns;
