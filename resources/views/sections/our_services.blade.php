@php
    $services = config('services_content.blade');
    $inspectionServices = config('services_content.inspection');
    $turbineServices = config('services_content.turbine');
    $exteriorServices = config('services_content.exterior');
@endphp

<div id="services"
     class="container mx-auto flex-start mb-[52px] mt-2 flex-col bg-[#E4E9E9] md:h-full md:pb-8 lg:pb-0 lg:h-[911px] rounded-[24px] pb-4 md:pb-0">

    <div class="md:px-[75px] px-4 md:py-10">
        <h3
            class="font-normal md:text-[60px] text-[32px] pt-8 md:pt-0 md:leading-[68px] tracking-[-0.04em] text-[#818181]">
            Our
            <span
                class="font-normal md:text-[60px] md:leading-[68px] md:tracking-[-0.04em] text-[#00403D] text-right">
                services
            </span>
        </h3>
        <p class="text-base text-[#818181] pt-2">
            Wide range of specialized wind turbinbe and constructions services to ensure high-quality maintenance
            and repair.
        </p>
    </div>

    <div class="border-gray-200 dark:border-gray-700 lg:px-[75px] md:pt-[42px] md:px-4 md:px-0 pt-4 md:pt-0">

        <!-- MOBILE DROPDOWN - visible only on small screens -->
        <div class="relative md:hidden mt-2 max-w-md mx-auto px-4" id="services-dropdown-container">
            <button
                id="blade-tab"
                aria-haspopup="listbox"
                aria-expanded="false"
                class="bg-white text-[#0D5B60] w-full h-[50px] rounded-t-[4px] flex justify-center gap-5 items-center px-4 font-bold text-base"
                type="button"
            >
                <span id="blade-tab-label">Blade Services</span>
                <i id="arrow-icon" class="fa fa-arrow-down"></i>
            </button>

            <div
                id="dropdown-menu"
                role="listbox"
                tabindex="-1"
                aria-labelledby="blade-tab-label"
                class=" hidden absolute left-0 right-0 bg-white rounded-b pb-4 shadow-md z-50 gap-2 flex flex-col  px-4"
            >
                <button
                    role="option"
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                    data-target="blade"
                    type="button"
                >Blade Services
                </button>
                <button
                    role="option"
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                    data-target="inspections"
                    type="button"
                >Inspections & Diagnostics
                </button>
                <button
                    role="option"
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                    data-target="turbine"
                    type="button"
                >Turbine Maintenance & Repair
                </button>
                <button
                    role="option"
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                    data-target="exterior"
                    type="button"
                >Exterior & Construction Services
                </button>
            </div>
        </div>

        <!-- DESKTOP TABS - hidden on small screens -->
        <div class="hidden md:grid md:grid-cols-4 gap-[7px] px-4" id="default-styled-tab">
            <button
                id="blade-tab-desktop"
                data-tabs-target="#blade"
                type="button"
                role="tab"
                aria-controls="blade"
                aria-selected="true"
                class="bg-white text-[#0D5B60] aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-bold text-base relative"
            >
                Blade Services
            </button>
            <button
                class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                id="inspections-tab"
                data-tabs-target="#inspections"
                type="button"
                role="tabpanel"
                aria-controls="inspections"
                aria-selected="false"
            >
                Inspections & Diagnostics
            </button>
            <button
                class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                id="turbine-tab"
                data-tabs-target="#turbine"
                type="button"
                role="tabpanel"
                aria-controls="turbine"
                aria-selected="false"
            >
                Turbine Maintenance & Repair
            </button>
            <button
                class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-normal text-base"
                id="exterior-tab"
                data-tabs-target="#exterior"
                type="button"
                role="tabpanel"
                aria-controls="exterior"
                aria-selected="false"
            >
                Exterior & Construction Services
            </button>
        </div>

        <!-- TAB CONTENT -->
        <div id="default-styled-tab-content" class="mt-4 px-4">
            <div id="blade" role="tabpanel" class="tab-content grid md:grid-cols-4 grid-cols-2 gap-[7px]"
                 aria-labelledby="blade-tab">
                @foreach ($services as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                        :isLargeIcon="$service['name'] === 'services_maintenance.svg'"
                    />
                @endforeach
            </div>

            <div id="inspections" role="tabpanel" class="tab-content hidden grid md:grid-cols-4 grid-cols-2 gap-[7px]"
                 aria-labelledby="inspections-tab">
                @foreach ($inspectionServices as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                        :isLargeIcon="$service['name'] === 'Various inspections & Diagnostics.svg' || $service['name'] === 'Drone-Assisted Blade & Turbine Inspection.svg'  || $service['name'] === 'End-of-Warranty (EOW) Blade Inspection.svg'"
                    />
                @endforeach
            </div>

            <div id="turbine" role="tabpanel" class="tab-content hidden grid md:grid-cols-4 grid-cols-2 gap-[7px]"
                 aria-labelledby="turbine-tab">
                @foreach ($turbineServices as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                        :isLargeIcon="$service['name'] === 'Painting and Sandblasting.svg'"
                    />
                @endforeach
            </div>

            <div id="exterior" role="tabpanel" class="tab-content hidden grid md:grid-cols-4 grid-cols-2 gap-[7px]"
                 aria-labelledby="exterior-tab">
                @foreach ($exteriorServices as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                    />
                @endforeach
            </div>
        </div>

    </div>
</div>
