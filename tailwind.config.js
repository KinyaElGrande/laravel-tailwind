module.exports = {
  theme: {
    extend: {
      colors: {
        indigo: '#5c6ac4',
        blue: '#007ace',
        red: '#de3618',
      }
    }
  },
  variants: {},
  plugins: [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
  ]
}
