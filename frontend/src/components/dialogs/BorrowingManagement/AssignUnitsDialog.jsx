import ApiService from "@/api/ApiService";
import DataTable from "@/components/tables/DataTable";
import { getUnitColumns } from "@/components/tables/InventoryManagement/ItemUnitColumn";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Label } from "@/components/ui/label";
import { ScrollArea } from "@/components/ui/scroll-area";
import { Textarea } from "@/components/ui/textarea";
import { useEffect, useState } from "react";
import AssignItemScanner from "../AssignItemScanner";

const AssignUnitsDialog = ({ isOpen, onClose, request, onSelect, preselectedUnits = [] }) => {
    const [loading, setLoading] = useState(false);
    const [itemsWithUnits, setItemsWithUnits] = useState([]);

    const [isScannerModalOpen, setIsScannerModalOpen] = useState(false);

    const fetchAllItemsWithUnits = async () => {
        console.log("Requested Items: ", request.requested_items);
        setLoading(true);
        try {
            const results = await Promise.all(request.requested_items.map((req_item) => ApiService.ItemService.getItemById(req_item.item.item_id)));

            const mergedItems = results.map((res, index) => {
                const requestedItem = request.requested_items[index];
                const itemData = res.data;

                // Filter out units that are IN_USE or UNDER_MAINTENANCE
                const filteredUnits = itemData.item_units.filter((unit) => unit.status !== "IN_USE" && unit.status !== "UNDER_MAINTENANCE");

                return {
                    ...itemData,
                    requested_quantity: requestedItem.quantity,
                    item_units: filteredUnits.map((unit) => ({
                        ...unit,
                        checked: preselectedUnits.some((u) => u.unit_id === unit.unit_id),
                    })),
                };
            });

            setItemsWithUnits(mergedItems);
            console.log("Fetched items with units:", mergedItems);
        } catch (error) {
            console.error("Failed to fetch items:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleAssign = async () => {
        const selectedUnits = itemsWithUnits.flatMap((item) => item.item_units.filter((unit) => unit.checked));

        console.log("Selected units:", selectedUnits);
        onSelect(selectedUnits);
        onClose();
    };

    useEffect(() => {
        if (isOpen && request?.requested_items?.length > 0) {
            fetchAllItemsWithUnits();
            console.log("Fetched items with units:", itemsWithUnits);
        }
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [isOpen]);

    const unitColumn = getUnitColumns(
        {
            onToggleSelect: (unitId, checked) => {
                setItemsWithUnits((prevItems) =>
                    prevItems.map((item) => ({
                        ...item,
                        item_units: item.item_units.map((unit) => (unit.unit_id === unitId ? { ...unit, checked } : unit)),
                    }))
                );
            },
        },
        ["actions", "status", "qr_code"]
    );

    if (!request) return null;

    return (
        <>
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent width="max-w-[80%]">
                    <DialogHeader>
                        <DialogTitle>Assign Units for {request.requested_by}</DialogTitle>
                    </DialogHeader>

                    <ScrollArea className="h-[700px] pr-2 space-y-6">
                        {itemsWithUnits.map((item, index) => (
                            <div key={item.item_id} className="space-y-2 flex flex-col mb-4 border p-4 rounded-md">
                                <Label className="font-semibold">
                                    Item {index + 1}: {item.name}
                                </Label>

                                <DataTable data={item.item_units} columns={unitColumn} isLoading={loading} showSearchFilter={false} entrySize={5} />
                            </div>
                        ))}

                        <div className="space-y-2 flex flex-col">
                            <Label className="">Admin Note:</Label>
                            <Textarea className="resize-none h-[200px]" placeholder="Write A note" value={""} onChange={() => {}} name="note" />
                        </div>
                    </ScrollArea>

                    <DialogFooter>
                        <Button onClick={() => setIsScannerModalOpen(true)}>Scan Items to Assign</Button>
                        <Button onClick={handleAssign}>Assign Items</Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>

            <AssignItemScanner
                isOpen={isScannerModalOpen}
                onClose={() => setIsScannerModalOpen(false)}
                onScanSuccess={(scannedUnitId) => {
                    setItemsWithUnits((prev) =>
                        prev.map((item) => ({
                            ...item,
                            item_units: item.item_units.map((unit) => (unit.unit_id === Number(scannedUnitId) ? { ...unit, checked: true } : unit)),
                        }))
                    );
                }}
            />
        </>
    );
};

AssignUnitsDialog.propTypes;

export default AssignUnitsDialog;
