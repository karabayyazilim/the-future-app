const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'media',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
        },
        container: {
          center: true,
          screens: {
              sm: '600px',
              md: '728px',
              lg: '984px',
              xl: '1240px',
          },
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'tx-dark': '#d7d7d7',
                'tx-white': '#3f3cbb',
                'card-white': '#c9c6c6',
                'card-dark': '#17191d',
                'back-dark': '#000000',
                'back-white': '#ffffff',
                'button-bg': '#5046e4',
                'bg-border': '#b2b2b2'
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
