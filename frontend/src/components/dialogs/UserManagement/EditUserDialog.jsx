import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { X } from "lucide-react";
import { useEffect, useState } from "react";

const EditUserDialog = ({ isOpen, onClose, user, onSave, roles }) => {

    const [formData, setFormData] = useState(user);
    const [isChangePassword, setIsChangePassword] = useState(false);

    const handleSubmit = () => {
        const payload = {
            username: formData.username,
            name: formData.name,
            email: formData.email,
            role_id: formData.role_id,
        };

        if (isChangePassword && formData.password) {
            payload.password = formData.password;
        }

        onSave(payload);
        setIsChangePassword(false);
        onClose();
    };

    useEffect(() => {
        setFormData(user);
    }, [user]);

    const handleChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
    };

    useEffect(() => {
        if (user) {
            setFormData({
                user_id: user.user_id,
                username: user.username,
                name: user.name,
                email: user.email,
                role_id: user.role?.role_id || "", // fallback for safety
            });
        }
    }, [user]);

    if (!user) return null;

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent width="w-xl">
                <DialogHeader>
                    <DialogTitle>Edit User (user id: {formData?.user_id})</DialogTitle>
                </DialogHeader>
                <div className="space-y-4 w-full">
                    <div className="space-y-2">
                        <Label>Username</Label>
                        <Input name="username" placeholder="Username" value={formData?.username} onChange={handleChange} />
                    </div>
                    <div className="space-y-2">
                        <Label>Name</Label>
                        <Input name="name" placeholder="Name" value={formData?.name} onChange={handleChange} />
                    </div>
                    <div className="space-y-2">
                        <Label>Email</Label>
                        <Input name="email" placeholder="Email" value={formData?.email} onChange={handleChange} />
                    </div>
                    <div className="space-y-2">
                        <Label>Select Role</Label>
                        <Select
                            onValueChange={(value) =>
                                setFormData({
                                    ...formData,
                                    role_id: parseInt(value),
                                })
                            }
                            value={formData?.role?.role_id?.toString() || ""}
                        >
                            <SelectTrigger className="w-full">
                                <SelectValue placeholder="Select Role" />
                            </SelectTrigger>
                            <SelectContent>
                                {roles.map((role) => (
                                    <SelectItem key={role.role_id} value={role.role_id.toString()}>
                                        {role.role_name.replace(/_/g, " ")}
                                    </SelectItem>
                                ))}
                            </SelectContent>
                        </Select>
                    </div>

                    <div className="space-y-2">
                        {isChangePassword ? (
                            <div className="space-y-2">
                                <div className="flex">
                                    <Label>New Password</Label>
                                    <Button className="ml-auto" onClick={() => setIsChangePassword(false)}>
                                        <X />
                                    </Button>
                                </div>
                                <Input name="password" type="password" placeholder="New Password (optional)" onChange={handleChange} />
                            </div>
                        ) : (
                            <>
                                <Button onClick={() => setIsChangePassword(true)}>Change Password</Button>
                            </>
                        )}
                    </div>
                </div>
                <DialogFooter className="mt-5">
                    <Button onClick={handleSubmit}>Update</Button>
                    <Button
                        variant="outline"
                        onClick={() => {
                            onClose();
                            setIsChangePassword(false);
                        }}
                    >
                        Cancel
                    </Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

EditUserDialog.propTypes;

export default EditUserDialog;
