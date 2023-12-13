/** @type {import('tailwindcss').Config} */
import forms from '@tailwindcss/forms';

export default {
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './vendor/tallstackui/tallstackui/src/**/*.php',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        forms,
        require('flowbite/plugin')
    ],
}

