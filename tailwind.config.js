/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.{blade.php,js,vue}"],
    theme: {
        extend: {
            colors: {
                mainColor: '#0c535d',
            }
        },
    },
    plugins: [
        require("daisyui")
    ],
}
