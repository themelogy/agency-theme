let mix = require('laravel-mix').mix;

const isProduction = process.env.NODE_ENV == "production" ? true : false;
const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'Themes/' + directory;
const dist   = 'public/themes/' + directory.toLowerCase();
const asset  = source + '/assets';
const resource_asset = source + '/resources/assets';

// Sass Generate
if( ! isProduction) {
    mix
        .sourceMaps(true, 'source-map')
        .webpackConfig({devtool: 'source-map'});
}

mix.copyDirectory(`${__dirname}/node_modules/font-awesome/fonts`, resource_asset + '/fonts');
mix.copy(`${__dirname}/node_modules/jquery/dist/jquery.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/bootstrap/dist/js/bootstrap.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/jquery.cookie/jquery.cookie.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/jquery.easing/jquery.easing.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/jquery-hoverintent/jquery.hoverIntent.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/superfish/dist/js/superfish.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/bootstrap-progressbar/bootstrap-progressbar.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/jquery.scrollbar/jquery.scrollbar.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/jquery.localscroll/jquery.localScroll.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/isotope-layout/dist/isotope.pkgd.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/flexslider/jquery.flexslider-min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/owl.carousel/dist/owl.carousel.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/photoswipe/dist/photoswipe.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/photoswipe/dist/photoswipe-ui-default.min.js`, resource_asset + '/js/vendor');
mix.copy(`node_modules/vue/dist/vue.min.js`, resource_asset + '/js/vendor');
mix.copy(`node_modules/axios/dist/axios.min.js`, resource_asset + '/js/vendor');
mix.copy(`${__dirname}/node_modules/vue-infinite-loading/dist/vue-infinite-loading.js`, resource_asset + '/js/vendor');

// Copy Directory to asset
mix.copyDirectory(resource_asset, dist);

mix.combine([
    resource_asset + '/js/vendor/jquery.min.js',
    resource_asset + '/js/vendor/bootstrap.min.js',
    resource_asset + '/js/vendor/bootstrap.affix.min.js',
    resource_asset + '/js/vendor/jquery.appear.min.js',
    resource_asset + '/js/vendor/jquery.cookie.js',
    resource_asset + '/js/vendor/jquery.easing.min.js',
    resource_asset + '/js/vendor/jquery.hoverIntent.js',
    resource_asset + '/js/vendor/superfish.min.js',
    resource_asset + '/js/vendor/bootstrap-progressbar.min.js',
    resource_asset + '/js/vendor/sji.min.js',
    resource_asset + '/js/vendor/abc.min.js',
    resource_asset + '/js/vendor/jquery.scroll.min.js',
    resource_asset + '/js/vendor/isotope.pkgd.min.js',
    resource_asset + '/js/vendor/jquery.flexslider-min.js',
    resource_asset + '/js/vendor/owl.carousel.min.js',
    resource_asset + '/js/vendor/photoswipe.min.js',
    resource_asset + '/js/vendor/photoswipe-ui-default.min.js',
    resource_asset + '/js/vendor/smooth-scroll.min.js'
], dist + '/js/vendor.min.js');

mix.minify(dist + '/js/main.js');

mix
    .sass(resource_asset + '/sass/main.scss', dist + '/css')
    .sass(resource_asset + '/sass/animations.scss', dist + '/css')
    .sass(`${__dirname}/node_modules/bootstrap/scss/bootstrap.scss`, dist + '/css')
    .sass(`${__dirname}/node_modules/font-awesome/scss/font-awesome.scss`, dist + '/css')
    .options({
        processCssUrls: false
    });


if ( isProduction )
{
    mix.version();
}

// Browser Sync
if( ! isProduction) {
    mix
        .browserSync(
        {
            proxy: 'agency.local',
            files: [source + '/**/*.*']
        }
    );
}