import { getReturnCheckColumns } from "@/components/tables/BorrowingManagement/ReturnCheckColumn";
import DataTable from "@/components/tables/DataTable";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { ScrollArea } from "@/components/ui/scroll-area";
import { useMediaQuery } from "@/hooks/useMediaQuery";
import PropTypes from "prop-types";
import { useEffect, useMemo, useState } from "react";
import ScannerDialog from "../ScannerDialog";

const ReturnCheckDialog = ({ isOpen, onClose, request, units, onReturn }) => {
    const [returnedData, setReturnedData] = useState({});
    const isMobile = useMediaQuery("(max-width: 768px)");
    const [isScannerModalOpen, setIsScannerModalOpen] = useState(false);

    // Add this helper function to calculate return statistics
    const getReturnStats = () => {
        const total = units.length;
        const returned = units.filter((item) => item.returned_date).length;
        const remaining = total - returned;
        const allReturned = remaining === 0;

        return {
            total,
            returned,
            remaining,
            allReturned,
        };
    };

    const toggleCheckbox = (unit_id) => {
        setReturnedData((prev) => ({
            ...prev,
            [unit_id]: {
                ...prev[unit_id],
                returned: !prev[unit_id]?.returned,
            },
        }));
    };

    const updateDamageStatus = (unit_id, value) => {
        setReturnedData((prev) => ({
            ...prev,
            [unit_id]: {
                ...prev[unit_id],
                damage_status: value,
            },
        }));
    };

    const updateDamageNotesChange = (unit_id, value) => {
        setReturnedData((prev) => ({
            ...prev,
            [unit_id]: {
                ...prev[unit_id],
                damage_notes: value,
            },
        }));
    };

    const handleReturn = () => {
        const returned_units = Object.entries(returnedData)
            .filter(([, data]) => data.returned)
            .map(([unit_id, data]) => ({
                unit_id: parseInt(unit_id),
                damage_status: data.damage_status || "UNDAMAGED",
                damage_notes: data.damage_notes || "",
            }));

        const payload = {
            request_id: request.request_id,
            returned_units,
        };

        console.log("Returning", payload);

        onClose();
        onReturn(payload);
    };

    const handlers = useMemo(
        () => ({
            isChecked: (unit_id) => returnedData[unit_id]?.returned,
            onToggle: toggleCheckbox,
            onStatusChange: updateDamageStatus,
            onNotesChange: updateDamageNotesChange,
            getDamageStatus: (unit_id) => returnedData[unit_id]?.damage_status || "UNDAMAGED",
            getDamageNotes: (unit_id) => returnedData[unit_id]?.damage_notes || "",
        }),
        [returnedData]
    );

    const columns = useMemo(() => getReturnCheckColumns(isMobile, handlers), [handlers, isMobile]);

    useEffect(() => {
        if (isOpen && units) {
            const initialData = units.reduce((acc, item) => {
                console.log("Processing unit:", item.unit.unit_id, "returned_date:", item.returned_date);
                acc[item.unit.unit_id] = {
                    returned: item.returned_date ? true : false,
                    damage_status: item.damage_status || "UNDAMAGED",
                    damage_notes: item.damage_notes || "",
                };
                return acc;
            }, {});
            setReturnedData(initialData);
        }
    }, [isOpen, units]);

    if (!request) return null;

    return (
        <>
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent className="w-[100%] sm:w-[90%] h-[95vh] p-4 lg:p-6" width="90%">
                    <DialogHeader>
                        <DialogTitle className="text-base sm:text-lg">Return Check for {request.requested_by}</DialogTitle>

                        {/* Add Return Statistics */}
                        <div className="mt-2 grid grid-cols-2 md:grid-cols-3 gap-2 text-sm">
                            <div className="bg-muted p-2 rounded-md">
                                <p className="text-muted-foreground">Total Items</p>
                                <p className="font-medium">{getReturnStats().total}</p>
                            </div>
                            <div className="bg-green-100 p-2 rounded-md">
                                <p className="text-green-600">Returned</p>
                                <p className="font-medium">{getReturnStats().returned}</p>
                            </div>
                            <div className="bg-amber-100 p-2 rounded-md">
                                <p className="text-amber-600">Remaining</p>
                                <p className="font-medium">{getReturnStats().remaining}</p>
                            </div>
                        </div>
                    </DialogHeader>
                    <ScrollArea className="h-[calc(90vh-8rem)]">
                        <div className="px-1 sm:px-3">
                            <DataTable columns={columns} data={units} showSearchFilter={false} />
                        </div>
                        <div className="flex justify-end mt-4 space-x-2">
                            <Button onClick={() => setIsScannerModalOpen(true)} className="w-full sm:w-auto">
                                Scan Items
                            </Button>
                            <Button onClick={handleReturn} className="w-full sm:w-auto">
                                Submit
                            </Button>
                        </div>
                    </ScrollArea>
                </DialogContent>
            </Dialog>
            <ScannerDialog
                isOpen={isScannerModalOpen}
                onClose={() => setIsScannerModalOpen(false)}
                onScanSuccess={(scannedUnitId) => {
                    const unitId = Number(scannedUnitId);
                    if (units.some((item) => item.unit.unit_id === unitId)) {
                        setReturnedData((prev) => ({
                            ...prev,
                            [unitId]: {
                                ...prev[unitId],
                                returned: true,
                                damage_status: prev[unitId]?.damage_status || "UNDAMAGED",
                                damage_notes: prev[unitId]?.damage_notes || "",
                            },
                        }));
                    }
                }}
            />
        </>
    );
};

ReturnCheckDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    request: PropTypes.object,
    units: PropTypes.array.isRequired,
    onReturn: PropTypes.func.isRequired,
};

export default ReturnCheckDialog;
