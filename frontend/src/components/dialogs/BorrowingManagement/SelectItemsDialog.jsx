import ApiService from "@/api/ApiService";
import { getSelectableItemsColumns } from "@/components/tables/BorrowingManagement/SelectableItemColumn";
import DataTable from "@/components/tables/DataTable";
import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { ScrollArea } from "@/components/ui/scroll-area";
import { useMediaQuery } from "@/hooks/useMediaQuery";
import PropTypes from "prop-types";
import { useEffect, useState } from "react";

const SelectItemsDialog = ({ open, onClose, selectedItems, onSelect }) => {
    const [loading, setLoading] = useState(false);
    const [localItems, setLocalItems] = useState([]);
    const [items, setItems] = useState([]);
    const [categories, setCategories] = useState([]);

    const isMobile = useMediaQuery("(max-width: 768px)");

    const fetchInitialData = async () => {
        setLoading(true);
        try {
            const [itemsRes, catgeoryRes] = await Promise.all([ApiService.ItemService.getItems(), ApiService.ItemCategoryService.getAllCategories()]);

            const processedItems = (itemsRes.data || []).map((item) => {
                const availableUnits = item.item_units?.filter((unit) => unit.status === "AVAILABLE").length || 0;

                return {
                    ...item,
                    quantity_available: availableUnits,
                    quantity: 0,
                    checked: false,
                };
            });

            setCategories(catgeoryRes.data || []);
            setItems(processedItems);
        } catch (error) {
            console.log("Error fetching initial data:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleConfirm = () => {
        const selected = localItems.filter((item) => item.checked);
        console.log("Local Items:", localItems);
        onSelect(selected);
        onClose();
    };

    const filters = [
        {
            label: "Category",
            key: "category.category_name",
            values: categories.map((cat) => cat.category_name),
            type: "select",
        },
    ];

    const columns = getSelectableItemsColumns(
        isMobile,
        {
            onToggleSelect: (itemId, checked) => {
                setLocalItems((prevItems) => prevItems.map((item) => (item.item_id === itemId ? { ...item, checked } : item)));
            },
            onIncrement: (itemId) => {
                setLocalItems((prevItems) =>
                    prevItems.map((item) =>
                        item.item_id === itemId && item.quantity < item.quantity_available ? { ...item, quantity: item.quantity + 1 } : item
                    )
                );
            },
            onDecrement: (itemId) => {
                setLocalItems((prevItems) =>
                    prevItems.map((item) => (item.item_id === itemId && item.quantity > 1 ? { ...item, quantity: item.quantity - 1 } : item))
                );
            },
        },
        []
    );

    useEffect(() => {
        if (open) {
            fetchInitialData();
        }
    }, [open]);

    useEffect(() => {
        const initial = items.map((item) => {
            const found = selectedItems.find((i) => i.item_id === item.item_id);
            return {
                ...item,
                quantity: found?.quantity || 1,
                checked: !!found,
            };
        });
        setLocalItems(initial);
    }, [items, selectedItems]);

    return (
        <Dialog open={open} onOpenChange={onClose}>
            <DialogContent className="w-[95%] lg:w-[50%] lg:h-fit h-[95vh] px-2 py-4 lg:p-6" width="90%">
                <DialogHeader>
                    <DialogTitle>Select Items to Borrow</DialogTitle>
                </DialogHeader>

                <ScrollArea className="lg:h-fit h-[calc(90vh-8rem)]">
                    <div className="p-3 sm:p-2">
                        <DataTable
                            columns={columns}
                            data={localItems}
                            searchKeys={["name"]}
                            filters={filters}
                            showEntries={false}
                            entrySize={(isMobile ? 5 : 10)}
                            isLoading={loading}
                        />
                    </div>
                </ScrollArea>

                <DialogFooter className="p-4 sm:p-6">
                    <Button className="w-full sm:w-auto min-w-[200px]" onClick={handleConfirm}>
                        Add Selected Items
                    </Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

SelectItemsDialog.propTypes = {
    open: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    selectedItems: PropTypes.arrayOf(
        PropTypes.shape({
            item_id: PropTypes.number.isRequired,
            name: PropTypes.string.isRequired,
            quantity: PropTypes.number.isRequired,
        })
    ).isRequired,
    onSelect: PropTypes.func.isRequired,
};

export default SelectItemsDialog;
