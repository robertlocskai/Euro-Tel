/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/views/*",
    "./resources/js/*",
    "./resources/css/*"
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
        'secondaryDarker': '#002b69',
        'secondaryLighter': '#2864BC'
      },
      backgroundImage: {
        'headerImg': "url('/public/images/headerImg1.jpg')",
        'casesBg': "url('/public/images/casesBg2.png')",
      },
      fontSize: {
        '7nhalf': '5.1rem'
      },
      keyframes: {
        'open-menu': { 
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0)' },
        }
      },
      animations: {
        'openmenu': 'open-menu 0.5s ease-in-out forwards'
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

