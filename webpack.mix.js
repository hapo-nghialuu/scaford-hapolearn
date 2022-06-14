const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/assets/images', 'public/images')
    .copy('resources/assets/fonts', 'public/fonts');
