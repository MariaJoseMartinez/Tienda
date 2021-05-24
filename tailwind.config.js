const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        //'./resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            heigth:{
                "5v":"5vh",
                "10v":"10vh",
                "15v":"15vh",
                "20v":"20vh",
                "25v":"25vh",
                "30v":"30vh",
                "35v":"35vh",
                "40v":"40vh",
                "45v":"45vh",
                "50v":"50vh",
                "55v":"55vh",
                "60v":"60vh",
                "65v":"65vh",
                "70v":"70vh",
                "75v":"75vh",
                "80v":"80vh",
                "85v":"85vh",
                "90v":"90vh",
                "95v":"95vh",                
            },
            width:{
                "5v":"5vw",
                "10v":"10vw",
                "15v":"15vw",
                "20v":"20vw",
                "25v":"25vw",
                "30v":"30vw",
                "35v":"35vw",
                "40v":"40vw",
                "45v":"45vw",
                "50v":"50vw",
                "55v":"55vw",
                "60v":"60vw",
                "65v":"65vw",
                "70v":"70vw",
                "75v":"75vw",
                "80v":"80vw",
                "85v":"85vw",
                "90v":"90vw",
                "95v":"95vw",                
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
