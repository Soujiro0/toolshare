import { API_BASE } from './config';

/**
 * Authenticates a user by sending login credentials to the API.
 * 
 * @param {string} username - The username of the user.
 * @param {string} password - The password of the user.
 * @returns {Promise<Object>} The API response containing authentication details (e.g., token, user info).
 * @throws {Error} If login fails or the API returns an error.
 */
export async function loginApi(username, password) {
    try {
        var payload = JSON.stringify({ username, password });
        console.log("payload: ");
        console.log(payload);
        const response = await fetch(`${API_BASE}/login`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: payload,
        });

        // if (!response.ok) {
        //     const errorData = await response.json();
        //     throw new Error(errorData.message || 'Login failed');
        // }

        return await response.json();
    } catch (error) {
        console.error('Login API error:', error);
        throw error;
    }
}