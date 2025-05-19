import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { AuthContext } from "@/context/AuthContext";
import { faCalendar } from "@fortawesome/free-solid-svg-icons";
import { LoaderCircle } from "lucide-react";
import PropTypes from "prop-types";
import { useContext, useEffect, useState } from "react"; // Added useEffect

const RequestStatusCard = ({ requests = [], isLoading }) => {
    const { auth } = useContext(AuthContext);
    const [dates, setDates] = useState({
        from: new Date(new Date().setDate(new Date().getDate() - 7)).toISOString().split("T")[0], // Changed to 7 days
        to: new Date().toISOString().split("T")[0],
    });

    const [filteredStats, setFilteredStats] = useState({
        PENDING: 0,
        APPROVED: 0,
        REJECTED: 0,
        CLAIMED: 0,
        RETURNED: 0,
    });

    const handleDateChange = (e) => {
        const { name, value } = e.target;
        setDates((prev) => ({
            ...prev,
            [name]: value,
        }));
    };

    useEffect(() => {
        if (!requests?.length) return;

        // Create array of all dates in range
        const dateArray = [];
        const currentDate = new Date(dates.from);
        const endDate = new Date(dates.to);
        endDate.setHours(23, 59, 59, 999); // Set end date to end of day

        while (currentDate <= endDate) {
            dateArray.push(new Date(currentDate).toISOString().split("T")[0]);
            currentDate.setDate(currentDate.getDate() + 1);
        }

        // Filter requests based on date range and user role
        const filteredRequests = requests.filter((request) => {
            const requestDate = new Date(request.request_date);
            const isInDateRange = requestDate >= new Date(dates.from) && requestDate <= endDate;

            if (auth.user?.role === "INSTRUCTOR") {
                return isInDateRange && request.user?.user_id === auth.user?.user_id;
            }
            return isInDateRange;
        });

        // Calculate stats from filtered requests
        const stats = filteredRequests.reduce((acc, request) => {
            if (request.status) {
                acc[request.status] = (acc[request.status] || 0) + 1;
            }
            return acc;
        }, {
            PENDING: 0,
            APPROVED: 0,
            REJECTED: 0,
            CLAIMED: 0,
            RETURNED: 0,
        });

        setFilteredStats(stats);
    }, [requests, dates, auth.user]);

    const statusColors = {
        PENDING: "bg-yellow-400 text-black",
        APPROVED: "bg-emerald-500 text-white",
        REJECTED: "bg-rose-500 text-white",
        CLAIMED: "bg-blue-500 text-white",
        RETURNED: "bg-gray-300 text-black",
    };

    return (
        <Card>
            <CardHeader className="flex flex-col space-y-2 sm:flex-row sm:items-center sm:justify-between sm:space-y-0 pb-2">
                <div className="flex justify-between">
                    <div className="space-y-2">
                        <CardTitle>Request Status Overview</CardTitle>
                        <CardDescription>Distribution of requests by status</CardDescription>
                    </div>
                    {isLoading && <LoaderCircle className="animate-spin" />}
                </div>
                {!isLoading && (
                    <div className="flex flex-col sm:flex-row gap-2">
                        <Input 
                            type="date" 
                            name="from" 
                            value={dates.from} 
                            onChange={handleDateChange} 
                            icon={faCalendar}
                            max={dates.to} 
                        />
                        <Input 
                            type="date" 
                            name="to" 
                            value={dates.to} 
                            onChange={handleDateChange} 
                            icon={faCalendar}
                            min={dates.from}
                        />
                    </div>
                )}
            </CardHeader>
            <CardContent>
                <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
                    {Object.entries(filteredStats).map(([status, count]) => (
                        <div key={status} className="flex flex-col items-center gap-2 p-4 rounded-lg border">
                            <Badge className={statusColors[status]}>{status}</Badge>
                            <span className="text-2xl font-bold">{isLoading ? "--" : count}</span>
                        </div>
                    ))}
                </div>
            </CardContent>
        </Card>
    );
};

RequestStatusCard.propTypes = {
    requests: PropTypes.arrayOf(
        PropTypes.shape({
            status: PropTypes.string,
            request_date: PropTypes.string,
            user: PropTypes.shape({
                user_id: PropTypes.string,
            }),
        })
    ),
    isLoading: PropTypes.bool,
};

export default RequestStatusCard;