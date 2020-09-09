const mix = require('laravel-mix')

require('laravel-mix-purgecss')

mix.postCss('style.css', 'public')
    .purgeCss({
        folders: {{ folders }}
    })
    .copy('public/style.css', '../public/vendor/laranext')
    .setPublicPath('public')
    .disableNotifications()
