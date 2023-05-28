const theme = require("./theme.json");
const streamwind = require("streamwind-package");
const colorOptions = require("./options/color-options.json");

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./*.php",
    "./**/*.php",
    "./resources/css/*.css",
    "./resources/js/*.js",
    "./safelist.txt",
  ],
  theme: {
    extend: {
      colors: streamwind.colorMapper(
        streamwind.theme("settings.color.palette", theme),
        colorOptions
      ),
    },
    container: {
      padding: {
        DEFAULT: "1rem",
      },
      center: true,
    },
    screens: {
      xs: "480px",
      sm: "600px",
      md: "782px",
      lg: "960px",
      xl: "1280px",
      "2xl": "1440px",
    },
  },
};
