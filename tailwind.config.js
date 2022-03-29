const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                serif: ['Georgia', 'Cambria'],
                mono: ['SFMono-Regular', 'Menlo'],
                myriad: ['myriad-pro', 'sans-serif'],
                modak: ['Modak', 'cursive'],
                chicle: ['Chicle', 'cursive'],
            },
            backgroundImage: theme => ({
                'tie-dye': "url('/assets/tie-dye2.png')",
            }),
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
