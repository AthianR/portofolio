/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [],
    theme: {
        extend: {},
        listStyleType: {
            none: "none",
            disc: "disc",
            decimal: "decimal",
            square: "square",
            roman: "upper-roman",
        },
    },
    plugins: [require("daisyui")],
};
