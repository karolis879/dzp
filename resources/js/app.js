import './bootstrap';

const tabs = document.querySelectorAll('#default-styled-tab button');
const contents = document.querySelectorAll('#default-styled-tab-content > div');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // Reset all tabs buttons styles and aria-selected
        tabs.forEach(t => {
            t.classList.remove('bg-white', 'text-[#0D5B60]', 'font-bold');
            t.classList.add('bg-[#5C7071]', 'text-white', 'font-normal');
            t.setAttribute('aria-selected', 'false');
        });

        // Hide all tab contents
        contents.forEach(c => c.classList.add('hidden'));

// Activate clicked tab
        tab.classList.add('bg-white', 'text-[#0D5B60]', 'font-bold');
        tab.classList.remove('bg-[#5C7071]', 'text-white', 'font-normal');

        tab.setAttribute('aria-selected', 'true');

        // Show corresponding tab content
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

// Initial run (in case one is already active)
updateCarouselIndicators();

// MutationObserver to catch aria-current changes
const observer = new MutationObserver(updateCarouselIndicators);
document.querySelectorAll('[data-carousel-slide-to]').forEach((btn) => {
    observer.observe(btn, {attributes: true, attributeFilter: ['aria-current']});
});

function showForm(formId) {
    // Hide all forms
    const allForms = [
        'quote-section-form',
        'send-us-your-cv-form',
        'general-contacts-section-form'
    ];

    allForms.forEach(id => {
        const form = document.getElementById(id);
        if (form) {
            form.classList.add('hidden');
        }
    });

    // Show selected form
    const targetForm = document.getElementById(formId);
    if (targetForm) {
        targetForm.classList.remove('hidden');
    }
}

// Event listeners
document.getElementById('quote-section').addEventListener('click', function () {
    showForm('quote-section-form');
});

document.getElementById('send-us-your-cv-section').addEventListener('click', function () {
    showForm('send-us-your-cv-form');
});

document.getElementById('general-contacts-section').addEventListener('click', function () {
    showForm('general-contacts-section-form');
});

const sections = [
    document.getElementById('send-us-your-cv-section'),
    document.getElementById('quote-section'),
    document.getElementById('general-contacts-section')
];

sections.forEach(section => {
    section.addEventListener('click', function () {
        sections.forEach(sec => {
            sec.classList.remove('bg-white', 'rounded-l-[60px]');
        });

        this.classList.add('bg-white', 'rounded-l-[60px]');
    });
});
