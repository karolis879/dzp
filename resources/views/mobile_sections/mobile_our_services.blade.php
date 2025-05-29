<!-- Dropdown menu for mobile, hidden by default -->
<div id="dropdown-menu"
     class="md:hidden hidden absolute left-0 top-full mt-2 z-50 w-full bg-white rounded shadow-lg flex-col space-y-2">
    <button
        class="bg-gray-600 bg-opacity-70 text-white aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-normal text-base"
        id="inspections-tab"
        data-tabs-target="#inspections"
        type="button"
        role="tab"
        aria-controls="inspections"
        aria-selected="false"
    >
        Inspections & Diagnostics
    </button>
    <button
        class="bg-gray-600 bg-opacity-70 text-white aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-normal text-base"
        id="turbine-tab"
        data-tabs-target="#turbine"
        type="button"
        role="tab"
        aria-controls="turbine"
        aria-selected="false"
    >
        Turbine Maintenance & Repair
    </button>
    <button
        class="bg-gray-600 bg-opacity-70 text-white aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-normal text-base"
        id="exterior-tab"
        data-tabs-target="#exterior"
        type="button"
        role="tab"
        aria-controls="exterior"
        aria-selected="false"
    >
        Exterior & Construction Services
    </button>
</div>

<script>
    const bladeTab = document.getElementById('blade-tab');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const arrowIcon = document.getElementById('arrow-icon');

    bladeTab.addEventListener('click', () => {
        const isOpen = !dropdownMenu.classList.contains('hidden');
        if (isOpen) {
            dropdownMenu.classList.add('hidden');
            arrowIcon.classList.remove('fa-arrow-up');
            arrowIcon.classList.add('fa-arrow-down');
        } else {
            dropdownMenu.classList.remove('hidden');
            arrowIcon.classList.remove('fa-arrow-down');
            arrowIcon.classList.add('fa-arrow-up');
        }

        dropdownMenu.addEventListener('click', (e) => {
            dropdownMenu.classList.add('hidden');
            arrowIcon.classList.remove('fa-arrow-up');
            arrowIcon.classList.add('fa-arrow-down');
        })
    });
</script>
