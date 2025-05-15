import { NavMain } from "@/components/layout/NavMain";
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenuButton, SidebarRail } from "@/components/ui/sidebar";
import { AuthContext } from "@/context/AuthContext";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useContext, useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import logo from "../../../public/filter.png";
import LogoutDialog from "../dialogs/LogoutDialog";
library.add(fas);

export function AppSidebar({ ...props }) {
    const { logout, auth } = useContext(AuthContext);
    const [isLogoutModalOpen, setIsLogoutModalOpen] = useState(false);
    const [isMobile, setIsMobile] = useState(false);
    const navigate = useNavigate();

    useEffect(() => {
        const handleResize = () => {
            setIsMobile(window.innerWidth < 768);
        };
        
        handleResize();
        window.addEventListener('resize', handleResize);
        
        return () => {
            window.removeEventListener('resize', handleResize);
        };
    }, []);

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
        <Sidebar 
            collapsible="icon" 
            collapsed={isMobile}
            className="transition-all duration-300 ease-in-out"
            {...props}
        >
            <SidebarHeader className="relative">
                <SidebarMenuButton 
                    tooltip="Logo" 
                    className="py-4 md:py-10 flex gap-3 items-center justify-between px-4"
                >
                    <img 
                        src={logo} 
                        alt="logo" 
                        className="h-8 w-8 md:h-12 md:w-12 object-contain" 
                    />
                    <span className="text-xl md:text-2xl font-bold hidden md:inline-block">
                        Toolshare
                    </span>
                </SidebarMenuButton>
            </SidebarHeader>
            
            <SidebarContent className="px-2 md:px-4">
                <hr className="mx-2 md:mx-5 my-2" />
                <NavMain 
                    items={menuItems} 
                    className="space-y-1" 
                />
            </SidebarContent>
            
            <SidebarFooter className="mt-auto">
                <SidebarMenuButton 
                    tooltip="logout"
                    className="p-2 md:p-4"
                >
                    <a
                        onClick={openLogoutModal}
                        className="flex items-center gap-3 md:gap-5 rounded w-full text-gray-700 hover:text-blue-600 px-2 py-2 transition-colors"
                    >
                        <FontAwesomeIcon 
                            icon={["fas", "sign-out-alt"]} 
                            className="w-4 h-4 md:w-5 md:h-5"
                        />
                        <span className="hidden md:inline-block">Log Out</span>
                    </a>
                    <LogoutDialog 
                        isOpen={isLogoutModalOpen} 
                        onClose={closeLogoutModal} 
                        onConfirm={confirmLogout} 
                    />
                </SidebarMenuButton>
            </SidebarFooter>
            
            <SidebarRail className="hidden md:block" />
        </Sidebar>
    );
}
