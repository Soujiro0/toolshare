import RequestStatusCard from "@/components/ui/dashboard/RequestStatusCard";
import UserRequestMetricsCard from "@/components/ui/dashboard/UserRequestMetricsCard";
import { AuthContext } from "@/context/AuthContext";
import { useMediaQuery } from "@/hooks/useMediaQuery";
import { useContext, useEffect, useState } from "react";
import ApiService from "../../api/ApiService";
import Header from "../../components/layout/Header";

const InstructorDashboard = () => {
    const { auth } = useContext(AuthContext); // Add this
    const isMobile = useMediaQuery("(max-width: 768px)");
    const [loading, setLoading] = useState(true);
    const [stats, setStats] = useState({
        pendingRequests: [],
        pendingRequestCount: 0,
        approvedToday: 0,
        approvedThisWeek: 0,
        requestCount: [],
        requests: [],
    });

    const fetchDashboardData = async () => {
        setLoading(true);
        try {
            const [requestsRes, unitsRes, statsRes] = await Promise.all([
                ApiService.RequestBorrowService.getAllRequests(),
                ApiService.ItemService.getItemUnits(),
                ApiService.DashboardService.getStats(),
            ]);

            const requestCounts = requestsRes.data.reduce((acc, request) => {
                const date = request.request_date.split('T')[0];
                acc[date] = (acc[date] || 0) + 1;
                return acc;
            }, {});

            const trendsData = Object.entries(requestCounts)
                .map(([date, count]) => ({ date, count }))
                .sort((a, b) => new Date(a.date) - new Date(b.date))
                .slice(-7);

            const pendingRequests = requestsRes.data.filter((req) => req.status === "PENDING");

            setStats({
                pendingRequests: pendingRequests.slice(0, 5),
                pendingRequestCount: pendingRequests.length,
                totalUnits: unitsRes.data.length,
                topRequesters: statsRes.data.topRequesters,
                approvedToday: statsRes.data.approvedToday,
                approvedThisWeek: statsRes.data.approvedThisWeek,
                requestCount: trendsData,
                requests: requestsRes.data,
            });
        } catch (error) {
            console.error("Error fetching dashboard data:", error);
        } finally {
            setLoading(false);
        }
    };

    const calculateUserMetrics = (requests, userId) => {
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        const weekAgo = new Date(today);
        weekAgo.setDate(weekAgo.getDate() - 7);

        const userRequests = requests.filter(req => req.user?.user_id === userId);
        const todayRequests = userRequests.filter(req => {
            const reqDate = new Date(req.request_date);
            reqDate.setHours(0, 0, 0, 0);
            return reqDate.getTime() === today.getTime();
        }).length;

        const weekRequests = userRequests.filter(req => {
            const reqDate = new Date(req.request_date);
            return reqDate >= weekAgo;
        }).length;

        return { todayRequests, weekRequests };
    };

    useEffect(() => {
        fetchDashboardData();
    }, []);

    return (
        <div className="px-1 sm:px-2 lg:px-2 py-2 sm:py-2 space-y-4">
            <Header headerTitle="Dashboard" />
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div className="col-span-2">
                    <RequestStatusCard requests={stats.requests} isLoading={loading} />
                </div>
                <UserRequestMetricsCard 
                    todayRequests={calculateUserMetrics(stats.requests, auth.user?.user_id).todayRequests}
                    weekRequests={calculateUserMetrics(stats.requests, auth.user?.user_id).weekRequests}
                    isLoading={loading}
                />
            </div>
        </div>
    );
};

export default InstructorDashboard;