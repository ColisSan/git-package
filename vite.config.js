import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'src/resources/css/app.css',
                'src/resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        assetsDir: '',
        outDir: 'src/public',
        rollupOptions: {
            input: ['src/resources/js/app.js'],
            output: {
                entryFileNames: '[name].js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            },
        },
    },
    resolve: { 
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});