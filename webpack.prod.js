const path = require('path');
common = require('./webpack.common'),
merge =  require('webpack-merge'),
cleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = merge(common, {
    mode: "production",
    entry: "./src/index.js",
    output: {
        filename: 'main.[contentHash].js',
        path: path.resolve(__dirname, 'dist')
    },
    plugins: [
        new cleanWebpackPlugin()
    ]
});