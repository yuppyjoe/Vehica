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
                'muli': ["Muli"]
            },
            backgroundImage: {
                
                'team': "url('/public/images/background-team.png')"
            },
            boxShadow: {
                '3xl': '0px 0px 30px #f8fafc',
                '4xl': '0 3px 40px 0 #dbe0e8'
            },
            
        },
    },

    plugins: [forms, typography],
};
