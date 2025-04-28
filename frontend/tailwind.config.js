/** @type {import('tailwindcss').Config} */

export default {
    content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
    theme: {
        extend: {
            colors: {
                primary_c: 'var(--primary-color)',
                secondary_c: 'var(--secondary-color)',
                background_c: 'var(--background-color)',
                accent_c: 'var(--accent-color)',
            },
        },
    },
    plugins: [],
};
