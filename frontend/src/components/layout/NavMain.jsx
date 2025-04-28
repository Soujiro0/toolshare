import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from "@/components/ui/sidebar";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import PropTypes from "prop-types";
import { NavLink } from "react-router-dom";
library.add(fas);

export function NavMain({ items }) {
    return (
        <SidebarGroup>
            <SidebarGroupLabel className="mb-2">Main</SidebarGroupLabel>
            <SidebarMenu>
                {items.map((item) => (
                    <SidebarMenuItem key={item.title}>
                        <SidebarMenuButton tooltip={item.title} className="mb-3">
                            <NavLink
                                to={item.url}
                                className={({ isActive }) =>
                                    `flex items-center gap-4 w-full rounded-lg transition-colors ${
                                        isActive ? "text-blue-600 " : "text-gray-700 hover:text-blue-600 hover:bg-gray-100"
                                    }`
                                }
                            >
                                <FontAwesomeIcon icon={["fas", item.icon]} />
                                <span>{item.title}</span>
                            </NavLink>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                ))}
            </SidebarMenu>
        </SidebarGroup>
    );
}

NavMain.propTypes = {
    items: PropTypes.array.isRequired,
};
