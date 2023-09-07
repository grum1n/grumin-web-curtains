import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            maxWidth:{
                '8xl': '90rem', /* 1420px */
                '9xl': '100rem', /* 1600px */
                '243dd': '60rem', /* 972px */
            },
            maxHeight:{
                '205': '51rem' /* 820px */
            },
            height:{
                '150': '37.5rem' /* 600px */
            },
            width:{
                '120': '30rem', /* 480 */
                '130': '32.5rem', /* 520 */
            }
        },
    },

    plugins: [forms, typography],
};
