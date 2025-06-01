export function initContactForm() {


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

    const sections = [cvSection, quoteSection, contactsSection].filter(Boolean);
    const mobileSections = [mobileQuoteSection, mobileCvSection, mobileContactsSection].filter(Boolean);

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

    const fileInput = document.getElementById('cv');
    const fileNameDisplay = document.getElementById('file-name');

    fileInput.addEventListener('change', function () {
        if (fileInput.files.length > 0) {
            fileNameDisplay.textContent = fileInput.files[0].name;
        } else {
            fileNameDisplay.textContent = '';
        }
    });

    const mobileFileInput = document.getElementById('mobile-cv');
    const mobileFileNameDisplay = document.getElementById('mobile-file-name');

    mobileFileInput.addEventListener('change', function () {
        console.log('asd1')
        if (mobileFileInput.files.length > 0) {
            console.log('asd111')
            mobileFileNameDisplay.textContent = mobileFileInput.files[0].name;
        } else {
            mobileFileNameDisplay.textContent = '';
        }
    });
}
