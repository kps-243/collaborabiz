/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {
      fontFamily: {
        "ibm-reg":["ibm_plex_sansregular"], "ibm-bold": ["ibm_plex_sansbold"],
        "ibm-med": ["ibm_plex_sansmedium"],
      },
      colors: {
        red: '#E42528',
        blue: {
          ...colors.blue,
          100: '#0040ff',
        },
      },
      fontSize: {
        'base': ['1rem', '1.313rem'], //16px / 21px
        'sm': ['0.875rem', '1.125rem'] , //14px / 18xpx
        'lg': ['1.125rem', '1.438rem'], //18px / 23px
        '2xl': ['1.75rem', '2rem'], //28px / 32px
        '3xl': ['2rem', '2.625rem'], //32px / 42px
        '4xl': ['2.25rem', '2.625rem'], //36px / 42px
      },
    },
  },
  plugins: [],
}

