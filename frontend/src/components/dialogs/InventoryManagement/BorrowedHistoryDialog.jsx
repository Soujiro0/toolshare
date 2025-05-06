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


const BorrowedHistoryDialog = ({ isOpen, onClose, selectedItem }) => {
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

    const columns = getItemUnitHistoryColumn({}, ["unit.property_no","unit.item.name","unit.brand", "unit.model", "actions"]);

    useEffect(() => {
        if (!isOpen) return;
        fetchHistory();
    // eslint-disable-next-line react-hooks/exhaustive-deps
    }, [selectedItem, isOpen]);

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent width="w-[80%] min-w-[80%] max-w-[700px]">
                <DialogHeader>
                    <DialogTitle>Borrowed History</DialogTitle>
                </DialogHeader>
                
                <DataTable data={history || []} columns={columns || []} isLoading={loading} showSearchFilter={false}/>


            </DialogContent>
        </Dialog>
    );
};

BorrowedHistoryDialog.propTypes;

export default BorrowedHistoryDialog;
