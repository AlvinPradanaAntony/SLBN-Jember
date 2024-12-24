import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import theme from 'tailwindcss/defaultTheme';
import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors');
export default {
  content: ['./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', './storage/framework/views/*.php', './resources/views/**/*.blade.php'],

  theme: {
    extend: {
      animation: {
        'to-top': 'to-top 1s ease-in-out', // Nama dan durasi animasi
      },
      boxShadow: {
        circle: `0.9em 0 0 0 ${colors.red[500]}, 1.6em 0 0 0 ${colors.yellow[500]}, 2.3em 0 0 0 ${colors.green[500]}`,
      },
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        secondary: ['Poppins', 'sans-serif'],
        logo: ['Filson', 'sans-serif'],
      },
      fontSize: {
        '2xs': '.625rem',
      },
      keyframes: {
        'to-top': {
          '0%': {
            transform: 'translateY(20%)',
            opacity: '0',
          },
          '100%': {
            transform: 'translateY(0)',
            opacity: '1',
          },
        },
      },
    },
  },

  plugins: [forms, require('daisyui')],
  darkMode: ['selector', '[data-theme="dark"]'],
  daisyui: {
    themes: [
      {
        light: {
          primary: colors.blue[500],
          'primary-content': colors.white,
          secondary: colors.amber[500],
          'secondary-content': colors.white,
          accent: colors.green[500],
          'accent-content': colors.white,
          neutral: colors.gray[500],
          'neutral-content': colors.gray[400],
          'base-100': colors.white,
          'base-200': colors.gray[50],
          'base-300': colors.gray[200],
          'base-content': colors.gray[800],
          info: colors.blue[500],
          'info-content': colors.white,
          success: colors.green[500],
          'success-content': colors.white,
          warning: colors.yellow[500],
          'warning-content': colors.white,
          error: colors.red[500],
          'error-content': colors.white,
        },
        dark: {
          primary: colors.blue[500],
          'primary-content': colors.white,
          secondary: colors.amber[500],
          'secondary-content': colors.white,
          accent: colors.green[600],
          'accent-content': colors.white,
          neutral: colors.gray[400],
          'neutral-content': colors.gray[500],
          'base-100': colors.gray[900],
          'base-200': colors.gray[800],
          'base-300': colors.gray[700],
          'base-content': colors.gray[200],
          info: colors.blue[600],
          'info-content': colors.white,
          success: colors.green[600],
          'success-content': colors.white,
          warning: colors.yellow[600],
          'warning-content': colors.white,
          error: colors.red[600],
          'error-content': colors.white,
        },
      },
    ],
  },
};
