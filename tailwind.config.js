/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    fontFamily: {
      raleway: ["Raleway", "sans-serif"],
      roboto: ["Roboto", "sans-serif"],
    },
    extend: {},

  },
  plugins: [require('flowbite/plugin')

  ],
}

