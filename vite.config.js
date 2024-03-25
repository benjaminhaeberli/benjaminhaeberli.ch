import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { fileURLToPath, URL } from "url";

export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: [
        "app/**/*.php",
        "resources/**/*.php",
        "resources/**/*.js",
        "resources/**/*.css",
        "./storage/content/**/*.txt",
      ],
    }),
  ],
  resolve: {
    alias: {
      "@": fileURLToPath(new URL("./public/", import.meta.url)),
    },
  },
  server: {
    host: "benjaminhaeberli.test",
  },
});
