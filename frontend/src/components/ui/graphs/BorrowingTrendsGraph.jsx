import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { faCalendar } from "@fortawesome/free-solid-svg-icons";
import { LoaderCircle } from "lucide-react";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";
import { Line, LineChart, ResponsiveContainer, Tooltip, XAxis, YAxis } from "recharts";

const BorrowingTrendsGraph = ({ data = [], isLoading }) => {
const [dates, setDates] = useState({
    from: new Date(new Date().setDate(new Date().getDate() - 7)).toLocaleDateString('en-CA'),
    to: new Date().toLocaleDateString('en-CA'),
});

    const [filteredData, setFilteredData] = useState([]);

    const handleDateChange = (e) => {
        const { name, value } = e.target;
        setDates((prev) => ({
            ...prev,
            [name]: value,
        }));
    };

    useEffect(() => {
        if (!data.length) return;

        // Create array of all dates in range
        const dateArray = [];
        const currentDate = new Date(dates.from);
        const endDate = new Date(dates.to);

        while (currentDate <= endDate) {
            dateArray.push(new Date(currentDate).toISOString().split("T")[0]);
            currentDate.setDate(currentDate.getDate() + 1);
        }

        // Map dates to counts, default to 0 if no data
        const filtered = dateArray.map((date) => {
            const matchingData = data.find((item) => item.date === date);
            return {
                date: date,
                count: matchingData ? matchingData.count : 0,
            };
        });

        setFilteredData(filtered);
    }, [data, dates]);

const formatXAxis = (tickItem) => {
    // Parse the date string and create a new Date object
    const [year, month, day] = tickItem.split('-');
    const date = new Date(year, month - 1, day);  // month is 0-indexed in Date constructor
    
    return date.toLocaleDateString("en-US", {
        month: "short",
        day: "numeric"
    });
};

    return (
        <Card className="col-span-full">
            <CardHeader className="flex flex-col space-y-2 sm:flex-row sm:items-center sm:justify-between sm:space-y-0">
                <div>
                    <CardTitle>Borrowing Trends</CardTitle>
                    <CardDescription>Number of borrows over time</CardDescription>
                </div>
                {!isLoading && (
                    <div className="flex flex-col sm:flex-row gap-2">
                        <Input type="date" name="from" value={dates.from} onChange={handleDateChange} icon={faCalendar} max={dates.to} />
                        <Input type="date" name="to" value={dates.to} onChange={handleDateChange} icon={faCalendar} min={dates.from} />
                    </div>
                )}
            </CardHeader>
            <CardContent>
                {isLoading ? (
                    <span className="flex items-center justify-center gap-2 text-center py-4 font-bold">
                        <LoaderCircle className="animate-spin" />
                        Loading...Please wait
                    </span>
                ) : (
                    <div className="h-[200px] sm:h-[300px]">
                        <ResponsiveContainer width="100%" height="100%">
                            <LineChart data={filteredData}>
                                <XAxis dataKey="date" tickFormatter={formatXAxis} interval="preserveStartEnd" />
                                <YAxis allowDecimals={false} />
                                <Tooltip
                                    labelFormatter={(label) => new Date(label).toLocaleDateString()}
                                    formatter={(value) => [`${value} requests`, "Count"]}
                                />
                                <Line type="monotone" dataKey="count" strokeWidth={2} stroke="#0268F9" dot={{ r: 3 }} />
                            </LineChart>
                        </ResponsiveContainer>
                    </div>
                )}
            </CardContent>
        </Card>
    );
};

BorrowingTrendsGraph.propTypes = {
    data: PropTypes.arrayOf(
        PropTypes.shape({
            date: PropTypes.string.isRequired,
            count: PropTypes.number.isRequired,
        })
    ),
    isLoading: PropTypes.bool,
};

export default BorrowingTrendsGraph;
