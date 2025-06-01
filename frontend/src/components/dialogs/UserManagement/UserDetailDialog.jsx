import ApiService from "@/api/ApiService";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { AuthContext } from "@/context/AuthContext";
import PropTypes from "prop-types";
import { useContext, useState } from "react";
import { toast } from "sonner";

export const UserDetailDialog = ({ isOpen, onClose, user, onEdit, onDelete }) => {

    const { userDetails } = useContext(AuthContext);

    const [isCheckingDelete, setIsCheckingDelete] = useState(false);

    if (!user) return null;

    const handleEdit = () => {
        console.log("Edit clicked for user:", user.user_id);
        onEdit(user);
    };

    const canDeleteUser = async () => {
        const userRole = userDetails.role.role_name;

        if (userRole === "ADMIN" || userRole === "INSTRUCTOR") {
            return true;
        }

        // Super admin can delete their account only if another super admin exists
        if (userRole === "SUPER_ADMIN") {
            try {
                const response = await ApiService.UserService.getUsers();
                const superAdmins = response.data.filter((u) => u.role.role_name === "SUPER_ADMIN" && u.user_id !== user.user_id);
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
            if (userDetails.role.role_name === "ADMIN") {
                toast.error("Admin accounts cannot be deleted");
            } else if (userDetails.role.role_name === "SUPER_ADMIN") {
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

    const showDeleteButton = userDetails.role?.role_name === "INSTRUCTOR" || userDetails.role?.role_name === "SUPER_ADMIN";

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="lg:w-fit w-[100%] h-fit p-4 lg:p-6" width="100%">
                <DialogHeader>
                    <DialogTitle>User Details</DialogTitle>
                </DialogHeader>

                <div className="rounded-lg p-4 space-y-4">
                    <div className="flex flex-col items-center space-y-3">
                        <div className="text-center space-y-2">
                            <span className="text-sm text-muted-foreground">UID: {user.user_id}</span>
                            <h1 className="text-xl font-semibold">{user.name}</h1>
                            <span className="text-sm text-muted-foreground block mb-2">{user.email}</span>
                            <span
                                className={`inline-block px-3 py-1 rounded-full text-sm text-white ${
                                    {
                                        SUPER_ADMIN: "bg-purple-700",
                                        ADMIN: "bg-blue-700",
                                        INSTRUCTOR: "bg-green-700",
                                    }[user.role?.role_name] || "bg-gray-500"
                                }`}
                            >
                                {String(user.role?.role_name).replace(/_/g, " ")}
                            </span>
                        </div>
                    </div>
                </div>

                <DialogFooter>
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
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

UserDetailDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    user: PropTypes.object.isRequired,
    onEdit: PropTypes.func.isRequired,
    onDelete: PropTypes.func.isRequired,
};

export default UserDetailDialog;
