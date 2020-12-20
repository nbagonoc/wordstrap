const path = require('path');
const extract = require('mini-css-extract-plugin');

module.exports = {
    entry: './app.js',
    output: {
        path: path.resolve(__dirname, 'css'),
        publicPath: ''
    },
    plugins: [
        new extract({filename: 'custom.css'})
    ],
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    extract.loader,
                    'css-loader',
                    'sass-loader',
                ]
            },
            {
                test: /\.(jpg|jpeg|png|gif|svg)$/,
                loader: 'file-loader',
                options: {
                    outputPath: '../img',
                },
            }
        ]
    }
}