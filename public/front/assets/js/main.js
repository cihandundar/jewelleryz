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

var swiper = new Swiper(".heroSlider", {
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

// FEATURED DEALS SLIDER

var swiper = new Swiper(".featuredSlider", {
    loop: true,
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

// FEATURED CHILD SLIDER

var swiper = new Swiper(".featuredEaringSlider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".featuredCelestialSlider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// FILTER SECTION JS
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll("#collection-btn button");
    const collections = document.querySelectorAll(".collection");

    function showMenu(category, clickedButton) {
        collections.forEach((menu) => {
            // Tüm koleksiyonları gizle
            menu.style.display = "none";
        });

        // Seçilen kategoriyi göster
        const selectedCollection = document.querySelector(`.${category}-menu`);
        if (selectedCollection) {
            selectedCollection.style.display = "flex";
            selectedCollection.style.alignItems = "center";
            selectedCollection.style.flexWrap = "wrap";
        }

        // Aktif olan butonu güncelle
        buttons.forEach((button) => button.classList.remove("active"));
        clickedButton.classList.add("active");
    }

    // Butonlara tıklama olayı ekleyin
    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            const category = this.getAttribute("data-category");
            showMenu(category, this);
        });
    });

    // Sayfa ilk yüklendiğinde "latest" koleksiyonunu göster
    buttons[0].classList.add("active");
    showMenu("latest", buttons[0]);
});
