const colors = require('tailwindcss/colors')

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        brand: '#2563eb',
        secondary: '#e22d5d',
        gray: colors.slate
      },
      maxWidth: {
        content: '50rem',
      },
      fontFamily: {
        sans:  ['Plus Jakarta Sans', 'sans-serif'],
      },
      container: {
        center: true,
        screens: {
          sm: "600px",
          md: "728px",
          lg: "984px",
          xl: "1216px",
          "2xl": "1216px",
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
