/**
 * Use fast-glob
 * @link https://stackoverflow.com/questions/71160737/tailwind-laravelmix-infinity-loop-on-watch
 */
const fastGlob = require("fast-glob");

/**
 * Referencing the default theme
 * @link https://tailwindcss.com/docs/theme#referencing-the-default-theme
 */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: fastGlob.sync([
    "./**/*.php",
    "./assets/**/*.js",
    "./assets/**/*.css",
  ]),
  theme: {
    extend: {
      fontFamily: {
        sans: ["Jost", ...defaultTheme.fontFamily.sans],
        display: ["Wotfard", ...defaultTheme.fontFamily.sans],
        /* mono: ["Jetbrains Mono", ...defaultTheme.fontFamily.mono], */
      },
    },
  },
  variants: {},
  plugins: [],
  corePlugins: {
    preflight: true,
    container: true,
  },
};
