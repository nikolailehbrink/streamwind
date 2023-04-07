const theme = require("./theme.json");

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
    container: {
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "0rem",
      },
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
