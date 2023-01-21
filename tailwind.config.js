const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            gridTemplateRows: {
                // Simple 8 row grid
                8: "repeat(8, minmax(0, 1fr))",
            },

            colors: {
                "staghorn-50": "#f3f8fc",
                "staghorn-100": "#e7f1f7",
                "staghorn-200": "#c9e0ee",
                "staghorn-300": "#9ac8df",
                "staghorn-400": "#618AA2",
                "staghorn-500": "#3f90b8",
                "staghorn-600": "#2e749b",
                "staghorn-700": "#245775",
                "staghorn-800": "#234f69",
                "staghorn-900": "#224358",
            },
            fontFamily: {
                sans: ["Roboto", ...defaultTheme.fontFamily.sans],
                serif: ["Merriweather", ...defaultTheme.fontFamily.serif],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
