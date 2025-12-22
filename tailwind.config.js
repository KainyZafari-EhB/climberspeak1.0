// file: `tailwind.config.js`
const defaultTheme = require('tailwindcss/defaultTheme');
const forms = require('@tailwindcss/forms');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: '#fff7ed',   // warm cream
                    100: '#ffedd5',
                    200: '#fed7aa',
                    300: '#fdba74',
                    400: '#fb923c',  // adventure orange
                    500: '#f97316',
                    600: '#ea580c',
                    700: '#c2410c',
                    800: '#9a3412',
                    900: '#7c2d12',
                },
                earth: {
                    50: '#faf5f0',
                    100: '#f0e6d9',
                    200: '#e0ccb3',
                    300: '#cbab86',
                    400: '#b88f5f',
                    500: '#a67c4e',
                    600: '#8f6841',
                    700: '#755438',
                    800: '#614632',
                    900: '#533d2d',
                },
                slate: {
                    850: '#151f32',
                    900: '#0f172a',
                }
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.5s ease-out',
                'float': 'float 3s ease-in-out infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(10px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                }
            }
        },
    },
    plugins: [forms],
};
