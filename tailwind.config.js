/**
 * Use fast-glob
 * @link https://stackoverflow.com/questions/71160737/tailwind-laravelmix-infinity-loop-on-watch
 */
import fastGlob from "fast-glob";

/**
 * Referencing the default theme
 * @link https://tailwindcss.com/docs/theme#referencing-the-default-theme
 */
import defaultTheme from "tailwindcss/defaultTheme";

/**
 * Allow to add custom plugins
 * @link https://tailwindcss.com/docs/plugins
 */
import plugin from "tailwindcss/plugin";

module.exports = {
  content: fastGlob.sync([
    "./app/**/*.php",
    "./resources/**/*.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
    "./storage/content/**/*.txt",
  ]),
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter", "Helvetica", ...defaultTheme.fontFamily.sans],
        /* serif: ["Crimson Pro", ...defaultTheme.fontFamily.serif], */
        /* mono: ["Jetbrains Mono", ...defaultTheme.fontFamily.mono], */
      },
      screens: {
        xs: "576px",
        sm: "640px",
        md: "768px",
        xmd: "896px",
        lg: "1024px",
        xl: "1280px",
        xxl: "1440px",
        "2xl": "1536px",
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
