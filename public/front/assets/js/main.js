// HAMBURGER MENU

const navMenu = document.getElementById("nav-menu");
const hamburger = document.getElementById("hamburger");
const closeicon = document.getElementById("closeicon");

hamburger.addEventListener("click", () => {
    if (navMenu.getAttribute("data-menu") === "closed") {
        navMenu.setAttribute("data-menu", "open");
    } else {
        navMenu.setAttribute("data-menu", "closed");
    }
});

closeicon.addEventListener("click", () => {
    navMenu.setAttribute("data-menu", "closed");
});

// HERO SLIDER

const swiper = new Swiper(".heroSlider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "creative",
    creativeEffect: {
        prev: {
            translate: ["-120%", 0, -500],
            opacity: 0.5,
        },
        next: {
            translate: ["120%", 0, -500],
            opacity: 0.5,
        },
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    speed: 800,
});
