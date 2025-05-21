document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#default-styled-tab button');
    const contents = document.querySelectorAll('#default-styled-tab-content > div');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.classList.remove('bg-white', 'text-[#0D5B60]', 'font-bold');
                t.classList.add('bg-[#5C7071]', 'text-white', 'font-normal');
                t.setAttribute('aria-selected', 'false');
            });

            contents.forEach(c => c.classList.add('hidden'));

            tab.classList.add('bg-white', 'text-[#0D5B60]', 'font-bold');
            tab.classList.remove('bg-[#5C7071]', 'text-white', 'font-normal');
            tab.setAttribute('aria-selected', 'true');

            const targetSelector = tab.getAttribute('data-tabs-target');
            const targetContent = document.querySelector(targetSelector);
            if (targetContent) {
                targetContent.classList.remove('hidden');
            }
        });
    });

    function updateCarouselIndicators() {
        const indicators = document.querySelectorAll('[data-carousel-slide-to]');
        indicators.forEach((btn) => {
            const isActive = btn.getAttribute('aria-current') === 'true';
            btn.style.backgroundColor = isActive ? '#00403D' : '#D9D9D9';
        });
    }

    updateCarouselIndicators();

    const observer = new MutationObserver(updateCarouselIndicators);
    document.querySelectorAll('[data-carousel-slide-to]').forEach((btn) => {
        observer.observe(btn, {attributes: true, attributeFilter: ['aria-current']});
    });

    function showForm(formId) {
        const allForms = [
            'quote-section-form',
            'send-us-your-cv-form',
            'general-contacts-section-form',
            'mobile-quote-section-form',
            'mobile-send-us-your-cv-form',
            'mobile-general-contacts-section-form'
        ];

        allForms.forEach(id => {
            const form = document.getElementById(id);
            if (form) {

                form.classList.add('hidden');
            }
        });

        const targetForm = document.getElementById(formId);
        if (targetForm) {
            targetForm.classList.remove('hidden');
        }
    }

    const quoteSection = document.getElementById('quote-section');
    const cvSection = document.getElementById('send-us-your-cv-section');
    const contactsSection = document.getElementById('general-contacts-section');
    const mobileQuoteSection = document.getElementById('mobile-quote-section');
    const mobileCvSection = document.getElementById('mobile-send-us-your-cv-section');
    const mobileContactsSection = document.getElementById('mobile-contacts-section');

    if (quoteSection) {
        quoteSection.addEventListener('click', function () {
            showForm('quote-section-form');
        });
    }

    if (cvSection) {
        cvSection.addEventListener('click', function () {
            console.log('cvSection clicked');
            showForm('send-us-your-cv-form');
        });
    }

    if (contactsSection) {
        contactsSection.addEventListener('click', function () {
            showForm('general-contacts-section-form');
        });
    }

    if (mobileQuoteSection) {
        mobileQuoteSection.addEventListener('click', function () {
            showForm('mobile-quote-section-form');
        });
    }

    if (mobileCvSection) {
        mobileCvSection.addEventListener('click', function () {
            showForm('mobile-send-us-your-cv-form');
        });
    }

    if (mobileContactsSection) {
        mobileContactsSection.addEventListener('click', function () {
            showForm('mobile-general-contacts-section-form');
        });
    }

    const sections = [cvSection, quoteSection, contactsSection ].filter(Boolean);
    const mobileSections = [mobileQuoteSection, mobileCvSection, mobileContactsSection ].filter(Boolean);

    sections.forEach(section => {
        section.addEventListener('click', function () {
            sections.forEach(sec => {
                sec.classList.remove('bg-white', 'rounded-l-[60px]');
            });

            this.classList.add('bg-white', 'rounded-l-[60px]');
        });
    });

    mobileSections.forEach(section => {
        section.addEventListener('click', function () {
            mobileSections.forEach(sec => {
                sec.classList.remove('bg-white', 'rounded-t-[24px]');
            });

            this.classList.add('bg-white', 'rounded-t-[24px]');
        });
    });

    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
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
                }, { once: true });

            }, 600); // timeout ~ scroll duration in ms, adjust if needed
        });
    });
});
