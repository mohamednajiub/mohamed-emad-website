const path = require('path');
common = require('./webpack.common'),
merge =  require('webpack-merge'),
CleanWebpackPlugin = require('clean-webpack-plugin'),
MiniCssExtractPlugin = require('mini-css-extract-plugin'),
OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin'),
TerserPlugin = require('terser-webpack-plugin'),
HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = merge(common, {
    mode: "production",
    entry: "./src/index.js",
    output: {
        filename: 'main.[contentHash].js',
        path: path.resolve(__dirname, 'dist')
    },
    optimization: {
        minimizer: [
            new OptimizeCssAssetsPlugin(),
            new TerserPlugin(),
            new HtmlWebpackPlugin({
                template: './src/index.html',
                minify: {
                    removeAttributeQuotes: true,
                    collapseWhitespace: true,
                    removeComments: true
                  }
            })
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({filename: '[name].[contentHash].css'}),
        new CleanWebpackPlugin()
    ],
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/,
                use: [
                    MiniCssExtractPlugin.loader, // 3.extract css into files
                    "css-loader", // 2.turns css into common js
                    "sass-loader" // 1. turns sass into css
                ]
            },
        ]
    }
});