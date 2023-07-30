/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/views/index.blade.php",
    "./resources/js/app.js",
    "./resources/css/app.css"
    //"./resources/**/*.vue",
  ],
  theme: {
    extend: {
      height: {
        'header': '45rem',
        'casesSection': '50rem'
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'secondary': '#023F98',
        'secondaryDarker': '#002b69'
      },
      backgroundImage: {
        'headerImg': "url('/public/images/headerImg1.jpg')",
        'casesBg': "url('/public/images/beams.jpg')",
      },
      fontSize: {
        '7nhalf': '5.1rem'
      }
    },
    fontFamily: {
      'sans': "Poppins",
      'serif': "Poppins",
      'mono': "Poppins",
      'display': "Poppins",
      'body': "Poppins",
    }
  },
  plugins: [],
}

