import { API_BASE } from "./config";

export async function getAllCategories() {
    try {
        const response = await fetch(`${API_BASE}/categories`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching categories', error);
        throw error;
    }
}