import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { useContext, useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import { Toaster, toast } from "sonner";
import { ApiService } from "../api/ApiService";
import LoginForm from "../components/forms/LoginForm";
import { AuthContext } from "../context/AuthContext";

const Landing = () => {

    const { login } = useContext(AuthContext);

    const navigate = useNavigate();

    const [clickCount, setClickCount] = useState(0);
    const [loading, isLoading] = useState(false);
    const [showDialog, setShowDialog] = useState(false);
    const [config, setConfig] = useState({
        ip: "",
        port: "",
    });
    let clickTimer;

    const handleSecretClick = () => {
        setClickCount((prev) => prev + 1);

        if (clickTimer) clearTimeout(clickTimer);
        clickTimer = setTimeout(() => {
            setClickCount(0);
        }, 5000);

        if (clickCount === 2) {
            setShowDialog(true);
            setClickCount(0);
        }
    };

    const handleConfigSubmit = () => {
        try {
            localStorage.setItem(
                "serverConfig",
                JSON.stringify({
                    ip: config.ip,
                    port: config.port,
                })
            );

            setShowDialog(false);
            window.location.reload();
        } catch (error) {
            console.error("Failed to update config:", error);
            alert("Failed to update server configuration");
        }
    };

    const handleSubmit = async ({ username, password }) => {
        isLoading(true);
        try {
            const response = await ApiService.LoginService.loginApi(username, password);
            console.log("API Response:", response);

            login(response.token);

            const role = response?.user?.role;
            if (!role) {
                throw new Error("User role not found in the response.");
            }

            switch (role) {
                case "SUPER_ADMIN":
                case "ADMIN":
                    navigate("/admin-dashboard");
                    break;
                case "INSTRUCTOR":
                    navigate("/instructor-dashboard");
                    break;
                default:
                    navigate("/");
            }
        } catch (error) {
            toast.error("Login Failed", {
                description: error.message,
            });
        } finally {
            isLoading(false);
        }
    };

    useEffect(() => {
        return () => {
            if (clickTimer) clearTimeout(clickTimer);
        };
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

    return (
        <div className="bg-[var(--background-color)] min-h-screen flex flex-col sm:flex-row items-center justify-center text-center p-4 sm:p-6 gap-6 sm:gap-20 relative">
            
            <Toaster richColors position="top-center" expand={true} />
            
            <Button variant="ghost" className="absolute top-4 left-4 w-12 h-12 opacity-0" onClick={handleSecretClick} />

            <div className="w-full sm:w-auto">
                <h1 className="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--primary-color)] mb-2">ToolShare</h1>
                <p className="font-medium text-xs sm:text-sm md:text-base">Tools & Equipment Borrowing System</p>
            </div>

            <div className="w-full sm:w-auto flex justify-center">
                <LoginForm handleSubmit={handleSubmit} isLoading={loading} />
            </div>

            <Dialog open={showDialog} onOpenChange={setShowDialog}>
                <DialogContent className="sm:max-w-[fit-content]">
                    <DialogHeader>
                        <DialogTitle>Server Configuration</DialogTitle>
                    </DialogHeader>

                    <div className="flex flex-col gap-4">
                        <div className="flex flex-col gap-2">
                            <Label>IP Address</Label>
                            <Input id="ip" value={config.ip} onChange={(e) => setConfig((prev) => ({ ...prev, ip: e.target.value }))} />
                        </div>
                        <div className="flex flex-col gap-2">
                            <Label>Port</Label>
                            <Input id="port" value={config.port} onChange={(e) => setConfig((prev) => ({ ...prev, port: e.target.value }))} />
                        </div>
                    </div>

                    <DialogFooter>
                        <Button onClick={handleConfigSubmit}>Save changes</Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </div>
    );
};

export default Landing;
