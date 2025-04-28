import AddItemDialog from "@/components/dialogs/InventoryManagement/AddItemDialog";
import DeleteConfirmationDialog from "@/components/dialogs/InventoryManagement/DeleteConfirmationDialog";
import DeleteUnitDialog from "@/components/dialogs/InventoryManagement/DeleteUnitDialog";
import EditItemDialog from "@/components/dialogs/InventoryManagement/EditItemDialog";
import ItemDetailDialog from "@/components/dialogs/InventoryManagement/ItemDetailDialog";
import UpdateUnitDialog from "@/components/dialogs/InventoryManagement/UpdateUnitDialog";
import columns from "@/components/tables/InventoryManagement/InventoryColumn";
import InventoryDataTable from "@/components/tables/InventoryManagement/InventoryDataTable";
import { Toaster } from "@/components/ui/sonner";
import { useEffect, useState } from "react";
import { toast } from "sonner";
import ApiService from "../../api/ApiService";
import Header from "../../components/layout/Header";

const Inventory = () => {
    const [inventory, setInventory] = useState([]);
    const [categories, setCategories] = useState([]);
    const [loading, setLoading] = useState(false);
    const [selectedItem, setSelectedItem] = useState(null);
    const [selectedUnit, setSelectedUnit] = useState(null);
    const [addItemDialogOpen, setAddItemDialogOpen] = useState(false);
    const [editItemDialogOpen, setEditItemDialogOpen] = useState(false);
    const [deleteItemDialogOpen, setDeleteItemDialogOpen] = useState(false);
    const [updateUnitDialogOpen, setUpdateUnitDialogOpen] = useState(false);
    const [deleteUnitDialogOpen, setDeleteUnitDialogOpen] = useState(false);
    const [detailDialogOpen, setDetailDialogOpen] = useState(false);

    const handleViewDetails = (item) => {
        if (item) {
            setSelectedItem(item);
            setDetailDialogOpen(true);
        }
    };

    const handleCloseDetail = () => {
        setDetailDialogOpen(false);
        setSelectedItem(null);
    };

    const handleEdit = (item) => {
        setSelectedItem(item);
        setEditItemDialogOpen(true);
    };

    const handleUpdateUnit = (unit) => {
        setSelectedUnit(unit);
        setUpdateUnitDialogOpen(true);
    };

    const handleDelete = (item) => {
        setSelectedItem(item);
        setDetailDialogOpen(false);
        setDeleteItemDialogOpen(true);
    };

    const handleDeleteUnit = (unit) => {
        setSelectedUnit(unit);
        setDetailDialogOpen(false);
        setDeleteUnitDialogOpen(true);
    };

    const fetchCategories = async () => {
        try {
            const response = await ApiService.ItemCategoryService.getAllCategories();
            setCategories(response.data);
            console.log(response);
        } catch (error) {
            console.log("Error fetching categories", error);
        }
    };

    const fetchItems = async () => {
        setLoading(true);
        try {
            const response = await ApiService.ItemService.getItems();
            setInventory(response.data);
        } catch (error) {
            console.error("Error fetching items:", error);
        } finally {
            setLoading(false);
        }
    };

    const handleAddItemCall = async (itemData) => {
        console.log("Saved item:", itemData);
        try {
            const response = await ApiService.ItemService.createItem(itemData);
            console.log(response);
            // Success toast here
            toast.success("CREATED Item successfully", {
                description: `Added item: ${itemData.name} to Inventory`,
            });
        } catch (error) {
            console.error("Error adding item:", error);
            toast.error("Error adding item");
        } finally {
            fetchItems();
        }
    };

    const handleUpdateItemCall = async (itemId, updatedItem) => {
        console.log("Updated Item:", updatedItem);
        try {
            const response = await ApiService.ItemService.updateItem(itemId, updatedItem);
            console.log(response);
            toast.success("UPDATED Item successfully", {
                description: `Update item ID: ${itemId} to Inventory`,
            });
        } catch (error) {
            console.log("Error updating item:", error);
            toast.error("Error updating item");
        } finally {
            fetchItems();
            handleCloseDetail();
        }
    };

    const handleDeleteItemCall = async (itemId) => {
        console.log("Deleting item with ID:", itemId);
        try {
            const response = await ApiService.ItemService.deleteItem(itemId);
            console.log(response);
            // Success toast here
            toast.success("DELETE Item successfully", {
                description: `Delete item ID: ${itemId} to Inventory`,
            });
        } catch (error) {
            console.log("Error deleting item:", error);
            toast.error("Error deleting item");
        } finally {
            fetchItems();
            handleCloseDetail();
        }
    };

    const handleUpdateUnitCall = async (unitId, updatedUnit) => {
        console.log("Updated Unit:", updatedUnit);
        try {
            const response = await ApiService.ItemService.updateUnit(unitId, updatedUnit);
            console.log(response);
            toast.success("UPDATED Item Unit successfully", {
                description: `Update unit ID: ${unitId} to Inventory`,
            });
        } catch (error) {
            console.log("Error updating item unit:", error);
            toast.error("Error updating item unit");
        } finally {
            fetchItems();
            handleCloseDetail();
        }
    };

    const handleDeleteUnitCall = async (unitId) => {
        console.log("Deleting unit with ID:", unitId);
        try {
            const response = await ApiService.ItemService.deleteUnit(unitId);
            console.log(response);
            toast.success("DELETE Item Unit successfully", {
                description: `Delete unit ID: ${unitId} to Inventory`,
            });
        } catch (error) {
            console.log("Error deleting item unit:", error);
            toast.error("Error deleting item unit");
        } finally {
            fetchItems();
            handleCloseDetail();
        }
    };

    useEffect(() => {
        fetchCategories();
        fetchItems();
    }, []);

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <img src="/public/computer.png" alt="" />
            <Header headerTitle="Inventory Management" />
            <InventoryDataTable columns={columns} data={inventory} onViewDetails={handleViewDetails} openAddItem={setAddItemDialogOpen} loading={loading} />
            <ItemDetailDialog
                isOpen={detailDialogOpen}
                onClose={handleCloseDetail}
                item={selectedItem}
                onEdit={handleEdit}
                onDelete={handleDelete}
                onUpdateUnit={handleUpdateUnit}
                onDeleteUnit={handleDeleteUnit}
            />

            <AddItemDialog
                isOpen={addItemDialogOpen}
                onClose={() => setAddItemDialogOpen(false)}
                onSave={handleAddItemCall}
                categories={categories}
            />

            <EditItemDialog
                isOpen={editItemDialogOpen}
                onClose={() => setEditItemDialogOpen(false)}
                item={selectedItem}
                onSave={handleUpdateItemCall}
                categories={categories}
            />

            <UpdateUnitDialog
                isOpen={updateUnitDialogOpen}
                onClose={() => setUpdateUnitDialogOpen(false)}
                unit={selectedUnit}
                onSave={handleUpdateUnitCall}
            />

            <DeleteConfirmationDialog
                isOpen={deleteItemDialogOpen}
                onClose={() => setDeleteItemDialogOpen(false)}
                onConfirm={handleDeleteItemCall}
                item={selectedItem}
            />

            <DeleteUnitDialog
                isOpen={deleteUnitDialogOpen}
                onClose={() => setDeleteUnitDialogOpen(false)}
                onConfirm={handleDeleteUnitCall}
                unit={selectedUnit}
            />
        </>
    );
};

export default Inventory;
