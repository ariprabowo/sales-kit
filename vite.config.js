// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import vue from '@vitejs/plugin-vue'
import tailwindcss from 'tailwindcss'
import fs from 'fs';
import dotenv from 'dotenv';

dotenv.config();

export default defineConfig({
    server: {
      https: {
        key: fs.readFileSync(process.env.VITE_SSL_KEY),
        cert: fs.readFileSync(process.env.VITE_SSL_CERT)
      },
      proxy: {
        // Match requests starting with '/resources/' (adjust as needed)
        '/resources/': {
          target: 'https://aionsales.id:5173', // Target URL
          changeOrigin: true, // Optional: Change origin to match development server
          secure: false, // Optional: Disable if target doesn't use HTTPS
        },
      },
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