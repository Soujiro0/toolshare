import ApiService from "@/api/ApiService";
import { jwtDecode } from "jwt-decode";
import { createContext, useEffect, useState } from "react";

// eslint-disable-next-line react-refresh/only-export-components
export const AuthContext = createContext();

export const AuthProvider = ({ children }) => {

    const [auth, setAuth] = useState(() => {
        const token = localStorage.getItem("token");
        if (token) {
            try {
                return { token, user: jwtDecode(token) };
            } catch (error) {
                console.error("Invalid token:", error);
                localStorage.removeItem("token");
            }
        }
        return { token: null, user: null };
    });

    const [userDetails, setUserDetails] = useState({});

    useEffect(() => {
        const token = localStorage.getItem("token");
        if (token) {
            try {
                const decoded = jwtDecode(token);
                console.log("Decoded: ", decoded);
                setAuth({ token, user: decoded });
            } catch (error) {
                console.error("Token decode failed:", error);
                localStorage.removeItem("token");
            }
        }
        console.log("Auth: ", auth);
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

    useEffect(() => {
        if (auth.user?.user_id) {
            fetchUser(auth.user.user_id);
        }
    }, [auth.user?.user_id]);

    const fetchUser = async (userId) => {
        try {
            const res = await ApiService.UserService.getUser(userId);
            setUserDetails(res.data);
        } catch (error) {
            console.error("Error fetching user", error);
        }
    };

    const login = (token) => {
        try {
            const decoded = jwtDecode(token);
            localStorage.setItem("token", token);
            setAuth({ token, user: decoded });
        } catch (error) {
            console.error("Failed to login:", error);
        }
    };

    const logout = () => {
        localStorage.removeItem("token");
        setAuth({ token: null, user: null });
        setUserDetails({});
    };

    const isAuthenticated = !!auth.token;

    return <AuthContext.Provider value={{ auth, login, logout, isAuthenticated, userDetails, setUserDetails }}>{children}</AuthContext.Provider>;
};

AuthProvider.propTypes;
