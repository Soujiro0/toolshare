// import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import PropTypes from "prop-types";

export const UserDetailDialog = ({ isOpen, onClose, user, onEdit, onDelete }) => {
    if (!user) return null;

    const handleEdit = () => {
        console.log("Edit clicked for user:", user.user_id);
        console.log(user);
        onEdit(user);
    };

    const handleDelete = () => {
        console.log("Delete clicked for user:", user.user_id);
        onDelete(user);
    };

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="lg:w-[50%] w-[90%] h-fit p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>User Details</DialogTitle>
                </DialogHeader>

                {/* User Info Card */}
                <div className="rounded-lg p-4 space-y-4">
                    {/* User Details */}
                    <div className="flex flex-col items-center space-y-3">
                        <div className="text-center space-y-2">
                            <p className="text-sm text-muted-foreground">UID: {user.user_id}</p>
                            <h3 className="text-xl font-semibold">{user.name}</h3>
                            <p className="text-base">@{user.username}</p>
                            <p className="text-sm">{user.email}</p>
                            <span className="inline-block px-3 py-1 rounded-full text-sm bg-primary/10 text-primary">
                                {user.role.role_name.replace(/_/g, " ")}
                            </span>
                        </div>
                    </div>

                    {/* Action Buttons */}
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
                        <Button
                            className="flex-1"
                            variant="destructive"
                            onClick={(e) => {
                                e.stopPropagation();
                                handleDelete();
                            }}
                        >
                            Delete Account
                        </Button>
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
    onDelete: PropTypes.func.isRequired,
};

export default UserDetailDialog;
