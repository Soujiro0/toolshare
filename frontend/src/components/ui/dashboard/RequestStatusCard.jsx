import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { DatePickerWithRange } from "@/components/ui/date-picker-with-range";
import { addDays } from "date-fns";
import PropTypes from 'prop-types';
import { useMemo, useState } from "react";

const RequestStatusCard = ({ requests = [] }) => {
    const [date, setDate] = useState({
        from: addDays(new Date(), -30),
        to: new Date(),
    });

    const stats = useMemo(() => {
        // Initialize default stats
        const defaultStats = {
            PENDING: 0,
            APPROVED: 0,
            REJECTED: 0,
            CLAIMED: 0,
            RETURNED: 0
        };

        if (!requests?.length) return defaultStats;

        const filteredRequests = requests.filter(request => {
            const requestDate = new Date(request.request_date);
            return requestDate >= date.from && requestDate <= (date.to || new Date());
        });

        return filteredRequests.reduce((acc, request) => {
            if (request.status) {
                acc[request.status] = (acc[request.status] || 0) + 1;
            }
            return acc;
        }, defaultStats);
    }, [requests, date]);

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
    <div>
        <CardTitle>Request Status Overview</CardTitle>
        <CardDescription>Distribution of requests by status</CardDescription>
    </div>
    <DatePickerWithRange 
        date={date} 
        onDateChange={(newDate) => setDate(newDate)}
        className="w-full sm:w-auto" 
    />
</CardHeader>
            <CardContent>
                <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
                    {Object.entries(stats).map(([status, count]) => (
                        <div key={status} className="flex flex-col items-center gap-2 p-4 rounded-lg border">
                            <Badge className={statusColors[status]}>
                                {status}
                            </Badge>
                            <span className="text-2xl font-bold">{count}</span>
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
        })
    )
};

export default RequestStatusCard;