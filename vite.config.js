import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/main.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        origin: `${(process.env.DDEV_PRIMARY_URL || 'http://localhost').replace(/:\d+$/, '')}:5173`,
        cors: {
            origin: /https?:\/\/([A-Za-z0-9-.]+)?(.ddev.site)(?::\d+)?$/,
        },
        watch: {
            usePolling: true, // Important for WSL/Windows file change detection
        },
        hmr: {
            host: process.env.DDEV_PRIMARY_URL ? new URL(process.env.DDEV_PRIMARY_URL).hostname : 'localhost',
        },
    }
});