const swiper = new Swiper(".heroSlider", {
    loop: true, // Sonsuz döngü
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "creative", // Creative efekti kullanıyoruz
    creativeEffect: {
        prev: {
            // Önceki slaytın kaybolma şekli
            translate: ["-120%", 0, -500],
            opacity: 0.5,
        },
        next: {
            // Sonraki slaytın gelme şekli
            translate: ["120%", 0, -500],
            opacity: 0.5,
        },
    },
    autoplay: {
        delay: 3000, // Otomatik geçiş süresi (3 saniye)
        disableOnInteraction: false, // Kullanıcı etkileşimi autoplay'i durdurmaz
    },
    speed: 800, // Geçiş hızını ayarla
});
