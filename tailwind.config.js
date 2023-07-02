const colors = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: "1.75rem",
                sm: "1.75rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
        extend: {
            fontFamily: {
                "ibm-reg": ["ibm_plex_sansregular"],
                "ibm-bold": ["ibm_plex_sansbold"],
                "ibm-med": ["ibm_plex_sansmedium"],
                "ibm-plex-serif": ["ibm_plex_serif"],
            },
            colors: {
                red: "#E42528",
                blue: {
                    ...colors.blue,
                    100: "#B5C3D0",
                    200: "#97A8B7",
                },
                black: {
                    ...colors.black,
                    200: "#414249",
                    900: "#1A1B24",
                },
                gray: {
                    ...colors.gray,
                    50: "#FAFAFB",
                    100: "#76818C",
                    200: "#606972",
                },
            },
            fontSize: {
                base: ["1rem", "1.313rem"], //16px / 21px
                sm: ["0.875rem", "1.125rem"], //14px / 18xpx
                lg: ["1.125rem", "1.438rem"], //18px / 23px
                "2xl": ["1.75rem", "2rem"], //28px / 32px
                "3xl": ["2rem", "2.625rem"], //32px / 42px
                "4xl": ["2.25rem", "2.625rem"], //36px / 42px
            },
            typography: {
                DEFAULT: {
                    css: {
                        color: "#1A1B24",
                    },
                },
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
