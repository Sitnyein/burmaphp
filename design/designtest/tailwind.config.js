/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js}"],
  darkMode: "class",

  theme: {
    fontFamily: { 'serif': ['Young Serif', 'serif'], 'cursive': ['Satisfy', 'cursive'] },

    extend: {
     
      colors: {
        
        'info' : ' #0dcaf0',
        'danger': '#dc3545',
        'warning': '#ffc107',
        brown: {
          50: '#fdf8f6',
          100: '#f2e8e5',
          200: '#eaddd7',
          300: '#e0cec7',
          400: '#d2bab0',
          500: '#bfa094',
          600: '#a18072',
          700: '#977669',
          800: '#846358',
          900: '#43302b',
        },
        primary: {
          100: "#dad5fd",
          200: "#b6acfc",
          300: "#9182fa",
          400: "#6d59f9",
          500: "#482ff7",
          600: "#3a26c6",
          700: "#2b1c94",
          800: "#1d1363",
          900: "#0e0931",
        },
        purple: {
          100: "#ede2f3",
          200: "#dbc4e6",
          300: "#c9a7da",
          400: "#b789cd",
          500: "#a56cc1",
          600: "#84569a",
          700: "#634174",
          800: "#422b4d",
          900: "#211627"
},
      }
    },
  },
  plugins: [],
}





