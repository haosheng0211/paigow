module.exports = {
  devServer: {
    '/api': {
      target: 'http://localhost'
    },
    '/storage': {
      target: 'http://localhost'
    }
  },
  assetsDir: 'assets',
  outputDir: '../public',
  indexPath: '../resources/views/app.blade.php'
}
