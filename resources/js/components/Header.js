export function initHeader() {


    const hamburgerBtn = document.getElementById('hamburger-btn');
    const sideDrawer = document.getElementById('side-drawer');
    const closeBtn = document.getElementById('close-btn');
    const backdrop = document.getElementById('backdrop');

    function openMenu() {
        sideDrawer.classList.remove('translate-x-full');
        sideDrawer.classList.add('translate-x-0');
        backdrop.classList.remove('hidden');
        hamburgerBtn.setAttribute('aria-expanded', 'true');
        sideDrawer.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        sideDrawer.classList.add('translate-x-full');
        sideDrawer.classList.remove('translate-x-0');
        backdrop.classList.add('hidden');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        sideDrawer.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    hamburgerBtn.addEventListener('click', () => {
        if (sideDrawer.classList.contains('translate-x-full')) {
            openMenu();
        } else {
            closeMenu();
        }
    });

    closeBtn.addEventListener('click', closeMenu);
    backdrop.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !sideDrawer.classList.contains('-translate-x-full')) {
            closeMenu();
        }
    });

    const menuLinks = sideDrawer.querySelectorAll('nav a');

    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });
    window.addEventListener("scroll", function () {
        const logo = document.querySelector(".logo-container");
        const mobileLogo = document.querySelector(".mobile-dzp-logo");

        if (window.scrollY > 20) {
            logo.classList.remove("opacity-0", "translate-y-3", "hidden");
            logo.classList.add("opacity-100", "translate-y-0", "w-[100px]");
            mobileLogo.classList.add("hidden");
        } else {
            logo.classList.remove("opacity-100", "translate-y-0", "w-[100px]");
            logo.classList.add("opacity-0", "translate-y-3");
            mobileLogo.classList.remove("hidden");
        }
    });

}
