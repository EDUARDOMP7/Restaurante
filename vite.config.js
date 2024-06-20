// vite.config.js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    css: {
        postcss: {
            plugins: [tailwindcss, autoprefixer],
        },
    },
});
