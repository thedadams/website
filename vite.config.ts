import {fileURLToPath, URL} from "url"

import {defineConfig} from "vite"
import vue from "@vitejs/plugin-vue"
import {resolve} from "path"

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [vue()],
    resolve: {
        alias: {
            "@": fileURLToPath(new URL("./src", import.meta.url)),
        },
    },
    server: {
        open: "/home.html",
        port: 3000,
    },
    root: ".",
    build: {
        rollupOptions: {
            input: {
                app: resolve(__dirname, "home.html"),
                "home.html": resolve(__dirname, "home.html"),
                "about.html": resolve(__dirname, "about.html"),
                "basketball.html": resolve(__dirname, "basketball.html"),
                "blog.html": resolve(__dirname, "blog.html"),
                "contrastdots.html": resolve(__dirname, "contrastdots.html"),
                "credits.html": resolve(__dirname, "credits.html"),
                "links.html": resolve(__dirname, "links.html"),
                "minimal.html": resolve(__dirname, "minimal.html"),
                "pastprojects.html": resolve(__dirname, "pastprojects.html"),
                "projects.html": resolve(__dirname, "projects.html"),
                "research.html": resolve(__dirname, "research.html"),
                "verticaldials.html": resolve(__dirname, "verticaldials.html"),
                "watchfaces.html": resolve(__dirname, "watchfaces.html"),
                "uses.html": resolve(__dirname, "uses.html")
            },
        },
    },
})
