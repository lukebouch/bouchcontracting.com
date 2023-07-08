/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}"],
    theme: {
        extend: {
            colors: {
                orange: {
                    DEFAULT: "#E26F25",
                    900: "#9B4513",
                    800: "#B15218",
                    700: "#C45E1F",
                    600: "#D56822",
                    500: "#E26F25",
                    400: "#EA7B33",
                    300: "#F48E4A",
                    200: "#FCA96A",
                    100: "#FFC08C",
                    50: "#FFD9BB",
                },
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
