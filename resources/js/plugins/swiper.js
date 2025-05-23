import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initSwipers() {
    const mainSwiper = new Swiper(".mySwiper", {
        cssMode: true,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });

    const newsSwiper = new Swiper(".mySwiperNews", {
        cssMode: true,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        spaceBetween: 16,
        breakpoints: {
            0: { slidesPerView: 1.4 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 1 },
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });

    // Control opacity
    const nextBtn = document.querySelector('.swiper-button-next');
    const prevBtn = document.querySelector('.swiper-button-prev');

    if (nextBtn && prevBtn) {
        nextBtn.style.opacity = '1';
        prevBtn.style.opacity = '0.3';

        nextBtn.addEventListener('click', () => {
            nextBtn.style.opacity = '1';
            prevBtn.style.opacity = '0.3';
        });

        prevBtn.addEventListener('click', () => {
            prevBtn.style.opacity = '1';
            nextBtn.style.opacity = '0.3';
        });
    }
}
