let mix = require("laravel-mix");
require("mix-tailwindcss");

// Check if mix.json exists and retrieve proxy
let proxy = "";
try {
  const fs = require("fs");
  if (fs.existsSync("./mix.json")) {
    var config = require("./mix.json");
    proxy = config.proxy;
  }
} catch (e) {
  console.error(e);
  proxy = "http://localhost:8000/";
}

// Global options
mix.setPublicPath("./assets");
mix.setResourceRoot("./assets");
mix.disableSuccessNotifications();
mix.options({
  autoprefixer: true,
  postCss: [require("postcss-custom-properties")], // for Opera/IE - https://caniuse.com/?search=css%20custom%20properties
  processCssUrls: false,
});

// Browsersync options
// https://browsersync.io/docs/options
mix.browserSync({
  proxy: proxy,
  files: [
    `./**/*.php`,
    `./**/*.scss`,
    `./**/*.js`,
    `./**/*.yml`,
    `./resources/js/**/*.js`,
  ],
});

// Dynamic options
if (process.env.NODE_ENV == "production") {
  mix.version();
} else {
  mix.version();
  mix.sourceMaps();
}

// Compile assets
mix.js("assets/js/app.js", "assets");
mix.sass(`assets/scss/style.scss`, `assets`).tailwind();
