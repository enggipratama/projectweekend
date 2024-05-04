/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      'base': '#D5CCC1',
      
    },
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
}
