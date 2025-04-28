import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar";
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
        <>
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent width="max-w-fit md:max-w-xl">
                    <DialogHeader>
                        <DialogTitle>User Details</DialogTitle>
                    </DialogHeader>

                    {/* Metadata */}
                    <div className="mb-4 flex flex-col items-center gap-2">
                        <Avatar className="w-[100px] h-[100px]">
                            <AvatarImage src="https://github.com/shadcn.png" alt="@shadcn" />
                            <AvatarFallback>CN</AvatarFallback>
                        </Avatar>

                        <div className="flex flex-col items-center gap-2 w-full">
                            <span>UID: {user.user_id}</span>
                            <span>{user.username}</span>
                            <span>{user.name}</span>
                            <span>{user.email}</span>
                            <span>{user.role.role_name.replace(/_/g, " ")}</span>
                            <div className="flex flex-col gap-2 w-full mt-10">
                                <Button
                                    variant=""
                                    onClick={(e) => {
                                        e.stopPropagation(); // prevent row click
                                        console.log(`Edit Unit: ${user.user_id}`);
                                        handleEdit();
                                    }}
                                >
                                    Edit
                                </Button>
                                <Button
                                    variant="destructive"
                                    onClick={(e) => {
                                        e.stopPropagation(); // prevent row click
                                        console.log(`Delete Unit: ${user.user_id}`);
                                        handleDelete();
                                    }}
                                >
                                    Delete
                                </Button>
                            </div>
                        </div>
                    </div>
                </DialogContent>
            </Dialog>
        </>
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
