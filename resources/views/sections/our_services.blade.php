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
        <p class="text-base text-[#818181] pt-2">Wide range of specialized wind turbinbe and constructions services
            to ensure high-quality maintenance
            and repair.</p>
    </div>


    <div class=" border-gray-200 dark:border-gray-700 md:px-[75px] md:pt-[42px] px-4 md:px-0 pt-4 md:pt-0">
        <div class="relative"> <!-- Make this relative so the dropdown can be absolute -->
            <div class="grid md:grid-cols-4 grid-cols-1 gap-[7px]" id="default-styled-tab">
                <!-- Main button visible on all screens -->
                <button
                    id="blade-tab"
                    data-tabs-target="#blade"
                    type="button"
                    role="tab"
                    aria-controls="blade"
                    aria-selected="true"
                    class="bg-white text-[#0D5B60] aspect-[4/3] rounded-[4px] h-[50px] md:h-full lg:h-[50px] w-full flex items-center justify-center font-bold text-base relative"
                >
                    <span id="blade-tab-label">Blade Services</span>
                    <!-- Arrow visible only on mobile -->
                    <div class="md:hidden flex absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer">
                        <i id="arrow-icon" class="fa fa-arrow-down" aria-hidden="true"></i>
                    </div>
                </button>

                @include('mobile_sections.mobile_our_services')

                <!-- Desktop buttons visible from md and up -->
                <button
                    class="hidden md:flex bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] ] h-[50px] md:h-full lg:h-[50px] w-full items-center justify-center font-normal text-base"
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
                    class="hidden md:flex bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] ] h-[50px] md:h-full lg:h-[50px] w-full items-center justify-center font-normal text-base"
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
                    class="hidden md:flex bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] ] h-[50px] md:h-full lg:h-[50px] w-full items-center justify-center font-normal text-base"
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
        </div>

        <!-- Tab content -->
        <div id="default-styled-tab-content">
            <div class="grid md:grid-cols-4 grid-cols-2 mt-2 gap-[7px]" id="blade" role="tabpanel"
                 aria-labelledby="blade-tab">
                @foreach ($services as $service)
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <button
                            class="text-[#0D5B60] hover:text-[#008983] group bg-white aspect-[4/3] rounded-[4px] h-[273px] w-full flex items-center justify-center font-normal text-base flex-col hover:shadow-lg hover:shadow-black/15">
                            @if($service['name'] ==='services_maintenance.svg')
                                <div class="w-[95px] h-[97px] flex justify-center items-center">
                                    {!! file_get_contents(public_path('images/' . $service['name'])) !!}
                                </div>
                            @else
                                <div class="w-[75px] h-[97px] flex justify-center items-center">
                                    {!! file_get_contents(public_path('images/' . $service['name'])) !!}
                                </div>
                            @endif
                            <p
                                class="pt-3 text-[20px] font-medium leading-[135%] tracking-[-0.05em] text-center"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                {!! $service['description'] !!}
                            </p>
                        </button>
                    </div>
                @endforeach
            </div>

            <div id="blade" role="tabpanel" aria-labelledby="blade-tab"
                 class="grid md:grid-cols-4 grid-cols-2 mt-2 gap-[7px] hidden">
                @foreach ($services as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                        :isLargeIcon="$service['name'] === 'services_maintenance.svg'"
                    />
                @endforeach
            </div>

            <div id="inspections" role="tabpanel" aria-labelledby="inspections-tab"
                 class="grid md:grid-cols-4 grid-cols-2 mt-2 gap-[7px] hidden">
                @foreach ($inspectionServices as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                        :isLargeIcon="$service['name'] === 'Various inspections & Diagnostics.svg' || $service['name'] === 'Drone-Assisted Blade & Turbine Inspection.svg'  || $service['name'] === 'End-of-Warranty (EOW) Blade Inspection.svg'"
                    />
                @endforeach
            </div>

            <div id="turbine" role="tabpanel" aria-labelledby="turbine-tab"
                 class="grid md:grid-cols-4 grid-cols-2 mt-2 gap-[7px] hidden">
                @foreach ($turbineServices as $service)
                    <x-service-card
                        :icon="$service['name']"
                        :description="$service['description']"
                        :isLargeIcon="$service['name'] === 'Painting and Sandblasting.svg'"
                    />
                @endforeach
            </div>

            <div id="exterior" role="tabpanel" aria-labelledby="exterior-tab"
                 class="grid md:grid-cols-4 grid-cols-2 mt-2 gap-[7px] hidden">
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

