module.exports = {
  plugins: [
  	require('tailwindcss'),
  	require('cssnano'),
  	require('autoprefixer'),
  	require('gulp-postcss'),
  	require('postcss-simple-vars'),
  	require('postcss-nested'),
  	require('postcss-import'),
  ]
}