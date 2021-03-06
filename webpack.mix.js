let mix = require('laravel-mix');

// process.env.NODE_ENV = 'production';

module.exports = {
    // https://webpack.js.org/configuration/entry-context/
    entry: 'resources/assets/js/app.js',

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

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/chosen.js', 'public/js')
   .sass('resources/assets/sass/bootstrap.scss', 'public/css');
