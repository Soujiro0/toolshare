import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { DatePickerWithRange } from "@/components/ui/date-picker-with-range";
import { addDays } from "date-fns";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";
import { Line, LineChart, ResponsiveContainer, Tooltip, XAxis, YAxis } from "recharts";

const BorrowingTrendsGraph = ({ data = [] }) => {
    const [date, setDate] = useState({
        from: addDays(new Date(), -7),
        to: new Date(),
    });
    const [filteredData, setFilteredData] = useState(data);

    useEffect(() => {
        if (!data.length) return;

        const filtered = data.filter((item) => {
            const itemDate = new Date(item.date);
            return itemDate >= date.from && itemDate <= (date.to || new Date());
        });

        setFilteredData(filtered);
    }, [data, date]);

    return (
        <Card className="col-span-full">
            <CardHeader className="flex flex-col space-y-2 sm:flex-row sm:items-center sm:justify-between sm:space-y-0">
                <div>
                    <CardTitle>Borrowing Trends</CardTitle>
                    <CardDescription>Number of borrows over time</CardDescription>
                </div>
                <DatePickerWithRange date={date} onDateChange={(newDate) => setDate(newDate)} className="w-full sm:w-auto" />
            </CardHeader>
            <CardContent>
                <div className="h-[200px] sm:h-[300px]">
                    <ResponsiveContainer width="100%" height="100%">
                        <LineChart data={filteredData}>
                            <XAxis dataKey="date" tickFormatter={(date) => new Date(date).toLocaleDateString()} />
                            <YAxis />
                            <Tooltip
                                labelFormatter={(label) => new Date(label).toLocaleDateString()}
                                formatter={(value) => [`${value} requests`, "Count"]}
                            />
                            <Line type="monotone" dataKey="count" strokeWidth={2} stroke="#0268F9" />
                        </LineChart>
                    </ResponsiveContainer>
                </div>
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
};

export default BorrowingTrendsGraph;
