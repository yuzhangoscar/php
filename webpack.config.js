// webpack.config.js
const path = require('path');

module.exports = {
  entry: './src/js/index.js',
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
    path: path.resolve(__dirname, 'dist'),
  },
  devtool: 'source-map'
};

