module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontSize: {
                lg: "1.333rem",
                xl: "1.777rem",
                "2xl": "2.369rem",
                "3xl": "3.157rem",
                "4xl": "4.209rem",
                "5xl": "5.610rem",
            },
            colors: {
                orange: {
                    DEFAULT: "#e36f25",
                },
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
