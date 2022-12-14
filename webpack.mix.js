const mix = require('laravel-mix');
mix.options({
    postCss: [
      require('autoprefixer')
    ],
    processCssUrls: false
  });
  mix.js('resources/js/main.js', 'public/js')
  .sass('resources/scss/admin/admin.scss' , 'public/admin/css')
  .sass('resources/scss/style.scss' , 'public/css')
.sass('resources/scss/app.scss' , 'public/css')
  .browserSync('http://localhost/dimro-islam');
