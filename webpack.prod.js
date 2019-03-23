const path = require('path');
common = require('./webpack.common'),
merge =  require('webpack-merge'),
cleanWebpackPlugin = require('clean-webpack-plugin'),
miniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = merge(common, {
    mode: "production",
    entry: "./src/index.js",
    output: {
        filename: 'main.[contentHash].js',
        path: path.resolve(__dirname, 'dist')
    },
    plugins: [
        new miniCssExtractPlugin({filename: '[name].[contentHash].css'}),
        new cleanWebpackPlugin()
    ],
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/,
                use: [
                    miniCssExtractPlugin.loader, // 3.extract css into files
                    "css-loader", // 2.turns css into common js
                    "sass-loader" // 1. turns sass into css
                ]
            },
        ]
    }
});