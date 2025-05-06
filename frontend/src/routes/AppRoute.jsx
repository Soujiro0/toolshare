import { AppSidebar } from "@/components/layout/AppSidebar";
import { SidebarInset, SidebarProvider, SidebarTrigger } from "@/components/ui/sidebar";
import BorrowedHistory from "@/pages/Admin/BorrowedHistory";
import ExportUnitsQr from "@/pages/Admin/ExportUnitsQr";
import RequestTransaction from "@/pages/Admin/RequestTransactions";
import RequestBorrow from "@/pages/Instructor/RequestBorrow";
import YourRequests from "@/pages/Instructor/YourRequests";
import { Outlet, Route, Routes } from "react-router-dom";
import Inventory from "../pages/Admin/Inventory";
import ManageAccounts from "../pages/Admin/ManageAccounts";
import AdminDashboard from "../pages/Dashboards/AdminDashboard";
import InstructorDashboard from "../pages/Dashboards/InstructorDashboard";
import Landing from "../pages/Landing";
import ProtectedRoute from "./ProtectedRoute";

const WithSidebar = () => (
    <div className="flex">
        <SidebarProvider>
            <AppSidebar />
            <SidebarInset>
                <div className="w-full p-2 overflow-auto">
                    <SidebarTrigger className="-ml-0" />
                    <Outlet />
                </div>
            </SidebarInset>
        </SidebarProvider>
        {/* <Sidebar /> */}
    </div>
);

const AppRoute = () => {
    return (
        <Routes>
            {/* Super Admin Routes */}
            <Route
                element={
                    <ProtectedRoute requiredRole="Super Admin">
                        <WithSidebar />
                    </ProtectedRoute>
                }
            >
                <Route path="/admin-dashboard" element={<AdminDashboard />} />
                <Route path="/admin-accounts" element={<ManageAccounts />} /> {/* Only Super Admin */}
                <Route path="/inventory" element={<Inventory />} />
                <Route path="/history" element={<BorrowedHistory />} />
                <Route path="/request-transactions" element={<RequestTransaction />} />
                <Route path="/units-qr-export" element={<ExportUnitsQr />} />
            </Route>

            {/* Admin Routes (No Admin Accounts) */}
            <Route
                element={
                    <ProtectedRoute requiredRole="Admin">
                        <WithSidebar />
                    </ProtectedRoute>
                }
            >
                <Route path="/admin-dashboard" element={<AdminDashboard />} />
                <Route path="/inventory" element={<Inventory />} />
                <Route path="/units-qr-export" element={<ExportUnitsQr />} />
            </Route>

            {/* Faculty Routes */}
            <Route
                element={
                    <ProtectedRoute requiredRole="Instructor">
                        <WithSidebar />
                    </ProtectedRoute>
                }
            >
                <Route path="/instructor-dashboard" element={<InstructorDashboard />} />
                <Route path="/request-borrow" element={<RequestBorrow />} />
                <Route path="/your-requests" element={<YourRequests />} />
            </Route>

            {/* Public Routes */}
            <Route path="/" element={<Landing />} />
        </Routes>
    );
};

export default AppRoute;
