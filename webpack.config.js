// webpack.config.js
const path = require('path');

module.exports = {
  entry:  path.resolve(__dirname, 'www', 'js', 'index.js'),
  module: {
    rules: [
      {
        test: /\.php$/,
        use: 'php-loader',
      },
    ],
  },
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'www', 'dist'),
  },
  devtool: 'source-map'
};

