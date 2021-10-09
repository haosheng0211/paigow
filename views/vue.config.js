module.exports = {
  devServer: {
    proxy: {
      '/api': {
        target: 'http://localhost'
      },
      '/storage': {
        target: 'http://localhost'
      }
    }
  },

  assetsDir: 'assets',
  outputDir: '../public',
  indexPath: '../resources/views/app.blade.php',

  transpileDependencies: [
    'vuetify'
  ]
}
