import { jwtDecode } from "jwt-decode";
import { createContext, useEffect, useState } from 'react';

// eslint-disable-next-line react-refresh/only-export-components
export const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
    const [auth, setAuth] = useState(() => {
        // Load from localStorage on first render
        const token = localStorage.getItem('token');
        if (token) {
            try {
                return { token, user: jwtDecode(token) };
            } catch (error) {
                console.error('Invalid token:', error);
                localStorage.removeItem('token');
            }
        }
        return { token: null, user: null };
    });

    const [userDetails, setUserDetails] = useState({});

    // On initial load, check if a token is saved in localStorage
    useEffect(() => {
        const token = localStorage.getItem('token');
        if (token) {
            try {
                const decoded = jwtDecode(token);
                console.log("Decoded: ", decoded);
                setAuth({ token, user: decoded });
            } catch (error) {
                console.error('Token decode failed:', error);
                localStorage.removeItem('token');
            }
        }

        console.log("Auth: ", auth);

        // const fetchUser = async () => {
        //     try {
        //         const res = await ApiService.UserService.getUser(auth.user?.user_id);
        //         setUserDetails(res.data);
        //     } catch (error) {
        //         console.log("error fetching user", error);
        //     }
        // }

        // fetchUser();
        
        console.log("User Details", userDetails);
    }, []);

    // Login: Save the token and update auth state
    const login = (token) => {
        try {
            const decoded = jwtDecode(token);
            localStorage.setItem('token', token);
            setAuth({ token, user: decoded });
        } catch (error) {
            console.error('Failed to login:', error);
        }
    };

    // Logout: Clear token from localStorage and reset state
    const logout = () => {
        localStorage.removeItem('token');
        setAuth({ token: null, user: null });
    };

    const isAuthenticated = !!auth.token;

    return (
        <AuthContext.Provider value={{ auth, login, logout, isAuthenticated, userDetails, setUserDetails }}>
            {children}
        </AuthContext.Provider>
    );
};

AuthProvider.propTypes;