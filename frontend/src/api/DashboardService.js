import { API_BASE } from "./config";

export async function getStats() {
    try {
        const response = await fetch(`${API_BASE}/dashboard/stats`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching stats', error);
        throw error;
    }
}