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
import { Plus } from "lucide-react";
import { useEffect, useState } from "react";
import { toast } from "sonner";

const ROLES = [
    {
        role_id: 1,
        role_name: "SUPER_ADMIN",
    },
    {
        role_id: 2,
        role_name: "ADMIN",
    },
    {
        role_id: 3,
        role_name: "INSTRUCTOR",
    },
];

const ManageAccounts = () => {
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(false);
    const [selectedUser, setSelectedUser] = useState(null);
    const [userDetailDialogOpen, setUserDetailDialogOpen] = useState(false);
    const [addUserDialogOpen, setAddUserDialogOpen] = useState(false);
    const [editUserDialogOpen, setEditUserDialogOpen] = useState(false);
    const [deleteUserDialogOpen, setDeleteUserDialogOpen] = useState(false);

    const handleViewUserDetails = (user) => {
        if (user) {
            setSelectedUser(user);
            setUserDetailDialogOpen(true);
        }
    };

    const handleCloseUserDetail = () => {
        setUserDetailDialogOpen(false);
        setSelectedUser(null);
    };

    const handleEditUser = (user) => {
        setSelectedUser(user);
        setUserDetailDialogOpen(false);
        setEditUserDialogOpen(true);
    };

    const handleDeleteUser = (user) => {
        setSelectedUser(user);
        setUserDetailDialogOpen(false);
        setDeleteUserDialogOpen(true);
    };

    const fetchUsers = async () => {
        setLoading(true);
        try {
            const response = await ApiService.UserService.getUsers();
            setUsers(response.data);
        } catch (error) {
            console.error("Error fetching items:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleAddUserCall = async (userData) => {
        console.log(userData);
        try {
            const response = await ApiService.UserService.addUser(userData);
            console.log(response);
            // Success toast here
            toast.success("CREATED user successfully", {
                description: `Added user ${userData.user_id} to Database`,
            });
        } catch (error) {
            console.error("Error adding item:", error);
            toast.error("Error adding item");
        } finally {
            fetchUsers();
        }
    };

    const handleEditUserCall = async (userData) => {
        console.log(userData);
        try {
            const response = await ApiService.UserService.updateUser(selectedUser.user_id, userData);
            console.log(response);
            // Success toast here
            toast.success("UPDATED user successfully", {
                description: `Updated user ${userData.user_id} to Database`,
            });
        } catch (error) {
            console.error("Error updating item:", error);
            toast.error("Error updating item");
        } finally {
            fetchUsers();
        }
    };

    const handleDeleteUserCall = async (userId) => {
        console.log(userId);
        try {
            const response = await ApiService.UserService.deleteUser(userId);
            console.log(response);
            // Success toast here
            toast.success("DELETED user successfully", {
                description: `Deleted user ${userId} to Database`,
            });
        } catch (error) {
            console.error("Error deleting item:", error);
            toast.error("Error deleting item");
        } finally {
            fetchUsers();
        }
    };

    const filters = [
        {
            label: "User Role",
            key: "role.role_name",
            type: "select",
            values: ROLES.map((e) => ({
                label: e.role_name.replace(/_/g, " "), // e.g., "SUPER ADMIN"
                value: e.role_name, // e.g., "SUPER_ADMIN"
            })),
        },
    ];

    const columns = getUserColumns({
        onViewUserDetails: handleViewUserDetails,
    });

    useEffect(() => {
        fetchUsers();
    }, []);

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <Header headerTitle="Manage Accounts" />

            <div className="flex items-center justify-end mb-4">
                <Button className="ml-auto" onClick={() => setAddUserDialogOpen(true)}>
                    <Plus /> Add New User
                </Button>
            </div>

            <DataTable columns={columns} data={users} searchKeys={["name"]} filters={filters} isLoading={loading} />

            <UserDetailDialog
                isOpen={userDetailDialogOpen}
                onClose={handleCloseUserDetail}
                user={selectedUser}
                onEdit={handleEditUser}
                onDelete={handleDeleteUser}
            />

            <AddUserDialog isOpen={addUserDialogOpen} onClose={() => setAddUserDialogOpen(false)} onSave={handleAddUserCall} roles={ROLES} />
            
            <EditUserDialog
                isOpen={editUserDialogOpen}
                onClose={() => setEditUserDialogOpen(false)}
                user={selectedUser}
                onSave={handleEditUserCall}
                roles={ROLES}
            />
            <DeleteUserDialog
                isOpen={deleteUserDialogOpen}
                onClose={() => setDeleteUserDialogOpen(false)}
                user={selectedUser}
                onDelete={handleDeleteUserCall}
            />
        </>
    );
};

export default ManageAccounts;
