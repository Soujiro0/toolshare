import { NavMain } from "@/components/layout/NavMain";
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenuButton, SidebarRail } from "@/components/ui/sidebar";
import { AuthContext } from "@/context/AuthContext";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useContext, useState } from "react";
import { useNavigate } from "react-router-dom";
import logo from "../../../public/filter.png";
import LogoutDialog from "../dialogs/LogoutDialog";
library.add(fas);

export function AppSidebar({ ...props }) {
    const { logout, auth } = useContext(AuthContext);
    
    const [isLogoutModalOpen, setIsLogoutModalOpen] = useState(false);
    const navigate = useNavigate();

    const baseAdminMenu = [
        {
            title: "Inventory",
            icon: "boxes",
            url: "/inventory",
        },
        {
            title: "Unit QR Export",
            icon: "file-export",
            url: "/units-qr-export",
        },
        {
            title: "Request Transactions",
            icon: "clipboard",
            url: "/request-transactions",
        },
    ];

    const instructorMenu = [
        {
            title: "Request Borrow",
            icon: "hand-holding",
            url: "/request-borrow",
        },
        {
            title: "Your Requests",
            icon: "list",
            url: "/your-requests",
        },
    ];

    let menuItems = [];

    if (auth.user?.role === "SUPER_ADMIN") {
        menuItems = [...baseAdminMenu];
        menuItems.splice(1, 0, {
            title: "Manage Accounts",
            icon: "user-tie",
            url: "/admin-accounts",
        });
    } else if (auth.user?.role === "ADMIN") {
        menuItems = baseAdminMenu;
    } else if (auth.user?.role === "INSTRUCTOR") {
        menuItems = instructorMenu;
    }

    const openLogoutModal = () => setIsLogoutModalOpen(true);
    const closeLogoutModal = () => setIsLogoutModalOpen(false);

    const confirmLogout = () => {
        closeLogoutModal();
        logout();
        navigate("/");
    };

    return (
        <Sidebar collapsible="icon" {...props}>
            <SidebarHeader className="">
                <SidebarMenuButton tooltip="Logo" className="py-10 flex gap-3 justify-between">
                    <img src={logo} alt="logo" height={50} width={50} />
                    <span className="text-2xl font-bold">Toolshare</span>
                </SidebarMenuButton>
            </SidebarHeader>
            <SidebarContent>
                <hr className="mx-5" />
                <NavMain items={menuItems} />
            </SidebarContent>
            <SidebarFooter>
                <SidebarMenuButton tooltip="logout">
                    <button
                        onClick={openLogoutModal}
                        className="flex items-center gap-5 rounded w-full text-gray-700 hover:text-blue-600"
                    >
                        <FontAwesomeIcon icon={["fas", "sign-out-alt"]} />
                        <span>Log Out</span>
                    </button>
                    <LogoutDialog isOpen={isLogoutModalOpen} onClose={closeLogoutModal} onConfirm={confirmLogout} />
                </SidebarMenuButton>
            </SidebarFooter>
            <SidebarRail />
        </Sidebar>
    );
}
