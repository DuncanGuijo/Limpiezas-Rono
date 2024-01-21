/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Layout  
    "./*.{html,js,php}"
  ],
  theme: {
    extend: {
      colors: {
        custom: '#00aece',
        rono: "rgb(0,104, 158)"
      },
      margin: {
        '-px4': '-4px',
        '-400': '400px'
      },
      fontFamily: {
        'bebas-neue': ['"Bebas Neue"', 'sans-serif'],
        'montserrat': ['"Montserrat"', 'sans-serif'],
        'oswald': ['"Oswald"','sans-serif'],
        'oleo': ["'Oleo Script'", 'sans-serif']
      },
    },
  },
  plugins: [],
}


//  npx tailwindcss -i ./public/css/styles.css -o ./public/css/tailwind.css

