import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/scss/global.scss', 'resources/scss/nav.scss', 'resources/scss/header.scss', 'resources/css/perusahaan.scss', 'resources/scss/about.scss',  'resources/scss/event.scss',  'resources/scss/sponsors.scss', 'resources/scss/support.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
