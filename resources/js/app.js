import './bootstrap';
import 'flowbite';

import { initMainPage } from './components/MainPage';
import { initHeader } from './components/Header';
import { initContactForm } from './components/ContactForm';
import { initSwipers } from './plugins/swiper';

document.addEventListener('DOMContentLoaded', () => {
    initMainPage();
    initHeader();
    initContactForm();
    initSwipers();
});
