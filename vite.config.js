import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import basicSsl from '@vitejs/plugin-basic-ssl';
// import cors from "cors";
import fs from 'fs';


export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                compilerOptions: {
                    isCustomElement: (tag) => ['Tags'].includes(tag),
                }
            },
        }),
        basicSsl(),
    ],
    server: {
        // port: 3000,
        http: true,
        hmr: {
            host: 'localhost',
            // port: 3001,
            protocol: 'wss',
            origin: false,
        },
            // key: fs.readFileSync(`C:/laragon/etc/ssl/laragon.key`),
            // cert: fs.readFileSync(`C:/laragon/etc/ssl/laragon.crt`),
    },
    resolve: {
        preserveSymlinks: true,
        server: {
            // https: true,
            origin: 'localhost'

        },
        cors: true,

    },
});

