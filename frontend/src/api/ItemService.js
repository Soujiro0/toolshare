import { API_BASE } from "./config";

export async function getItems() {
    try {
        const response = await fetch(`${API_BASE}/items`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching item', error);
        throw error;
    }
}


export async function getItemById(itemId) {
    try {
        const response = await fetch(`${API_BASE}/items/${itemId}`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching item', error);
        throw error;
    }
}

export async function createItem(itemData) {
    console.log(itemData)
    try {
        const response = await fetch(`${API_BASE}/items-with-units`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(itemData),
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error creating item', error);
        throw error;
    }
}

export async function updateItem(itemId, itemData) {
    try {
        const response = await fetch(`${API_BASE}/items/${itemId}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(itemData),
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error updating item', error);
        throw error;
    }
}

export async function deleteItem(itemId) {
    try {
        const response = await fetch(`${API_BASE}/items/${itemId}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error deleting item', error);
        throw error;
    }
}

export async function getItemUnits() {
    try {
        const response = await fetch(`${API_BASE}/item-units`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching item units', error);
        throw error;
    }
}

export async function updateUnit(unitId, unitData) {
    try {
        const response = await fetch(`${API_BASE}/item-units/${unitId}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(unitData),
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error updating unit', error);
        throw error;
    }
}

export async function deleteUnit(unitId) {
    try {
        const response = await fetch(`${API_BASE}/item-units/${unitId}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error deleting unit', error);
        throw error;
    }
}