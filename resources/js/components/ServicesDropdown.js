export function initServicesDropdown() {
        const bladeTab = document.getElementById('blade-tab');
        const bladeTabLabel = document.getElementById('blade-tab-label');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const arrowIcon = document.getElementById('arrow-icon');
        const dropDownContainer = document.getElementById('services-dropdown-container');
        const tabContents = document.querySelectorAll('.tab-content');
        const dropdownButtons = dropdownMenu.querySelectorAll('button');

        bladeTab.addEventListener('click', () => {
            const isHidden = dropdownMenu.classList.contains('hidden');

            if (isHidden) {
                // Show dropdown and hide currently active tab button
                dropdownButtons.forEach(btn => {
                    if (btn.textContent.trim() === bladeTabLabel.textContent.trim()) {
                        btn.style.display = 'none'; // hide active tab button
                    } else {
                        btn.style.display = 'flex'; // show other buttons
                    }
                });
            }

            dropDownContainer.classList.toggle('px-4', !isHidden);

            dropdownMenu.classList.toggle('hidden');
            bladeTab.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
            arrowIcon.classList.toggle('fa-arrow-up', isHidden);
            arrowIcon.classList.toggle('fa-arrow-down', !isHidden);
        });

        document.addEventListener('click', (e) => {
            if (!bladeTab.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
                bladeTab.setAttribute('aria-expanded', 'false');
                arrowIcon.classList.remove('fa-arrow-up');
                arrowIcon.classList.add('fa-arrow-down');
            }
        });

        dropdownButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                dropDownContainer.classList.add('px-4');
                const targetId = btn.getAttribute('data-target');
                bladeTabLabel.textContent = btn.textContent;

                tabContents.forEach(tc => tc.classList.add('hidden'));
                const selectedTab = document.getElementById(targetId);
                if (selectedTab) {
                    selectedTab.classList.remove('hidden');
                }

                dropdownMenu.classList.add('hidden');
                bladeTab.setAttribute('aria-expanded', 'false');
                arrowIcon.classList.remove('fa-arrow-up');
                arrowIcon.classList.add('fa-arrow-down');
            });
        });
    }
