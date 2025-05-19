import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { LoaderCircle } from "lucide-react";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";
import { Bar, BarChart, ResponsiveContainer, Tooltip, XAxis, YAxis } from "recharts";

const PopularItemsGraph = ({ data, isLoading }) => {
    const [topCount, setTopCount] = useState("5");
    const [chartData, setChartData] = useState([]);

    useEffect(() => {
        if (data) {
            // Sort items by borrowed_count in descending order and take top N items
            const sortedData = [...data].sort((a, b) => b.borrowed_count - a.borrowed_count).slice(0, parseInt(topCount));
            setChartData(sortedData);
        }
    }, [data, topCount]);

    return (
        <Card className="col-span-full">
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
                <div>
                    <CardTitle>Most Popular Items</CardTitle>
                    <CardDescription>Items with highest borrow frequency</CardDescription>
                </div>
                <Select value={topCount} onValueChange={setTopCount}>
                    <SelectTrigger className="w-[100px]">
                        <SelectValue placeholder="Top items" />
                    </SelectTrigger>
                    <SelectContent>
                        <SelectItem value="5">Top 5</SelectItem>
                        <SelectItem value="10">Top 10</SelectItem>
                        <SelectItem value="15">Top 15</SelectItem>
                        <SelectItem value="20">Top 20</SelectItem>
                    </SelectContent>
                </Select>
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
                            <BarChart data={chartData}>
                                <XAxis dataKey="name" angle={-45} textAnchor="end" height={70} interval={0} />
                                <YAxis />
                                <Tooltip />
                                <Bar dataKey="borrowed_count" fill="#0ea5e9" name="Borrow Count" />
                            </BarChart>
                        </ResponsiveContainer>
                    </div>
                )}
            </CardContent>
        </Card>
    );
};

PopularItemsGraph.propTypes = {
    data: PropTypes.arrayOf(
        PropTypes.shape({
            name: PropTypes.string.isRequired,
            borrowed_count: PropTypes.number.isRequired,
        })
    ).isRequired,
    isLoading: PropTypes.bool,
};

export default PopularItemsGraph;
