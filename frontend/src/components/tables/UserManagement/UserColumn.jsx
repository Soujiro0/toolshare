import { Button } from "@/components/ui/button";

export const columns = (onViewUserDetails) => [
    { accessorKey: "user_id", header: "User ID" },
    { accessorKey: "username", header: "Username" },
    { accessorKey: "name", header: "Name" },
    { accessorKey: "email", header: "Email" },
    {
        accessorKey: "role.role_name",
        header: "User Role",
        cell: ({ getValue }) => {
            const value = getValue().replace(/_/g, " ");
            return value;
        },
    },
    {
        accessorKey: "date_created",
        header: "Date Created",
        cell: ({ getValue }) => {
            const value = getValue();
            return value ? value : <span className="text-gray-400 italic">N/A</span>;
        },
    },
    {
        accessorKey: "last_updated",
        header: "Last Update",
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
                    <Button
                        onClick={() => {
                            console.log(row.original);
                            onViewUserDetails(row.original);
                        }}
                    >
                        View user details
                    </Button>
                </div>
            </>
        ),
    },
];

export default columns;
