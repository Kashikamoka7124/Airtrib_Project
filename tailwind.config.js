module.exports = {
  theme: {
    container: {
      center: true,
      padding: '2rem',
    },

    spacing: {
      'logo': '7.750rem',
      1: '0.063rem',
      2: '0.125rem',
      3: '0.188rem',
      4: '0.250rem',
      5: '0.313rem',
      6: '0.375rem',
      7: '0.438rem',
      8: '0.500rem',
      9: '0.563rem',
      10: '0.625rem',
      11: '0.688rem',
      12: '0.750rem',
      13: '0.813rem',
      14: '0.875rem',
      15: '0.938rem',
      16: '1.000rem',
      17: '1.063rem',
      18: '1.125rem',
      19: '1.188rem',
      20: '1.250rem',
      21: '1.313rem',
      22: '1.375rem',
      23: '1.438rem',
      24: '1.500rem',
      25: '1.563rem',
      26: '1.625rem',
      27: '1.688rem',
      28: '1.750rem',
      29: '1.813rem',
      30: '1.875rem',
      31: '1.938rem',
      32: '2.000rem',
      33: '2.063rem',
      34: '2.125rem',
      35: '2.188rem',
      36: '2.250rem',
      37: '2.313rem',
      38: '2.375rem',
      39: '2.438rem',
      40: '2.500rem',
      41: '2.563rem',
      42: '2.625rem',
      43: '2.688rem',
      44: '2.750rem',
      45: '2.813rem',
      46: '2.875rem',
      47: '2.938rem',
      48: '3.000rem',
      49: '3.063rem',
      50: '3.125rem',
      51: '3.188rem',
      52: '3.250rem',
      53: '3.313rem',
      54: '3.375rem',
      55: '3.438rem',
      56: '3.500rem',
      57: '3.563rem',
      58: '3.625rem',
      59: '3.688rem',
      60: '3.750rem',
      61: '3.813rem',
      62: '3.875rem',
      63: '3.938rem',
      64: '4.000rem',
      65: '4.063rem',
      66: '4.125rem',
      67: '4.188rem',
      68: '4.250rem',
      69: '4.313rem',
      70: '4.375rem',
      71: '4.438rem',
      72: '4.500rem',
      73: '4.563rem',
      74: '4.625rem',
      75: '4.688rem',
      76: '4.750rem',
      77: '4.813rem',
      78: '4.875rem',
      79: '4.938rem',
      80: '5.000rem',
      81: '5.063rem',
      82: '5.125rem',
      83: '5.188rem',
      84: '5.250rem',
      85: '5.313rem',
      86: '5.375rem',
      87: '5.438rem',
      88: '5.500rem',
      89: '5.563rem',
      90: '5.625rem',
      91: '5.688rem',
      92: '5.750rem',
      93: '5.813rem',
      94: '5.875rem',
      95: '5.938rem',
      96: '6.000rem',
      97: '6.063rem',
      98: '6.125rem',
      99: '6.188rem',
      100: '6.250rem',
      101: '6.313rem',
      102: '6.375rem',
      103: '6.438rem',
      104: '6.500rem',
      105: '6.563rem',
      106: '6.625rem',
      107: '6.688rem',
      108: '6.750rem',
      109: '6.813rem',
      110: '6.875rem',
      111: '6.938rem',
      112: '7.000rem',
      120: '7.500rem',
      500: '500px'
    },

    // Extending tailwindcss default config.
    extend: {
      fontFamily: {
        playfair: ['Playfair Display', 'serif'],
        merriweather: ['Merriweather', 'serif'],
        roboto: ['Roboto Condensed', 'serif']
      },

      colors: {
        'primary': '#AB8A56',
        'primary-light': '#CEA472',
        'primary-dark': '#8C6C3C',
        'primary-darker': '#231C12',
        'primary-hover': 'red',
        'secondary': '#603B3F',
        'secondary-light': '#5E4A4A',
        'green': '#009245',
        'red': '#D81330',
        'white-90': 'rgba(255, 255, 255, .9)',
        'primary-dark-90': 'rgba(140, 108, 60, .9)',
      },

      fontSize: theme => ({
        ...theme('spacing')
      }),

      maxWidth: theme => ({
        ...theme('spacing'),
          '1/2': '50%',
          '1/3': '33.333333%',
          '2/3': '66.666667%',
          '1/4': '25%',
          '2/4': '50%',
          '3/4': '75%',
          '1/5': '20%',
          '2/5': '40%',
          '3/5': '60%',
          '4/5': '80%',
          '1/6': '16.666667%',
          '2/6': '33.333333%',
          '3/6': '50%',
          '4/6': '66.666667%',
          '5/6': '83.333333%',
          '1/12': '8.333333%',
          '2/12': '16.666667%',
          '3/12': '25%',
          '4/12': '33.333333%',
          '5/12': '41.666667%',
          '6/12': '50%',
          '7/12': '58.333333%',
          '8/12': '66.666667%',
          '9/12': '75%',
          '10/12': '83.333333%',
          '11/12': '91.666667%',
      }),

      maxHeight: theme => ({
        ...theme('spacing')
      }),

      zIndex: {
        '60': 60,
        '70': 70,
        '80': 80,
        '90': 90,
        '100': 100,
      },

      borderWidth: {
        '3': '3px'
      },

      opacity: {
        90: '.9',
        80: '.8',
        70: '.7',
      },

      lineHeight: {
        30: '1.875'
      }
    },

    customForms: theme => ({
      default: {
        'input, textarea, multiselect, select, checkbox, radio': {
          '&::placeholder': {
            color: theme('colors.primary-darker')
          },
          '&:focus': {
            outline: 'none',
            boxShadow: 'none',
            borderColor: 'currentColor',
          },
        },

        select: {
          // icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.9 10.82"><polyline points="15.6 1.3 8.26 8.93 1.3 1.3" style="fill:none;stroke:#ab8a56;stroke-linecap:round;stroke-miterlimit:10;stroke-width:2.592px"/></svg>',
          iconColor: theme('colors.primary'),
        },
        checkbox: {
          color: theme('colors.primary'),
          borderColor: theme('colors.primary'),
          icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.01 20.01"><path d="M15.88,19.52H4.13c-2.42,0-3.64-1.8-3.64-4v-11a3.81,3.81,0,0,1,3.64-4H15.88a3.82,3.82,0,0,1,3.64,4v11C19.52,17.72,18.29,19.52,15.88,19.52Z" fill="#fff" stroke="#cea472" stroke-miterlimit="10" stroke-width="0.98"/><path d="M13.1,14.71H6.9a1.83,1.83,0,0,1-1.92-2V7.29a2,2,0,0,1,1.92-2h6.2a2,2,0,0,1,1.92,2v5.43A1.83,1.83,0,0,1,13.1,14.71Z" fill="#cea472"/></svg>'
        },
        radio: {
          '&:checked': {
            backgroundColor: 'transparent',
          },
          color: theme('colors.primary'),
          borderColor: theme('colors.primary'),
          icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><circle cx="10" cy="10" r="9.5" fill="#fff" stroke="#cea472" stroke-miterlimit="10"/><circle cx="10" cy="10" r="4.75" fill="#cea472"/></svg>'
        },
      },

      primary: {
        'checkbox, radio': {
          backgroundColor: theme('colors.primary'),
          borderColor: theme('colors.primary-light'),
          opacity: '.9',
        },
        radio: {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><circle cx="10" cy="10" r="9.5" fill="#fff" stroke="#cea472" stroke-miterlimit="10"/><circle cx="10" cy="10" r="4.75" fill="#cea472"/></svg>`,
        }
      },

      sm: {
        'input, textarea, multiselect, select': {
          fontSize: theme('spacing.15'),
          padding: `${theme('spacing.4')} ${theme('spacing.12')}`,
        },
        select: {
          paddingRight: `${theme('spacing.32')}`,
        },
        'checkbox, radio': {
          width: theme('spacing.3'),
          height: theme('spacing.3'),
        },
      },

      lg: {
        'input, textarea, multiselect, select': {
          fontSize: '1.25rem',
          padding: '1rem 1rem',
        },
        select: {
          paddingRight: `${theme('spacing.4')}`,
        },
        'checkbox, radio': {
          width: theme('spacing.3'),
          height: theme('spacing.3'),
        },
      },

      border: {
        'input, textarea, multiselect, select': {
          borderColor: theme('colors.primary')
        }
      }
    })
  },

  variants: {
    borderWidth: ['responsive', 'hover', 'focus', 'first', 'last'],
    padding: ['responsive', 'hover', 'focus', 'first', 'last'],
    margin: ['responsive', 'hover', 'focus', 'first', 'last'],
  },

  plugins: [
    require('./resources/tailwind/custom-forms/src/index')
  ]
}
