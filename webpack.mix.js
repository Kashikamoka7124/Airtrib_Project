const mix = require('laravel-mix')

require('laravel-mix-tailwind')
require('laravel-mix-purgecss')

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.sass', 'public/css')
    .tailwind('tailwind.config.js')
    .purgeCss({
        extensions: ['html', 'js', 'jsx', 'ts', 'tsx', 'php', 'vue', 'svg'],
        // folders: [
        //     'resources',
        //     // {{ packages }}
        // ]
    })
    .disableNotifications()
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.tsx?$/,
                    loader: "ts-loader",
                    options: { appendTsSuffixTo: [/\.vue$/] },
                    exclude: /node_modules/
                }
            ]
        },
        resolve: {
            extensions: ["*", ".js", ".jsx", ".vue", ".ts", ".tsx"],
            alias: {
                '@': path.resolve(__dirname, 'resources/js'),
                'Component': path.resolve(__dirname, 'resources/js/components'),
                'Page': path.resolve(__dirname, 'resources/js/pages'),
                'Store': path.resolve(__dirname, 'resources/js/stores'),
                'Use': path.resolve(__dirname, 'resources/js/uses'),
                'Util': path.resolve(__dirname, 'resources/js/util'),
            }
        }
    })
    .override(config => {
        config.module.rules.find(rule =>
            rule.test.test('.svg')
        ).exclude = /\.svg$/

        config.module.rules.push({
            test: /\.svg$/,
            use: [{ loader: 'html-loader' }]
        })
    })

if (mix.inProduction()) {
    mix.version()
}
