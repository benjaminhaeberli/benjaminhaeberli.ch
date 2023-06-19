// postcss.config.js
module.exports = {
  plugins: {
    "postcss-import": {},
    "tailwindcss/nesting": {},
    tailwindcss: {},
    autoprefixer: {},
    cssnano: {
      preset: require("cssnano-preset-default"),
    },
    "postcss-combine-duplicated-selectors": {
      removeDuplicatedValues: true,
    },
  },
};
