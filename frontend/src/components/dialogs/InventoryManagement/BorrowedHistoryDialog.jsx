import ApiService from "@/api/ApiService";
import DataTable from "@/components/tables/DataTable";
import getItemUnitHistoryColumn from "@/components/tables/InventoryManagement/ItemHistoryColumn";
import {
    Dialog,
    DialogContent,
    DialogHeader,
    DialogTitle,
} from "@/components/ui/dialog";
import { useEffect, useState } from "react";


const BorrowedHistoryDialog = ({ isOpen, onClose, selectedItem, isMobile }) => {
    const [history, setHistory] = useState([]);
    const [loading, setLoading] = useState(false);

    const fetchHistory = async () => {
        setLoading(true);
        try {
            const response = await ApiService.BorrowItemService.getItemHistory(
                selectedItem.unit_id
            );
            setHistory(response.data);
        } catch (err) {
            console.error("Error fetching item history:", err);
        } finally {
            setLoading(false);
        }
    };

    const columns = getItemUnitHistoryColumn(isMobile, {}, ["unit.property_no","unit.item.name","unit.brand", "unit.model", "actions"]);

    useEffect(() => {
        if (!isOpen) return;
        fetchHistory();
    // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [selectedItem, isOpen]);

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent className="w-[95%] sm:w-[90%] h-[90vh] p-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>Borrowed History</DialogTitle>
                </DialogHeader>
                
                <div className="h-[calc(90vh-8rem)] overflow-y-auto">
                    <DataTable 
                        data={history || []} 
                        columns={columns || []} 
                        isLoading={loading} 
                        showSearchFilter={false}
                        className="w-full"
                    />
                </div>
            </DialogContent>
        </Dialog>
    );
};

BorrowedHistoryDialog.propTypes;

export default BorrowedHistoryDialog;
