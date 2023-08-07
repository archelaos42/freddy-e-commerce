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
                compilerOptions: {
                    isCustomElement: (tag) => ['Tags'].includes(tag),
                }
            //     transformAssetUrls: {
            //         base: null,
            //         includeAbsolute: false,
            //     },
            },
        }),
        basicSsl(),
    ],
    server: {
        // port: 3000,
        // https: true,
        hmr: {
            host: 'localhost',
            // port: 3001,
            protocol: 'wss',
            origin: false,
        },
            key: fs.readFileSync(`C:/laragon/etc/ssl/laragon.key`),
            cert: fs.readFileSync(`C:/laragon/etc/ssl/laragon.crt`),},
    resolve: {
        preserveSymlinks: true,
        server: {
            https: true,
            origin: 'localhost'

        },
        cors: true,

    },

    // server: {
    //     port: 8080,
    //     https: true,
    //     hmr: {
    //         host: 'localhost',
    //     },
    // },
    // server: {
    //     // https:true,
    //     host:true,
    //     // host,
    //     // host,
    //     changeOrigin: true,
    //     // origin: false,
    //     origin: 'localhost:5173',
    //     hmr: { host: 'localhost' },
    //     https: {
    //     key: fs.readFileSync(`C:/laragon/etc/ssl/laragon.key`),
    //     cert: fs.readFileSync(`C:/laragon/etc/ssl/laragon.crt`),
    //     },
    // },
    // cors: true,
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
