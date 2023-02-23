/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,js}", "*.{components/html,js}", "*.{components/html,js}"],
  theme: {
    extend: {
      colors: {
        "codebyters-primary": "#0c4646",
        "codebyters-secondary": "#3fb9b9",
      },
    },
  },
  plugins: [],
};
