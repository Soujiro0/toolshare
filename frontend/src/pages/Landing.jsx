import { useContext, useState } from "react";
import { useNavigate } from "react-router-dom";
import { ApiService } from "../api/ApiService";
import LoginForm from "../components/forms/LoginForm";
import { AuthContext } from "../context/AuthContext";

const Landing = () => {
    const [username, setUsername] = useState("");
    const [password, setPassword] = useState("");
    const { login } = useContext(AuthContext);
    const navigate = useNavigate("");
    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await ApiService.LoginService.loginApi(username, password);
            console.log(response)
            login(response.token);
            switch (response.user.role) {
                case "SUPER_ADMIN":
                    navigate("/inventory");
                    break;
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
            alert(error.message);
        }
    };

    return (
        <>
            <div className="bg-[var(--background-color)] min-h-screen flex flex-col sm:flex-row items-center justify-center text-center p-6 gap-20">
                <div>
                    <h1 className="text-4xl font-bold text-[var(--primary-color)]">ToolShare</h1>
                    <p className="font-medium">Tools & Equipment Borrowing System</p>
                </div>
                <div>
                    <LoginForm handleSubmit={handleSubmit} setUser={setUsername} setPassword={setPassword} />
                </div>
            </div>
        </>
    );
};

export default Landing;
