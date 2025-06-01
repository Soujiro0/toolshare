import { Button } from "@/components/ui/button";
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
                const value = getValue();
                return value ? value.replace(/_/g, " ") : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            accessorKey: "date_created",
            header: "Date Created",
            sortable: true,
            cell: ({ getValue }) => {
                const value = getValue();
                return value ? value : <span className="text-gray-400 italic">N/A</span>;
            },
        },
        {
            accessorKey: "last_updated",
            header: "Last Update",
            sortable: true,
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
                const user = row.original;
                return (
                    <div className="flex gap-2">
                        {handlers.onViewUserDetails && (
                            <Button onClick={() => handlers.onViewUserDetails(user)}>
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
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey || col.id));
};

export default getUserColumns;
