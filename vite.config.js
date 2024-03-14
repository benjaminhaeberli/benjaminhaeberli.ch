import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: ["assets/css/app.css", "assets/js/app.js"],
      refresh: ["site/templates/**", "site/snippets/**", "site/models/**"],
    }),
  ],
});
