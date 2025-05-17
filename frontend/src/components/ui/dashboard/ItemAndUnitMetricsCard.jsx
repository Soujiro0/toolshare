import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Label } from "@/components/ui/label";

const ItemAndUnitMetricsCard = ({ itemCount, unitCount, isLoading }) => {
    return (
        <Card>
            <CardHeader>
                <CardTitle>Items & Units Metric</CardTitle>
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
