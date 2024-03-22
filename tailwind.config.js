/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.{blade.php,js,vue}"],
    theme: {
        extend: {
            colors: {
                mainColor: '#000000',
                pinkColor: '#d0b1d5',
                gColor: '#3affba',
                gray: '#e5c8b2',
            }
        },
    },
    plugins: [
        require("daisyui")
    ],
}
