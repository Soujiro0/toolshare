import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { MAX_PASS_LENGTH, MIN_PASS_LENGTH } from "@/constants/passwordLength";
import { Lock, X } from "lucide-react";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";

const EditUserDialog = ({ isOpen, onClose, user, onSave, roles }) => {
    const [formData, setFormData] = useState({
        user_id: "",
        username: "",
        name: "",
        email: "",
        role_id: "",
        password: "",
    });
    const [errors, setErrors] = useState({});
    const [isChangePassword, setIsChangePassword] = useState(false);

    useEffect(() => {
        if (user) {
            setFormData({
                user_id: user.user_id || "",
                username: user.username || "",
                name: user.name || "",
                email: user.email || "",
                role_id: user.role?.role_id || "",
                password: "",
            });
            setErrors({});
            setIsChangePassword(false);
        }
    }, [user]);

    const validateEmail = (email) => {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return regex.test(email);
    };

    const validatePassword = (password) => {
        return password.length >= MIN_PASS_LENGTH && password.length <= MAX_PASS_LENGTH;
    };

    const validateForm = () => {
        const newErrors = {};
        if (!formData.username) newErrors.username = "Username is required";
        if (!formData.name) newErrors.name = "Name is required";
        if (!formData.email) newErrors.email = "Email is required";
        else if (!validateEmail(formData.email)) newErrors.email = "Invalid email format";
        if (!formData.role_id) newErrors.role_id = "Role is required";

        if (isChangePassword && formData.password) {
            if (!validatePassword(formData.password)) {
                newErrors.password = `Password must be between ${MIN_PASS_LENGTH} and ${MAX_PASS_LENGTH} characters`;
            }
        }

        setErrors(newErrors);
        return Object.keys(newErrors).length === 0;
    };

    const handleChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
    };

    const handleRoleChange = (value) => {
        setFormData({ ...formData, role_id: parseInt(value, 10) });
    };

    const handleSubmit = () => {
        if (!validateForm()) return;

        const payload = {
            user_id: formData.user_id,
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
    };

    if (!user) return null;

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent>
                <DialogHeader>
                    <DialogTitle>Edit User (ID: {formData.user_id})</DialogTitle>
                </DialogHeader>
                <div className="space-y-4 w-full">
                    <div className="flex flex-col gap-2">
                        <Label>Username</Label>
                        <Input name="username" placeholder="Username" value={formData.username} onChange={handleChange} />
                        {errors.username && <span className="text-red-500 text-sm">{errors.username}</span>}
                    </div>
                    <div className="flex flex-col gap-2">
                        <Label>Name</Label>
                        <Input name="name" placeholder="Name" value={formData.name} onChange={handleChange} />
                        {errors.name && <span className="text-red-500 text-sm">{errors.name}</span>}
                    </div>
                    <div className="flex flex-col gap-2">
                        <Label>Email</Label>
                        <Input name="email" placeholder="Email" value={formData.email} onChange={handleChange} />
                        {errors.email && <span className="text-red-500 text-sm">{errors.email}</span>}
                    </div>
                    <div className="flex flex-col gap-2">
                        <Label>Select Role</Label>
                        <Select onValueChange={handleRoleChange} value={formData.role_id?.toString() || ""}>
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
                        {errors.role_id && <span className="text-red-500 text-sm">{errors.role_id}</span>}
                    </div>

                    <div className="flex flex-col gap-2">
                        {isChangePassword ? (
                            <>
                                <div className="flex items-center justify-between">
                                    <Label>New Password</Label>
                                    <Button size="sm" variant="ghost" onClick={() => setIsChangePassword(false)}>
                                        <X />
                                    </Button>
                                </div>
                                <Input
                                    name="password"
                                    type="password"
                                    placeholder={`New Password (${MIN_PASS_LENGTH} - ${MAX_PASS_LENGTH} characters)`}
                                    value={formData.password}
                                    onChange={handleChange}
                                    maxLength={MAX_PASS_LENGTH}
                                />
                                {errors.password && <span className="text-red-500 text-sm">{errors.password}</span>}
                            </>
                        ) : (
                            <Button onClick={() => setIsChangePassword(true)}>Change Password<Lock /></Button>
                        )}
                    </div>
                </div>
                <DialogFooter className="mt-5 flex gap-2 justify-end">
                    <Button onClick={handleSubmit}>Update</Button>
                    <Button
                        variant="outline"
                        onClick={() => {
                            onClose();
                            setIsChangePassword(false);
                            setErrors({});
                        }}
                    >
                        Cancel
                    </Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

EditUserDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    user: PropTypes.shape({
        user_id: PropTypes.oneOfType([PropTypes.string, PropTypes.number]),
        username: PropTypes.string,
        name: PropTypes.string,
        email: PropTypes.string,
        role: PropTypes.shape({
            role_id: PropTypes.oneOfType([PropTypes.string, PropTypes.number]),
            role_name: PropTypes.string,
        }),
    }),
    onSave: PropTypes.func.isRequired,
    roles: PropTypes.arrayOf(
        PropTypes.shape({
            role_id: PropTypes.oneOfType([PropTypes.string, PropTypes.number]).isRequired,
            role_name: PropTypes.string.isRequired,
        })
    ).isRequired,
};

export default EditUserDialog;
