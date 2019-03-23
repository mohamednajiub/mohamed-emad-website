const path = require('path');
module.exports = {
    mode: "development",
    entry: "./src/index.js",
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [{
            test: /\.s[ac]ss$/,
            use: [{
                loader: "style-loader"
            }, {
                loader: "css-loader"
            }, {
                loader: "sass-loader",
            }]
        }, ]
    }
}