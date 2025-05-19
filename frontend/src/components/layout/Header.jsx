import ApiService from "@/api/ApiService";
import EditUserDialog from "@/components/dialogs/UserManagement/EditUserDialog";
import { UserDetailDialog } from "@/components/dialogs/UserManagement/UserDetailDialog";
import { Button } from "@/components/ui/button";
import { AuthContext } from "@/context/AuthContext";
import { ChevronDown } from "lucide-react";
import PropTypes from "prop-types";
import { useContext, useState } from "react";
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

const Header = ({ headerTitle }) => {
    const [showUserDetail, setShowUserDetail] = useState(false);
    const [editUserDialogOpen, setEditUserDialogOpen] = useState(false);
    const [selectedUser, setSelectedUser] = useState(null);
    const { auth, setAuth } = useContext(AuthContext);
    const user = auth.user;

    const handleEditUser = (user) => {
        setSelectedUser(user);
        setShowUserDetail(false);
        setEditUserDialogOpen(true);
    };

    const handleEditUserCall = async (userData) => {
        try {
            const response = await ApiService.UserService.updateUser(selectedUser.user_id, userData);
            // Update the auth context with the new user data
            console.log(response);
            setAuth(prev => ({
                ...prev,
                user: {
                    ...prev.user,
                    ...userData
                }
            }));
            toast.success("Profile updated successfully");
        } catch (error) {
            console.error("Error updating profile:", error);
            toast.error("Error updating profile");
        }
    };

    return (
        <>
            <div className="flex justify-between items-center py-3 sm:py-3">
                <h1 className="text-xl sm:text-2xl md:text-3xl font-bold">{headerTitle}</h1>
                <Button variant="ghost" className="flex items-center gap-2" onClick={() => setShowUserDetail(true)}>
                    <span>{user?.name}</span>
                    <ChevronDown className="h-4 w-4" />
                </Button>
            </div>

            <UserDetailDialog
                isOpen={showUserDetail}
                onClose={() => setShowUserDetail(false)}
                user={user}
                onEdit={handleEditUser}
                onDelete={() => {
                    /* Handle delete if needed */
                }}
                showDeleteButton={false}
            />

            <EditUserDialog
                isOpen={editUserDialogOpen}
                onClose={() => setEditUserDialogOpen(false)}
                user={selectedUser}
                onSave={handleEditUserCall}
                roles={ROLES}
            />
        </>
    );
};

Header.propTypes = {
    headerTitle: PropTypes.string.isRequired,
};

export default Header;