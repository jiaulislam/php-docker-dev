const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  mode: "development",
  devtool: false,
  entry: "./src/js/main.js",
  output: {
    filename: "js/main.js",
    path: path.resolve(__dirname, "dist"),
  },
  plugins: [
    new MiniCssExtractPlugin({
      linkType: "text/css",
      filename: "css/styles.css"
    }),
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
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
    ],
  },
};
