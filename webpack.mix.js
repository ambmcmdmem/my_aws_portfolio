const mix = require('laravel-mix');

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

const cssPath = 'public/css';
const jsPath = 'public/js';

const fromTsToPublicJsArr = [
    'resources/ts/app.tsx',
    'resources/ts/common.ts'
];

mix.js('resources/js/app.js', jsPath)
    // .ts('resources/ts/app.tsx', 'public/js')
    // .ts('resources/ts/common.ts', 'public/js')
    .ts(fromTsToPublicJsArr, jsPath)
    .ts('resources/ts/productions/production.ts', jsPath + '/productions')
    .ts('resources/ts/productions/search/search.tsx', jsPath + '/productions/search')
    .ts('resources/ts/productions/chat/chat.tsx', jsPath + '/productions/chat')
    .react()
    .sass('resources/sass/app.scss', cssPath);

if (mix.inProduction()){
    mix.version();
}