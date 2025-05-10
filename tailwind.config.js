module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/js/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#03AED2",
                secondary: "#68D2E8",
                accent: "#FDDE55",
                light: "#FEEFAD",
            },
            borderRadius: {
                button: "8px",
            },
        },
    },
    plugins: [],
};
