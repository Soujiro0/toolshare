import DataTable from "@/components/tables/DataTable";
import getUnitColumns from "@/components/tables/InventoryManagement/ItemUnitColumn";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
// import { exportUnitsToExcel } from "@/lib/utils";
import { ScrollArea } from "@/components/ui/scroll-area";
import PropTypes from "prop-types";
import { useState } from "react";
import BorrowedHistoryDialog from "./BorrowedHistoryDialog";

export const ItemDetailDialog = ({ isOpen, onClose, item, onEdit, onDelete, onUpdateUnit, onDeleteUnit, isMobile }) => {
    const [selectedUnit, setSelectedUnit] = useState(null);
    const [isHistoryOpen, setIsHistoryOpen] = useState(false);

    if (!item) {
        return null;
    }

    const handleEdit = () => {
        console.log("Edit clicked for item:", item.item_id);
        console.log(item);
        onEdit(item);
    };

    const handleDelete = () => {
        console.log("Delete clicked for item:", item.item_id);
        onDelete(item);
    };

    const handleRowClick = (unit) => {
        setSelectedUnit(unit);
        setIsHistoryOpen(true);
    };

    const columns = getUnitColumns(
        isMobile,
        {
            onUpdateUnit: onUpdateUnit,
            onDeleteUnit: onDeleteUnit,
            onViewHistory: handleRowClick,
        },
        ["checkbox"]
    );

    return (
        <>
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent className="w-[95%] sm:w-[90%] h-[90vh] p-4 lg:p-6" width="">
                    <DialogHeader>
                        <DialogTitle>Item Details</DialogTitle>
                    </DialogHeader>
                    <ScrollArea className="h-[calc(90vh-8rem)]">
                        <div className="px-3">
                            {/* Metadata */}    
                            <div className="p-3 flex justify-center w-full">
                                {/* Add this block for image display */}
                                {item.image_url ? (
                                    <div className="mb-4">
                                        <h3 className="text-sm font-medium mb-2 text-center">Item Image</h3>
                                        <div className="w-32 h-32">
                                            <img src={item.image_url} alt={item.name} className="w-full h-full object-cover rounded-lg" />
                                        </div>
                                    </div>
                                ) : (
                                    <div className="w-12 h-12 bg-gray-100 rounded-md flex items-center justify-center">
                                        <span className="text-xs text-center text-gray-400">No image</span>
                                    </div>
                                )}
                                {/* ... rest of the content ... */}
                            </div>
                            <div className="mb-4 flex flex-col gap-2">
                                <h1 className="text-sm sm:text-base">
                                    <strong>Item ID:</strong> {item.item_id}
                                </h1>
                                <div className="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2">
                                    <h2 className="text-sm sm:text-base">
                                        <strong>Item Name: </strong> {item.name}
                                    </h2>
                                    <div className="flex gap-2">
                                        <Button variant="outline" onClick={handleEdit} className="flex-1 sm:flex-none">
                                            Edit
                                        </Button>
                                        <Button variant="outline" onClick={handleDelete} className="flex-1 sm:flex-none text-red-500">
                                            Delete
                                        </Button>
                                    </div>
                                </div>
                                <h3 className="text-sm sm:text-base">
                                    <strong>Category:</strong> {item.category.category_name}
                                </h3>
                                <h3 className="text-sm sm:text-base">
                                    <strong>Unit:</strong> {item.unit}
                                </h3>
                                <h3 className="flex items-center gap-2 text-sm sm:text-base">
                                    <strong>Acquired on:</strong> {item.acquisition_date || <p className="text-gray-400 italic">N/A</p>}
                                </h3>
                            </div>

                            {/* Units Table */}
                            <div className="mt-4">
                                <h1 className="mb-2 text-sm sm:text-base">
                                    <strong>Total Units:</strong> {item.item_units_count}
                                </h1>
                                <h2 className="mb-2 font-bold text-sm sm:text-base">Units</h2>

                                <div className="overflow-x-auto -mx-6 sm:mx-0">
                                    <div className="min-w-full px-6 sm:px-0">
                                        <DataTable
                                            columns={columns}
                                            data={item.item_units}
                                            searchKeys={[]}
                                            filters={[]}
                                            isLoading={false}
                                            entrySize={5}
                                            showEntries={false}
                                            showSearchFilter={false}
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ScrollArea>
                </DialogContent>
            </Dialog>

            <BorrowedHistoryDialog
                isOpen={isHistoryOpen}
                onClose={() => setIsHistoryOpen(false)}
                selectedItem={{ ...item, unit_id: selectedUnit?.unit_id }}
                isMobile={isMobile}
            />
        </>
    );
};

ItemDetailDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    item: PropTypes.object.isRequired,
    onEdit: PropTypes.func.isRequired,
    onDelete: PropTypes.func.isRequired,
    onDeleteUnit: PropTypes.func.isRequired,
    onUpdateUnit: PropTypes.func.isRequired,
    isMobile: PropTypes,
};

export default ItemDetailDialog;
