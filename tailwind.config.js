module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        primary:{
          600 : '#96B197',
          700 : '#85AB86',
          800 : '#74A074',
          900 : '#69926A'
        },
        secondary:{
          300 : '#FFD6E8',
          800 : '#D74F8A',
          900 : '#BA3670'
        }
      }
    },
  },
  plugins: [],
}