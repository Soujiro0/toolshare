import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { LoaderCircle } from "lucide-react";
import { Cell, Legend, Pie, PieChart, ResponsiveContainer, Tooltip } from "recharts";

const COLORS = {
    available: "#29C801",
    inUse: "#DDE931",
    maintenance: "#B71111",
};

const InventoryHealthChart = ({ data, isLoading }) => {
    // Calculate percentages
    const total = data.reduce((acc, item) => acc + item.value, 0);
    const formattedData = data.map((item) => ({
        ...item,
        percentage: ((item.value / total) * 100).toFixed(1),
    }));

    return (
        <Card className="col-span-full lg:col-span-1">
            <CardHeader>
                <CardTitle>Inventory Health</CardTitle>
                <CardDescription>Distribution of item conditions</CardDescription>
            </CardHeader>
            <CardContent>
                {isLoading ? (
                    <span className="flex items-center justify-center gap-2 text-center py-4 font-bold">
                        <LoaderCircle className="animate-spin" />
                        Loading...Please wait
                    </span>
                ) : (
                    <div className="h-[300px] w-full">
                        <ResponsiveContainer width="100%" height="100%">
                            <PieChart>
                                <Pie data={formattedData} innerRadius={60} outerRadius={80} paddingAngle={5} dataKey="value">
                                    {formattedData.map((entry, index) => (
                                        <Cell key={`cell-${index}`} fill={COLORS[entry.id]} />
                                    ))}
                                </Pie>
                                <Tooltip
                                    formatter={(value, name) => [
                                        `${value} units (${formattedData.find((item) => item.name === name)?.percentage}%)`,
                                        name,
                                    ]}
                                />
                                <Legend />
                            </PieChart>
                        </ResponsiveContainer>
                    </div>
                )}
            </CardContent>
        </Card>
    );
};

InventoryHealthChart.propTypes;

export default InventoryHealthChart;
