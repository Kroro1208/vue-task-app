const mix = require('laravel-mix');
const webpackConfig = require('./webpack.config');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.webpackConfig(webpackConfig);
