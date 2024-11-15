/** @type {import('tailwindcss').Config} */


const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/components/*.vue',
    ],
  theme: {
    extend: {
      fontFamily: {
          'sans': ['Inter', 'sans-serif'],
          'icon':['Material Symbols Outlined']
      },
      fontSize:{
          xxs:'11px'
      },
      boxShadow:{
        'ai':'0px 0px 15px rgba(141, 152, 159, 0.4);',
        'box':'0px 10px 10px -5px rgba(0, 0, 0, 0.04), 0px 20px 25px -5px rgba(0, 0, 0, 0.10)'
      },
      backgroundImage:{
        'body':'linear-gradient(202deg, #702879 0%, #FF6201 100%)',
        'gradient1': 'linear-gradient(-140deg, #702879 0%, #FF6201 100%);',
        'gradient1mobile': 'linear-gradient(-140deg, #702879 50%, #ac4148 100%);',
        'gradient2': 'linear-gradient(90deg, #702879 0%, #FF6201 100%);',
        'gradient2hover': 'linear-gradient(90deg, #702879 0%, #702879 100%);',
        'gradient3': 'linear-gradient(0deg, #702879 0%, #FF6201 100%);',
        'gradient4': 'linear-gradient(0deg, #702879 0%, #ac4148 100%);',
        'gradient5': 'linear-gradient(-140deg, #702879 50%, #ac4148 100%);',
        'gradient6': 'linear-gradient(30deg, #702879CC 50%, #FF6201CC 100%);',
        'gradient7': 'linear-gradient(180deg, #FF6201 0%, #F6BD3E 100%)',
        'box-dashboard': 'linear-gradient(0deg, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0.25) 100%)'
      }
    },
  },
  plugins: [
    require('tailwindcss-animated'),
    require('@tailwindcss/forms')
  ],
}