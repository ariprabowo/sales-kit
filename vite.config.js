// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import vue from '@vitejs/plugin-vue'
import tailwindcss from 'tailwindcss'
import dotenv from 'dotenv';

export default defineConfig({
    server: {
      https: {
        key: fs.readFileSync(process.env.VITE_SSL_KEY),
        cert: fs.readFileSync(process.env.VITE_SSL_CERT)
      },
      proxy: {
        '/resources': process.env.VITE_DEV_SERVER_URL
      }
    },
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