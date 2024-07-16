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
            colors:{
                "primary":"#FFFFFF",
                "secondary":"#2735B8",
                "third":"#FFFFFF",
                "fourth":"#161B1B",
                "txtprimary":"#00000",
                "txtsecondary":"#FFFFFF",
                "txtthird":"#879595",
            },
            height:{
              'main':'calc(100vh - 60px)'
            },
            spacing: {
                'calc-screen': 'calc(100vh - 60px)', // Ejemplo de uso
              },

        },
    },

    plugins: [forms, typography],
};
