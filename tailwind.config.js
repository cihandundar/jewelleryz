/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                spinSlow: "spin-slow 3s linear infinite", // Mevcut animasyonun tanımı
                float: "float 3s ease-in-out infinite", // Yeni yukarı/aşağı animasyonu
                floatSide: "floatSide 3s ease-in-out infinite", // Sağ/sol kaydırma
            },
            keyframes: {
                "spin-slow": {
                    from: { transform: "rotate(0deg)" },
                    to: { transform: "rotate(360deg)" },
                },
                float: {
                    "0%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(-10px)" },
                    "100%": { transform: "translateY(0)" },
                },
                floatSide: {
                    "0%": { transform: "translateX(0)" },
                    "50%": { transform: "translateX(10px)" },
                    "100%": { transform: "translateX(0)" },
                },
            },
            fontFamily: {
                alice: ["Alice", "serif"],
            },
            screens: {
                xs: "475px",
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
        },
    },
    safelist: ["translate-x-0", "translate-x-full", "swiper-slide-active"],
    plugins: [],
};
