import DataTable from "@/components/tables/DataTable";
import getUnitColumns from "@/components/tables/InventoryManagement/ItemDetailColumn";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import PropTypes from "prop-types";
import { useState } from "react";
import BorrowedHistoryDialog from "../BorrowedHistoryDialog";

export const ItemDetailDialog = ({ isOpen, onClose, item, onEdit, onDelete, onUpdateUnit, onDeleteUnit }) => {
    const [selectedUnit, setSelectedUnit] = useState(null);
    const [isHistoryOpen, setIsHistoryOpen] = useState(false);

    if (!item) return null;

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

    const columns = getUnitColumns({
        onUpdateUnit: onUpdateUnit,
        onDeleteUnit: onDeleteUnit,
        onViewHistory: handleRowClick
    });

    return (
        <>
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent width="max-w-fit md:max-w-7xl">
                    <DialogHeader>
                        <DialogTitle>Item Details</DialogTitle>
                    </DialogHeader>

                    {/* Metadata */}
                    <div className="mb-4 flex flex-col gap-2">
                        <h1>
                            <strong>Item ID:</strong> {item.item_id}
                        </h1>
                        <div className="flex justify-between items-center">
                            <h2>
                                <strong>Item Name: </strong> {item.name}
                            </h2>
                            <div className="flex space-x-4">
                                <Button variant="outline" onClick={handleEdit}>
                                    Edit
                                </Button>
                                <Button variant="outline" onClick={handleDelete} className="text-red-500">
                                    Delete
                                </Button>
                            </div>
                        </div>
                        <h3>
                            <strong>Category:</strong> {item.category.category_name}
                        </h3>
                        <h3>
                            <strong>Unit:</strong> {item.unit}
                        </h3>
                        <h3 className="flex item-center gap-2">
                            <strong>Acquired on:</strong> {item.acquisition_date || <p className="text-gray-400 italic">N/A</p>}
                        </h3>
                    </div>

                    {/* Units Table */}
                    <div>
                        <h1 className="mb-2">
                            <strong>Total Units:</strong> {item.item_units_count}
                        </h1>
                        <h2 className="mb-2 font-bold">Units</h2>

                        <DataTable columns={columns} data={item.item_units} searchKeys={[]} filters={[]} isLoading={false} entrySize={5} showEntries={false} showSearchFilter={false}/>
                    
                    </div>
                </DialogContent>
            </Dialog>

            <BorrowedHistoryDialog
                isOpen={isHistoryOpen}
                onClose={() => setIsHistoryOpen(false)}
                selectedItem={{ ...item, unit_id: selectedUnit?.unit_id }}
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
};

export default ItemDetailDialog;
