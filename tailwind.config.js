/**
 * Use fast-glob
 * @link https://stackoverflow.com/questions/71160737/tailwind-laravelmix-infinity-loop-on-watch
 */
const fastGlob = require("fast-glob");

module.exports = {
  content: fastGlob.sync([
    "./**/*.php",
    "./assets/**/*.js",
    "./assets/**/*.css",
  ]),
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  /* corePlugins: {
    preflight: false,
    container: false,
  }, */
};
