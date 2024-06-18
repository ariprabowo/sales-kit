// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import vue from '@vitejs/plugin-vue'
import tailwindcss from 'tailwindcss'

export default defineConfig({
    plugins: [

        vue(),

        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

        tailwindcss()
    ],
    css: {
        modules: {
          generateScopedCSS: true,
        },
      },
      resolve: {
        alias: {
          '@': resolve(__dirname, 'resources'),
        },
      },
});