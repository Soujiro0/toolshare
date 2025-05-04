import { Button } from "@/components/ui/button";
import { Eye } from "lucide-react";

export const getUserColumns = (handlers = {}, excludeKeys = []) => [
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
                            <span>View</span>
                            <Eye />
                        </Button>
                    )}
                </div>
            );
        },
    },
].filter(col => !excludeKeys.includes(col.accessorKey || col.id));

export default getUserColumns;
