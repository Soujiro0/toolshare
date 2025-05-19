import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Label } from "@/components/ui/label";
import { LoaderCircle } from "lucide-react";

const ItemAndUnitMetricsCard = ({ itemCount, unitCount, isLoading }) => {
    return (
        <Card>
            <CardHeader>
                <div className="flex justify-between">
                    <div className="space-y-2">
                        <CardTitle>Items & Units Metric</CardTitle>
                        <CardDescription>Total number of Items and Units in Inventory</CardDescription>
                    </div>
                    {isLoading && <LoaderCircle className="animate-spin" />}
                </div>
            </CardHeader>
            <CardContent>
                <div className="space-y-4">
                    <div>
                        <Label>{"Total Item/s in Inventory"}</Label>
                        <p className="text-2xl font-bold">{isLoading ? "--" : itemCount}</p>
                    </div>
                    <div>
                        <Label>Total Unit/s in Inventory</Label>
                        <p className="text-2xl font-bold">{isLoading ? "--" : unitCount}</p>
                    </div>
                </div>
            </CardContent>
        </Card>
    );
};

ItemAndUnitMetricsCard.propTypes;

export default ItemAndUnitMetricsCard;
