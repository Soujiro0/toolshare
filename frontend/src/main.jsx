import { createRoot } from "react-dom/client";
import { HashRouter } from "react-router-dom";
import App from "./App.jsx";
import { AuthProvider } from "./context/AuthContext.jsx";
import "./index.css";

createRoot(document.getElementById("root")).render(
    <HashRouter>
        <AuthProvider>
            <App />
        </AuthProvider>
    </HashRouter>
);
