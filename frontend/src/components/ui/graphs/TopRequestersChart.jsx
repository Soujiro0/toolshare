import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { LoaderCircle } from "lucide-react";
import { Bar, BarChart, ResponsiveContainer, Tooltip, XAxis, YAxis } from "recharts";

const TopRequestersChart = ({ data = [], isLoading }) => {
    return (
        <Card className="col-span-full lg:col-span-1">
            <CardHeader>
                <CardTitle>Top Requesters</CardTitle>
                <CardDescription>Faculty members with most borrows</CardDescription>
            </CardHeader>
            <CardContent>
                {isLoading ? (
                    <span className="flex items-center justify-center gap-2 text-center py-4 font-bold">
                        <LoaderCircle className="animate-spin" />
                        Loading...Please wait
                    </span>
                ) : (
                    <div className="h-[300px]">
                        <ResponsiveContainer width="100%" height="100%">
                            <BarChart data={data} layout="vertical">
                                <XAxis type="number" />
                                <YAxis dataKey="name" type="category" width={100} />
                                <Tooltip />
                                <Bar dataKey="request_count" fill="hsl(var(--primary))" radius={[0, 4, 4, 0]} />
                            </BarChart>
                        </ResponsiveContainer>
                    </div>
                )}
            </CardContent>
        </Card>
    );
};

TopRequestersChart.propTypes;

export default TopRequestersChart;
