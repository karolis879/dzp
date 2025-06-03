import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initSwipers() {
    const swiper = new Swiper(".mySwiper", {
        effect: "cube",
        grabCursor: true,
        slidesPerView: 1,
        loop: true,
        speed: 1000, // <-- Slide transition duration in milliseconds (default is 300ms)
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        autoplay: {
            delay: 4500,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        on: {
            init: function () {
                this.slides.forEach(slide => {
                    const content = slide.querySelector('.overlay-content');
                    if (content) {
                        content.classList.add('opacity-0', 'translate-y-4', 'transition-all', 'duration-700');
                    }
                });

                const firstSlide = this.slides[this.activeIndex];
                const content = firstSlide.querySelector('.overlay-content');
                if (content) {
                    content.classList.remove('opacity-0', 'translate-y-4');
                    content.classList.add('opacity-100', 'translate-y-0');
                }
            },

            slideChange: function () {
                this.slides.forEach(slide => {
                    const content = slide.querySelector('.overlay-content');
                    if (content) {
                        content.classList.remove('opacity-100', 'translate-y-0');
                        content.classList.add('opacity-0', 'translate-y-4');
                    }
                });

                const activeSlide = this.slides[this.activeIndex];
                const content = activeSlide.querySelector('.overlay-content');
                if (content) {
                    // Wait a moment to ensure slide is fully active
                    setTimeout(() => {
                        content.classList.remove('opacity-0', 'translate-y-4');
                        content.classList.add('opacity-100', 'translate-y-0');
                    }, 500);
                }
            }
        }
    });


    const certificationsSwiper = new Swiper(".myCertificationsSwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {slidesPerView: 1.4},
            770: {slidesPerView: 1},
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
            0: {slidesPerView: 1.4},
            770: {slidesPerView: 1},
        },
        pagination: {
            el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
    });
}
