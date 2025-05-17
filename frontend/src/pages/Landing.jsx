import { useContext } from "react";
import { useNavigate } from "react-router-dom";
import { ApiService } from "../api/ApiService";
import LoginForm from "../components/forms/LoginForm";
import { AuthContext } from "../context/AuthContext";

const Landing = () => {
    const { login } = useContext(AuthContext);
    const navigate = useNavigate();

    const handleSubmit = async ({ username, password }) => {
        try {
            const response = await ApiService.LoginService.loginApi(username, password);
            console.log(response);
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
        <div className="bg-[var(--background-color)] min-h-screen flex flex-col sm:flex-row items-center justify-center text-center p-4 sm:p-6 gap-6 sm:gap-20">
            <div className="w-full sm:w-auto">
                <h1 className="text-2xl sm:text-3xl md:text-4xl font-bold text-[var(--primary-color)] mb-2">ToolShare</h1>
                <p className="font-medium text-xs sm:text-sm md:text-base">Tools & Equipment Borrowing System</p>
            </div>
            <div className="w-full sm:w-auto flex justify-center">
                <LoginForm handleSubmit={handleSubmit} />
            </div>
        </div>
    );
};

export default Landing;
