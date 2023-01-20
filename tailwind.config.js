/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './node_modules/tw-elements/dist/js/**/*.js'
  ],
  theme: {
    extend: {
      container: {
        center:true,
      },
    },
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
