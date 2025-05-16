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

const AssignUnitsDialog = ({ isOpen, onClose, request, onSelect, preselectedUnits = [], isMobile }) => {
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
        isMobile,
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
              <DialogContent className="w-[95%] sm:w-[90%] h-[95vh] p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle className="text-lg md:text-xl">
                        Assign Units for {request.requested_by}
                    </DialogTitle>
                </DialogHeader>

                <ScrollArea className="h-[60vh] md:h-[700px] pr-2 space-y-4 md:space-y-6">
                    {itemsWithUnits.map((item, index) => (
                        <div key={item.item_id} className="space-y-2 flex flex-col mb-2 md:mb-4 border p-2 md:p-4 rounded-md">
                            <Label className="font-semibold text-sm md:text-base">
                                Item {index + 1}: {item.name}
                            </Label>

                            <div className="overflow-x-auto">
                                <DataTable 
                                    data={item.item_units} 
                                    columns={unitColumn} 
                                    isLoading={loading} 
                                    showSearchFilter={false} 
                                    entrySize={5}
                                    className="w-full min-w-[300px]"
                                />
                            </div>
                        </div>
                    ))}

                    <div className="space-y-2 flex flex-col">
                        <Label className="text-sm md:text-base">Admin Note:</Label>
                        <Textarea 
                            className="resize-none h-[100px] md:h-[200px]" 
                            placeholder="Write a note" 
                            value={""} 
                            onChange={() => {}} 
                            name="note" 
                        />
                    </div>
                </ScrollArea>

                <DialogFooter className="flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2 mt-4">
                    <Button 
                        onClick={() => setIsScannerModalOpen(true)}
                        className="w-full sm:w-auto"
                    >
                        Scan Items
                    </Button>
                    <Button 
                        onClick={handleAssign}
                        className="w-full sm:w-auto"
                    >
                        Assign Items
                    </Button>
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
                        item_units: item.item_units.map((unit) => 
                            (unit.unit_id === Number(scannedUnitId) ? { ...unit, checked: true } : unit)
                        ),
                    }))
                );
            }}
        />
    </>
);
};

AssignUnitsDialog.propTypes;

export default AssignUnitsDialog;
