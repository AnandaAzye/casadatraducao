const mix = require('laravel-mix');
let minifier = require('minifier');
const compress_images = require('compress-images');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').sass('resources/scss/pages/home/index.scss', 'public/css/home');


mix.then(() => {
    minifier.minify('public/css/home/index.css')
 })

compress_images('resources/img/**/*.{jpg,JPG,jpeg,JPEG,gif,png,svg}', 'public/img/', {compress_force: false, statistic: true, autoupdate: true}, false,
                                            {jpg: {engine: 'webp', command: false}},
                                            {png: {engine: 'png', command: false}},
                                            {svg: {engine: 'svgo', command: false}},
                                            {gif: {engine: 'gifsicle', command: ['--colors', '64', '--use-col=web']}}, function(){
      compress_images('resources/img/**/*.{jpg,JPG,jpeg,JPEG}', 'public/img/', {compress_force: false, statistic: true, autoupdate: false}, false,
                                                      {jpg: {engine: 'jpegtran', command: ['-trim', '-progressive', '-copy', 'none', '-optimize']}},
                                                      {png: {engine: false, command: false}},
                                                      {svg: {engine: false, command: false}},
                                                      {gif: {engine: false, command: false}}, function(){
            compress_images('resources/img/**/*.{jpg,JPG,jpeg,JPEG}', 'public/img/', {compress_force: false, statistic: true, autoupdate: false}, false,
                                                            {jpg: {engine: 'mozjpeg', command: ['-quality', '75']}},
                                                            {png: {engine: false, command: false}},
                                                            {svg: {engine: false, command: false}},
                                                            {gif: {engine: false, command: false}}, function(){
                  compress_images('resources/img/**/*.png', 'public/img/', {compress_force: false, statistic: true, autoupdate: false}, false,
                                                                  {jpg: {engine: false, command: false}},
                                                                  {png: {engine: 'pngquant', command: ['--quality=30-60', '-o']}},
                                                                  {svg: {engine: false, command: false}},
                                                                  {gif: {engine: false, command: false}}, function(){
                  });
            });
      });
      //-------------------------------------------------
});