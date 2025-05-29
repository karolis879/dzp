export function initMainPage() {

    const tabs = document.querySelectorAll('#default-styled-tab button');
    const contents = document.querySelectorAll('#default-styled-tab-content > div');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.classList.remove('bg-white', 'text-[#0D5B60]', 'font-bold');
                t.classList.add('bg-[#5C7071]', 'text-white', 'font-normal');
                t.setAttribute('aria-selected', 'false');
            });

            contents.forEach(c => {
                c.classList.add('hidden');
                c.classList.remove('fade-in'); // Clean up any previous animations
            });

            tab.classList.add('bg-white', 'text-[#0D5B60]', 'font-bold');
            tab.classList.remove('bg-[#5C7071]', 'text-white', 'font-normal');
            tab.setAttribute('aria-selected', 'true');

            const targetSelector = tab.getAttribute('data-tabs-target');
            const targetContent = document.querySelector(targetSelector);
            if (targetContent) {
                targetContent.classList.remove('hidden');
                void targetContent.offsetWidth; // Reflow to restart animation
                targetContent.classList.add('fade-in');
            }
        });
    });

    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('data-target');
            const targetEl = document.getElementById(targetId);
            if (!targetEl) return;

            // Smooth scroll with offset for fixed header (adjust offset)
            const headerOffset = 80;
            const elementPosition = targetEl.getBoundingClientRect().top;
            const offsetPosition = window.pageYOffset + elementPosition - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            // When scrolling finishes, trigger bounce animation
            // Since there's no native "scrollend", we use a timeout roughly matching scroll duration
            setTimeout(() => {
                targetEl.classList.add('bounce-effect');

                // Remove the class after animation ends to allow re-triggering
                targetEl.addEventListener('animationend', () => {
                    targetEl.classList.remove('bounce-effect');
                }, {once: true});

            }, 600); // timeout ~ scroll duration in ms, adjust if needed
        });
    });
}
