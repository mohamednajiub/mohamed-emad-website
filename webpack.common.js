const path = require('path');
var HtmlWebpackPlugin = require('html-webpack-plugin')
module.exports = {
    entry: "./src/index.js",
    plugins:[
        new HtmlWebpackPlugin({
            template: './src/index.html'
        })
    ],
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/,
                use: [
                    "style-loader",
                    "css-loader",
                    "sass-loader"
                ]
            },
        ]
    }
}