import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    server: {
    host: '0.0.0.0',
    origin: 'http://vrom-live.test:5173',
    cors: true,
    hmr: {
      host: 'vrom-live.test',
    },
  },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/front.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
