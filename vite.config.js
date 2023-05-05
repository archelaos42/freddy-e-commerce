import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import basicSsl from '@vitejs/plugin-basic-ssl';
// import cors from "cors";
import fs from 'fs';

const host = 'freddyshop.test';


export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        // module.exports = {
        //     devServer: {
        //         host: 'freddyshop.test',
        //         https: true,
        //         key: fs.readFileSync('.certs/key.pem'),
        //         cert: fs.readFileSync('.certs/cert.pem'),
        //     }
        // },
        vue({
            template: {
                // transformAssetUrls: {
                //     base: null,
                //     includeAbsolute: false,
                // },
            },
        }),
        basicSsl(),
    ],
    server: {
        https:true,
        host:'localhost',
        // host,
        // hmr: { host },
        // https: {
        // key: fs.readFileSync(`C:/laragon/etc/ssl/laragon.key`),
        // cert: fs.readFileSync(`C:/laragon/etc/ssl/laragon.crt`),
        // key: fs.readFileSync(`/path/to/${host}.key`),
        // cert: fs.readFileSync(`/path/to/${host}.crt`),
        // },
    },
    cors: true,
});


// server: {
//     // host,
//     // hmr: { host },
//     // https: {
//     //     key: fs.readFileSync(`/path/to/${host}.key`),
//     //     cert: fs.readFileSync(`/path/to/${host}.crt`),
//     // }
//     // // https: true,
//     // // host: 'localhost'
//
// },
// // configureServer: ({ app }) => {
// //     app.use(cors({ origin: '*' }));
// resolve: {
//     // preserveSymlinks: true,
//     server: {
//         // https: true,
//         // origin: 'localhost'
//
//     },
//     cors: true,
//
// },
