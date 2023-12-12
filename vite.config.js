import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'views'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, "node_modules/bootstrap/dist")
        }
    }
});
