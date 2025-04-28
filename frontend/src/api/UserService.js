import { API_BASE } from "./config";

export async function getUsers() {
    try {
        const response = await fetch(`${API_BASE}/users`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });
        const data = await response.json();
        console.log(data);
        return data;
    } catch (error) {
        console.error("Error fetching users");
        throw error;
    }
}

export async function addUser(userData) {
    try {
        const response = await fetch(`${API_BASE}/users`, {
            method: "POST",
            headers: {
                "Content-type" : "application/json",
            },
            body: JSON.stringify(userData)
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error Adding User", error);
        throw error;
    }
}

export async function updateUser(userId, updatedUserData) {
    try {
        const response = await fetch(`${API_BASE}/users/${userId}`, {
            method: "PUT",
            headers: {
                "Content-type" : "application/json",
            },
            body: JSON.stringify(updatedUserData)
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error Updating User", error);
        throw error;
    }
}

export async function deleteUser(userId) {
    try {
        const response = await fetch(`${API_BASE}/users/${userId}`, {
            method: "DELETE",
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error Deleting User", error);
        throw error;
    }
}