import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Label } from "@/components/ui/label";
import { LoaderCircle } from "lucide-react";
import PropTypes from "prop-types";

const UserRequestMetricsCard = ({ todayRequests, weekRequests, isLoading }) => {
    return (
        <Card>
            <CardHeader>
                <div className="flex justify-between">
                    <div className="space-y-2">
                        <CardTitle>Your Request Summary</CardTitle>
                        <CardDescription>Number of Requests Made</CardDescription>
                    </div>
                    {isLoading && <LoaderCircle className="animate-spin" />}
                </div>
            </CardHeader>
            <CardContent>
                <div className="space-y-4">
                    <div>
                        <Label>{"Today's Requests"}</Label>
                        <p className="text-2xl font-bold">{isLoading ? "--" : todayRequests}</p>
                    </div>
                    <div>
                        <Label>{"This Week's Requests"}</Label>
                        <p className="text-2xl font-bold">{isLoading ? "--" : weekRequests}</p>
                    </div>
                </div>
            </CardContent>
        </Card>
    );
};

UserRequestMetricsCard.propTypes = {
    todayRequests: PropTypes.number,
    weekRequests: PropTypes.number,
    isLoading: PropTypes.bool,
};

export default UserRequestMetricsCard;