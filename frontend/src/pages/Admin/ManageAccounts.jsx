import ApiService from "@/api/ApiService";
import AddUserDialog from "@/components/dialogs/UserManagement/AddUserDialog";
import DeleteUserDialog from "@/components/dialogs/UserManagement/DeleteUserDialog";
import EditUserDialog from "@/components/dialogs/UserManagement/EditUserDialog";
import UserDetailDialog from "@/components/dialogs/UserManagement/UserDetailDialog";
import Header from "@/components/layout/Header";
import DataTable from "@/components/tables/DataTable";
import { getUserColumns } from "@/components/tables/UserManagement/UserColumn";
import { Button } from "@/components/ui/button";
import { Toaster } from "@/components/ui/sonner";
import { ROLES } from "@/constants/roles";
import { useApiHandler } from "@/hooks/useApiHandler";
import { useMediaQuery } from "@/hooks/useMediaQuery";
import { Plus } from "lucide-react";
import { useEffect, useState } from "react";

const ManageAccounts = () => {
    const { handleApiAction, isloading } = useApiHandler();
    const [users, setUsers] = useState([]);
    const [dialog, setDialog] = useState({ type: null, user: null });
    const openDialog = (type, user = null) => setDialog({ type, user });
    const closeDialog = () => setDialog({ type: null, user: null });

    const fetchUsers = () => {
        handleApiAction({
            apiCall: () => ApiService.UserService.getUsers(),
            afterSuccess: (response) => setUsers(response.data),
        });
    };

    const handleAddUserCall = (userData) => {
        handleApiAction({
            apiCall: () => ApiService.UserService.addUser(userData),
            successMessage: {
                title: "User Created",
                description: () => `Added user ${userData.user_id} to database`,
            },
            errorMessage: {
                toastMessage: "Error adding user",
                consoleMessage: "Error adding user:",
            },
            onFinally: () => {
                fetchUsers(), closeDialog();
            },
        });
    };

    const handleEditUserCall = (userData) => {
        handleApiAction({
            apiCall: () => ApiService.UserService.updateUser(dialog.user.user_id, userData),
            successMessage: {
                title: "User Updated",
                description: () => `Updated user ${userData.user_id}`,
            },
            errorMessage: {
                toastMessage: "Error updating user",
                consoleMessage: "Error updating user:",
            },
            onFinally: fetchUsers,
        });
    };

    const handleDeleteUserCall = (userId) => {
        handleApiAction({
            apiCall: () => ApiService.UserService.deleteUser(userId),
            successMessage: {
                title: "User Deleted",
                description: () => `Deleted user ${userId}`,
            },
            errorMessage: {
                toastMessage: "Error deleting user",
                consoleMessage: "Error deleting user:",
            },
            onFinally: fetchUsers,
        });
    };

    const isMobile = useMediaQuery("(max-width: 768px)");

    const filters = [
        {
            label: "User Role",
            key: "role.role_name",
            type: "select",
            values: ROLES.map((e) => ({
                label: e.role_name.replace(/_/g, " "),
                value: e.role_name,
            })),
        },
    ];

    const columns = getUserColumns(isMobile, {
        onViewUserDetails: (user) => openDialog("view", user),
        onEditUser: (user) => openDialog("edit", user),
        onDeleteUser: (user) => openDialog("delete", user),
    });

    useEffect(() => {
        fetchUsers();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

    return (
        <div className="px-1 sm:px-2 lg:px-2 py-2 sm:py-2 space-y-4 sm:space-y-2">
            <Toaster richColors position="top-center" expand={true} />
            <Header headerTitle="Manage Accounts" />

            <div className="flex flex-col sm:flex-row items-center justify-end gap-4 mb-4">
                <Button className="w-full sm:w-auto" onClick={() => openDialog("add")}>
                    <span>Add New User</span>
                    <Plus />
                </Button>
            </div>

            <div className="overflow-x-auto">
                <DataTable columns={columns} data={users} searchKeys={["name"]} filters={filters} isLoading={isloading} />
            </div>

            <UserDetailDialog
                isOpen={dialog.type === "view"}
                onClose={closeDialog}
                onEdit={() => openDialog("edit", dialog.user)}
                onDelete={() => openDialog("delete", dialog.user)}
                user={dialog.user}
            />

            <AddUserDialog isOpen={dialog.type === "add"} onClose={closeDialog} onSave={handleAddUserCall} roles={ROLES} />

            <EditUserDialog isOpen={dialog.type === "edit"} onClose={closeDialog} onSave={handleEditUserCall} user={dialog.user} roles={ROLES} />

            <DeleteUserDialog
                isOpen={dialog.type === "delete"}
                onClose={closeDialog}
                onDelete={() => handleDeleteUserCall(dialog.user?.user_id)}
                user={dialog.user}
            />
        </div>
    );
};

export default ManageAccounts;
