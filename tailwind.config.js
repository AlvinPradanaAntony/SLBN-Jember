import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import theme from "tailwindcss/defaultTheme";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Figtree", ...defaultTheme.fontFamily.sans],
        secondary: ["Poppins", "sans-serif"],
        logo: ["Filson", "sans-serif"],
      },
      fontSize: {
        "2xs": ".625rem",
      },
    },
  },

  plugins: [forms, require("daisyui")],
  darkMode: "class",
  daisyui: {
    themes: [
      {
        light: {
          "primary": colors.blue[600],
          "primary-content": colors.white,
          "secondary": colors.purple[600],
          "secondary-content": colors.white,
          "accent": colors.green[500],
          "accent-content": colors.white,
          "neutral": colors.gray[700],
          "neutral-content": colors.white,
          "base-100": colors.white,
          "base-200": colors.gray[100],
          "base-300": colors.gray[200],
          "base-content": colors.gray[800],
          "info": colors.blue[500],
          "info-content": colors.white,
          "success": colors.green[500],
          "success-content": colors.white,
          "warning": colors.yellow[500],
          "warning-content": colors.white,
          "error": colors.red[500],
          "error-content": colors.white,
        },
        dark: {
          "primary": colors.blue[700],
          "primary-content": colors.white,
          "secondary": colors.purple[700],
          "secondary-content": colors.white,
          "accent": colors.green[600],
          "accent-content": colors.white,
          "neutral": colors.gray[800],
          "neutral-content": colors.white,
          "base-100": colors.gray[900],
          "base-200": colors.gray[800],
          "base-300": colors.gray[700],
          "base-content": colors.gray[100],
          "info": colors.blue[600],
          "info-content": colors.white,
          "success": colors.green[600],
          "success-content": colors.white,
          "warning": colors.yellow[600],
          "warning-content": colors.white,
          "error": colors.red[600],
          "error-content": colors.white,
        },
      },
    ],
  },
};
