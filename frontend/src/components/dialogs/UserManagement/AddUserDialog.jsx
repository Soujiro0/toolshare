import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { MAX_PASS_LENGTH, MIN_PASS_LENGTH } from "@/constants/passwordLength";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";

const validateEmail = (email) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
const validatePassword = (password) => password.length >= MIN_PASS_LENGTH && password.length <= MAX_PASS_LENGTH;

const FormField = ({ label, children, error }) => (
    <div className="flex flex-col gap-2">
        <Label>{label}</Label>
        {children}
        {error && <span className="text-red-500 text-sm">{error}</span>}
    </div>
);

const AddUserDialog = ({ isOpen, onClose, onSave, roles }) => {
    const [formData, setFormData] = useState({
        username: "",
        name: "",
        email: "",
        password: "",
        role_id: "",
    });
    const [errors, setErrors] = useState({});

    // Reset form on open/close
    useEffect(() => {
        if (!isOpen) {
            setFormData({ username: "", name: "", email: "", password: "", role_id: "" });
            setErrors({});
        }
    }, [isOpen]);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prev) => ({ ...prev, [name]: value }));
    };

    const handleRoleChange = (value) => {
        setFormData((prev) => ({ ...prev, role_id: value }));
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
            newErrors.password = `Password must be between ${MIN_PASS_LENGTH} and ${MAX_PASS_LENGTH} characters`;
        }
        if (!formData.role_id) newErrors.role_id = "Role is required";

        setErrors(newErrors);
        return Object.keys(newErrors).length === 0;
    };

    const handleSubmit = () => {
        if (validateForm()) {
            onSave(formData);
        }
    };

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent>
                <DialogHeader>
                    <DialogTitle>Add User</DialogTitle>
                </DialogHeader>
                <div className="space-y-4">
                    <FormField label="Username" error={errors.username}>
                        <Input name="username" placeholder="e.g. adminaccount123" value={formData.username} onChange={handleChange} />
                    </FormField>
                    <FormField label="Name" error={errors.name}>
                        <Input name="name" placeholder="e.g. Juan Dela Cruz" value={formData.name} onChange={handleChange} />
                    </FormField>
                    <FormField label="Email" error={errors.email}>
                        <Input name="email" placeholder="e.g. email@example.com" value={formData.email} onChange={handleChange} />
                    </FormField>
                    <FormField label={`Password (${MIN_PASS_LENGTH} - ${MAX_PASS_LENGTH} characters)`} error={errors.password}>
                        <Input
                            name="password"
                            type="password"
                            placeholder="Password"
                            value={formData.password}
                            onChange={handleChange}
                            maxLength={MAX_PASS_LENGTH}
                        />
                    </FormField>
                    <FormField label="Role" error={errors.role_id}>
                        <Select value={formData.role_id} onValueChange={handleRoleChange}>
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
                    </FormField>
                </div>
                <DialogFooter>
                    <Button onClick={handleSubmit}>Add</Button>
                    <Button variant="outline" onClick={onClose}>
                        Cancel
                    </Button>
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

FormField.propTypes = {
    label: PropTypes.string,
    children: PropTypes.node,
    error: PropTypes.string,
};

export default AddUserDialog;
