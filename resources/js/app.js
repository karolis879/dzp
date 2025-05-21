import './bootstrap';
import 'flowbite';
import './main_page.js'
import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Initialize Swiper
var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    loop: true,
    // autoplay: {
    //     delay: 3000,       // Time in milliseconds (3000ms = 3 seconds)
    //     disableOnInteraction: false, // Keep autoplay running after user interaction
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});

var certificationsSwiper = new Swiper(".mySwiperCertifications", {
    cssMode: true,
    loop: true,
    // autoplay: {
    //     delay: 3000,       // Time in milliseconds (3000ms = 3 seconds)
    //     disableOnInteraction: false, // Keep autoplay running after user interaction
    // },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },

    mousewheel: true,
    keyboard: true,
});


var newsSwiper = new Swiper(".mySwiperNews", {
    cssMode: true,
    loop: true,
    // autoplay: {
    //     delay: 3000,       // Time in milliseconds (3000ms = 3 seconds)
    //     disableOnInteraction: false, // Keep autoplay running after user interaction
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    spaceBetween: 16, // Adjust this as needed

    breakpoints: {
        0: {
            slidesPerView: 1.4, // show a bit of the next slide
        },
        768: {
            slidesPerView: 2, // full 2 slides on tablet/desktop
        },
        1024: {
            slidesPerView: 1, // full 3 slides on tablet/desktop
        },
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});


const nextBtn = document.querySelector('.swiper-button-next');
const prevBtn = document.querySelector('.swiper-button-prev');

// Initial state: nextBtn active, prevBtn inactive
nextBtn.style.opacity = '1';
prevBtn.style.opacity = '0.3';


nextBtn.addEventListener('click', () => {

    nextBtn.style.opacity = '1';    // active
    prevBtn.style.opacity = '0.3';  // inactive
});

prevBtn.addEventListener('click', () => {
    prevBtn.style.opacity = '1';    // active
    nextBtn.style.opacity = '0.3';  // inactive
});

