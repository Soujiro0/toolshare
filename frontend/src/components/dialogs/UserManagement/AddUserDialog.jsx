import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import PropTypes from "prop-types";
import { useState } from "react";

const MIN_PASS_LENGTH = 8;
const MAX_PASS_LENGTH = 16;

const AddUserDialog = ({ isOpen, onClose, onSave, roles }) => {
    const [formData, setFormData] = useState({
        username: "",
        name: "",
        email: "",
        password: "",
        role_id: "",
    });
    const [errors, setErrors] = useState({});

    const handleChange = (e) => {
        setFormData({ ...formData, [e.target.name]: e.target.value });
    };

    const handleRoleChange = (value) => {
        setFormData({ ...formData, role_id: value });
    };

    // Email validation regex
    const validateEmail = (email) => {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return regex.test(email);
    };

    // Password validation (example: at least 6 characters)
    const validatePassword = (password) => {
        return password.length >= MIN_PASS_LENGTH; // You can adjust the length requirement as needed
    };

    const validateForm = () => {
        const newErrors = {};
        if (!formData.username) newErrors.username = "Username is required";
        if (!formData.name) newErrors.name = "Name is required";
        if (!formData.email) {
            newErrors.email = "Email is required";
        } else if (!validateEmail(formData.email)) {
            newErrors.email = "Invalid email format";
        }
        if (!formData.password) {
            newErrors.password = "Password is required";
        } else if (!validatePassword(formData.password)) {
            newErrors.password = `Password must be at least ${MIN_PASS_LENGTH} characters long. Max of ${MAX_PASS_LENGTH} characters`;
        }
        if (!formData.role_id) newErrors.role_id = "Role is required";

        setErrors(newErrors);
        return Object.keys(newErrors).length === 0;
    };

    const handleSubmit = () => {
        if (validateForm()) {
            onSave(formData);
            onClose();
        }
    };

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="lg:w-[50%] w-[90%] h-fit p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>Add User</DialogTitle>
                </DialogHeader>
                <div className="space-y-4">
                    <div className="flex flex-col gap-2">
                        <Label>Username</Label>
                        <Input name="username" placeholder="e.g. adminaccount123" value={formData.username} onChange={handleChange} />
                        {errors.username && <span className="text-red-500 text-sm">{errors.username}</span>}
                    </div>
                    <div className="flex flex-col gap-2">
                        <Label>Name</Label>
                        <Input name="name" placeholder="e.g. Juan Dela Cruz" value={formData.name} onChange={handleChange} />
                        {errors.name && <span className="text-red-500 text-sm">{errors.name}</span>}
                    </div>
                    <div className="flex flex-col gap-2">
                        <Label>Email</Label>
                        <Input name="email" placeholder="e.g. email@example.com" value={formData.email} onChange={handleChange} />
                        {errors.email && <span className="text-red-500 text-sm">{errors.email}</span>}
                    </div>
                    <div className="flex flex-col gap-2">
                        <Label>Password (8 - 16 characters)</Label>
                        <Input
                            name="password"
                            type="password"
                            placeholder="Password"
                            value={formData.password}
                            onChange={handleChange}
                            maxLength={MAX_PASS_LENGTH}
                        />
                        {errors.password && <span className="text-red-500 text-sm">{errors.password}</span>}
                    </div>

                    {/* ShadCN Select Component for Role Selection */}
                    <div className="flex flex-col gap-2">
                        <Label>Role</Label>
                    <Select onValueChange={handleRoleChange}>
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
                </div>
                <DialogFooter>
                    <Button onClick={handleSubmit}>Add</Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

AddUserDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    onSave: PropTypes.func.isRequired,
    roles: PropTypes.array.isRequired,
};

export default AddUserDialog;
