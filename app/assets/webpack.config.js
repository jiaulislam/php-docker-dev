const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = {
  mode: "development",
  devtool: false,
  entry: "./src/js/main.js",
  output: {
    filename: "js/main.js",
    path: path.resolve(__dirname, "dist"),
    hotUpdateChunkFilename: 'hot/hot-update.js',
    hotUpdateMainFilename: 'hot/hot-update.json'
  },
  plugins: [
    new MiniCssExtractPlugin({
      linkType: "text/css",
      filename: "css/styles.css"
    }),
    new HtmlWebpackPlugin({
      template: path.join(__dirname, '/src/index.php'), 
      chunks: ['index'],
      filename: 'index.php',
    })
  ],
  devServer: {
    host: '127.0.0.1',
    static: {
      directory: path.join(__dirname, '../'),
    },
    compress: true,
    port: 8080,

    proxy: {
      '*' : {
        target: `http://127.0.0.1/`
      }
    },
    devMiddleware: {
      publicPath: path.resolve(__dirname, '../'),
      serverSideRender: true,
      writeToDisk: true,
    },
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          { loader: MiniCssExtractPlugin.loader },
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: () => [require("autoprefixer")],
              },
            },
          },
          {
            loader: "sass-loader",
          },
        ],
      },
      // {
      //   test: /\.(eot|otf|ttf|woff|woff2)(\?.*)?$/,
      //   use: {
      //     loader: 'file-loader',
      //     options: {
      //       outputPath: 'fonts',
      //       name: '[name].[ext]',
      //     },
      //   },
      // },
    ],
  },
};
