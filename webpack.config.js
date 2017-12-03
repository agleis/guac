'use strict';

const path = require('path');

module.exports = {
    // https://webpack.js.org/configuration/entry-context/
    entry: './resources/assets/js/ck5.js',

    // https://webpack.js.org/configuration/output/
    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: 'ck5.js'
    },

    module: {
        rules: [
            {
                // Or /ckeditor5-[^/]+\/theme\/icons\/[^/]+\.svg$/ if you want to limit this loader
                // to CKEditor 5's icons only.
                test: /\.svg$/,

                use: ['raw-loader']
            },
            {
                // Or /ckeditor5-[^/]+\/theme\/[^/]+\.scss$/ if you want to limit this loader
                // to CKEditor 5's theme only.
                test: /\.scss$/,

                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader'
                ]
            }
        ]
    },

    // Useful for debugging.
    devtool: 'source-map'
};