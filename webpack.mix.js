let mix = require('laravel-mix');

mix.sass('src/master.scss', 'dist/css/').options({
  processCssUrls: false
});
