import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'media',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        function ({addUtilities})
        {
            const newUtilities = {
                ".no-scrollbar::-webkit-scrollbar": {
                    display: "none",
                },
                "no-scrollbar": {
                    "-ms-overflow-style": "none",
                    "scrollbar-width": "none",
                },
            };

            addUtilities(newUtilities);
        }
    ],
};
