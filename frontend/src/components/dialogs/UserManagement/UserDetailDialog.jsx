import ApiService from "@/api/ApiService";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { AuthContext } from "@/context/AuthContext";
import PropTypes from "prop-types";
import { useContext, useState } from "react";
import { toast } from "sonner";

export const UserDetailDialog = ({ isOpen, onClose, user, onEdit, onDelete }) => {
    const { auth } = useContext(AuthContext);
    const [isCheckingDelete, setIsCheckingDelete] = useState(false);

    if (!user) return null;

    const handleEdit = () => {
        console.log("Edit clicked for user:", user.user_id);
        onEdit(user);
    };

    const canDeleteUser = async () => {
        // If user is instructor, only super admin can delete
        if (user.role === "INSTRUCTOR") {
            return auth.user.role === "SUPER_ADMIN";
        }

        // Admin cannot delete their account
        if (user.role === "ADMIN") {
            return false;
        }

        // Super admin can delete their account only if another super admin exists
        if (user.role === "SUPER_ADMIN") {
            try {
                const response = await ApiService.UserService.getUsers();
                const superAdmins = response.data.filter(u => 
                    u.role === "SUPER_ADMIN" && u.user_id !== user.user_id
                );
                return superAdmins.length > 0;
            } catch (error) {
                console.error("Error checking super admins:", error);
                return false;
            }
        }

        return false;
    };

    const handleDelete = async () => {
        setIsCheckingDelete(true);
        const canDelete = await canDeleteUser();
        
        if (!canDelete) {
            if (user.role === "ADMIN") {
                toast.error("Admin accounts cannot be deleted");
            } else if (user.role === "SUPER_ADMIN") {
                toast.error("Cannot delete the last super admin account");
            } else {
                toast.error("You don't have permission to delete this account");
            }
            setIsCheckingDelete(false);
            return;
        }

        onDelete(user);
        setIsCheckingDelete(false);
    };

    const showDeleteButton = user.role === "INSTRUCTOR" ? 
        auth.user.role === "SUPER_ADMIN" : 
        user.role.role_name === "SUPER_ADMIN";

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="lg:w-[50%] w-[90%] h-fit p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>User Details</DialogTitle>
                </DialogHeader>

                <div className="rounded-lg p-4 space-y-4">
                    <div className="flex flex-col items-center space-y-3">
                        <div className="text-center space-y-2">
                            <p className="text-sm text-muted-foreground">UID: {user.user_id}</p>
                            <h3 className="text-xl font-semibold">{user.name}</h3>
                            <span className="inline-block px-3 py-1 rounded-full text-sm bg-primary/10 text-primary">
                                {user.role?.replace(/_/g, " ") ?? ""}
                            </span>
                        </div>
                    </div>

                    <div className="flex flex-col sm:flex-row gap-2 pt-4">
                        <Button
                            className="flex-1"
                            variant="outline"
                            onClick={(e) => {
                                e.stopPropagation();
                                handleEdit();
                            }}
                        >
                            Edit Profile
                        </Button>
                        {showDeleteButton && (
                            <Button
                                className="flex-1"
                                variant="destructive"
                                onClick={(e) => {
                                    e.stopPropagation();
                                    handleDelete();
                                }}
                                disabled={isCheckingDelete}
                            >
                                {isCheckingDelete ? "Checking..." : "Delete Account"}
                            </Button>
                        )}
                    </div>
                </div>
            </DialogContent>
        </Dialog>
    );
};

UserDetailDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    user: PropTypes.object.isRequired,
    onEdit: PropTypes.func.isRequired,
    onDelete: PropTypes.func.isRequired
};

export default UserDetailDialog;