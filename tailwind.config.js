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

/**
 * Allow to add custom plugins
 * @link https://tailwindcss.com/docs/plugins
 */
const plugin = require("tailwindcss/plugin");

module.exports = {
  content: fastGlob.sync([
    "./**/*.php",
    "./assets/**/*.js",
    "./assets/**/*.css",
  ]),
  theme: {
    extend: {
      fontFamily: {
        sans: ["Work Sans", "Helvetica", ...defaultTheme.fontFamily.sans],
        serif: ["Crimson Pro", ...defaultTheme.fontFamily.serif],
        /* mono: ["Jetbrains Mono", ...defaultTheme.fontFamily.mono], */
      },
    },
  },
  variants: {},
  plugins: [
    plugin(function ({ addVariant }) {
      addVariant("hocus", ["&:hover", "&:focus"]);
      addVariant("group-hocus", [".group:hover &", ".group:focus &"]);
    }),
  ],
  corePlugins: {
    preflight: true,
    container: true,
  },
};
