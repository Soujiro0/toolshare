import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Label } from "@/components/ui/label";

const RequestMetricsCard = ({ todayCount, weekCount }) => {
    return (
        <Card>
            <CardHeader>
                <CardTitle>Request Metrics</CardTitle>
            </CardHeader>
            <CardContent>
                <div className="space-y-4">
                    <div>
                        <Label>{"Today's Approved"}</Label>
                        <p className="text-2xl font-bold">{todayCount}</p>
                    </div>
                    <div>
                        <Label>This Week</Label>
                        <p className="text-2xl font-bold">{weekCount}</p>
                    </div>
                </div>
            </CardContent>
        </Card>
    );
};

RequestMetricsCard.propTypes;

export default RequestMetricsCard;
