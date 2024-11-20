import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "main.js": path.resolve(
                __dirname,
                "public/front/assets/js/main.js"
            ),
            "app.css": path.resolve(__dirname, "resources/css/app.css"),
        },
    },
    optimizeDeps: {
        include: ["main.js", "app.css"],
    },
});
