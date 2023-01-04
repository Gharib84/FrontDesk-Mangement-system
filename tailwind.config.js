const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'xs': { 'max': '640px' },
            'sm': { 'min': '641px', 'max': '768px' },
            'md': { 'min': '769px', 'max': '1024px' },
            'lg': { 'min': '1025px', 'max': '1280px' },
            'xl': { 'min': '1281px', 'max': '1536px' },
            '2xl': { 'min': '1537px' },
          },
          
        extend: {

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },


        },
    },

    plugins: [require('@tailwindcss/forms')],
};
