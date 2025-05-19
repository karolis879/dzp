<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DZP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
          integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body class="flex flex-col min-h-screen bg-white">

<!-- Header -->
<div>
    <header class="w-full border-b-2 border-[#D6DBDB] h-24 flex items-center z-20 bg-white">
        <div class="container mx-auto flex justify-between items-center px-4 z-20">
            <nav class="flex items-center h-8">
                <ul class="flex gap-8 text-base font-medium text-[#191919]">
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Home</a>
                    </li>
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">About
                            Us</a></li>
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Services</a>
                    </li>
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Partners</a>
                    </li>
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">News</a>
                    </li>
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Project</a>
                    </li>
                    <li><a href="#"
                           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Contact
                            Us</a></li>
                </ul>
            </nav>
            <button
                class="bg-[#F06449] text-white font-medium text-base rounded-full h-12 w-[158px] flex items-center justify-center gap-2 font-hankenGrotesk">
                Get a quote
            </button>
        </div>
    </header>

</div>

<!-- Main Content -->
<main class="flex flex-col overflow-hidden">
    <div class="container mx-auto flex justify-between items-center px-4 mt-[52px] mb-[52px] relative">

        <img src="{{ asset('images/guy.png') }}" alt="flying_guy"
             class="w-[141px] h-[905px] absolute right-[-140px] top-[-70px] z-10"/>

        <div class="flex flex-wrap items-center">
            <!-- Image (like col-4) -->
            <div class="w-full md:w-1/4">
                <img src="{{ asset('images/dzp_logo.png') }}" alt="Wind Turbine"
                     class="transition-transform duration-500"
                     style="transform-origin: center;"
                     onmouseover="this.style.transform='rotate(180deg)'"
                     onmouseout="this.style.transform='rotate(0deg)'"/>
            </div>

            <!-- Text (like col-8) -->
            <div class="w-full md:w-3/4">
                <div>
                    <p class="font-spaceGrotesk font-normal text-[74px] leading-[88px] tracking-[-0.04em] text-[#00403D] text-right">
                        Ensuring that wind turbines blades
                        <span class="text-[#818181]">never stop turning</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative">
        <div class="container mx-auto flex justify-between items-center relative">
            <div class="w-full relative">
                <img src="{{asset('images/header.png')}}" alt="Wind Turbine"
                     class="w-full h-[876px]"/>
            </div>
            <img src="{{ asset('images/hangin_guy_2.png') }}" alt="flying_guy"
                 class="w-[128px] h-[1430px] object-cover absolute left-[-50px] top-219 z-10"/>
        </div>
    </div>

    <div class="container mx-auto flex justify-between items-center mt-[52px] mb-[52px] flex-col">
        <div class="w-full px-[75px]">
            <h3 class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                Leading
                <span
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                    the wind
                </span>
            </h3>
            <p class="font-normal text-[24px] leading-[32px] tracking-normal mt-[24px]">
                We are committed to advancing wind turbine maintenance solutions through innovation, efficiency and
                safety. Check below our journey towards excellence!
            </p>
        </div>

        <div class="w-full mt-[52px] px-[75px] flex">
            <div class="w-1/2 relative">
                <img src="{{asset('images/leading_the_wind.jpg')}}" alt="leading_the_wind"
                     class="h-full object-cover  rounded-[20px]"/>
                <button
                    class="
                            bg-[#F06449]
                            text-white
                            font-normal
                            text-[24px]
                            rounded-full
                            h-[68px]
                            w-[203px]
                            flex items-center justify-center gap-
                            font-hankenGrotesk
                            absolute top-10 left-10
                            cursor-pointer
                          "
                > Get a quote
                </button>
            </div>
            <div class="w-1/2 flex flex-col ml-[52px]">
                <div class="flex flex-col">
                    <div class="flex border-b-2 border-[#D6DBDB] pb-[36px]">
                        <div class="w-1/4">
                            <img src="{{ asset('images/hand_wind.png') }}" class="w-[79px] h-[80px]" alt="hand_wing"/>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <p class="text-[15px] font-bold text-[#F06449]">2022</p>
                            <p class="font-medium text-2xl pt-4">The Beginning of dzp with 7 employees</p>
                            <p class="font-normal pt-4 text-base">With a vision to deliver innovative and sustainable
                                wind energy solutions.</p>
                        </div>
                    </div>

                    <div class="flex border-b-2 border-[#D6DBDB] pb-[36px] pt-[36px]">
                        <div class="w-1/4">
                            <img src="{{ asset('images/wind_wind.png') }}" class="w-[79px] h-[80px]" alt="hand_wing"/>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <p class="text-[15px] font-bold text-[#F06449]">2023</p>
                            <p class="font-medium text-2xl pt-4">First 100 wind turbine projects and 72 employees in the
                                company.</p>
                            <p class="font-normal pt-4 text-base">Started the first project in TA 41, NY which was the
                                first step towards global expansion.</p>
                        </div>
                    </div>


                    <div class="flex border-b-2 border-[#D6DBDB] pb-[36px] pt-[36px]">
                        <div class="w-1/4">
                            <img src="{{ asset('images/badge_win.png') }}" class="w-[79px] h-[80px]" alt="hand_wing"/>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <p class="text-[15px] font-bold text-[#F06449]">2024</p>
                            <p class="font-medium text-2xl pt-4">Award-Winning Innovations and our ISO
                                Certifications</p>
                            <p class="font-normal pt-4 text-base">Started the first project in TA 41, NY which was the
                                first step towards global expansion.</p>
                        </div>
                    </div>

                    <div class="flex pt-[36px]">
                        <div class="w-1/4">
                            <img src="{{ asset('images/house_win.png') }}" class="w-[79px] h-[80px]" alt="hand_wing"/>
                        </div>
                        <div class="w-3/4 flex flex-col">
                            <p class="text-[15px] font-bold text-[#F06449]">2025</p>
                            <p class="font-medium text-2xl pt-4">Growth & Expansion</p>
                            <p class="font-normal pt-4 text-base">Within a few years, the company expanded rapidly,
                                installing more than 50 wind turbines in various countries.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex-start mb-[52px] mt-2 flex-col bg-[#E4E9E9] h-[911px] rounded-[24px]">
        <div class="px-[75px] py-10">
            <h3
                class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                Our
                <span
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                services
                            </span>
            </h3>
            <p class="text-base text-[#818181] pt-2">Wide range of specialized wind turbinbe and constructions services
                to ensure high-quality maintenance
                and repair.</p>
        </div>


        <div class=" border-gray-200 dark:border-gray-700 px-[75px] pt-[42px]">

            <!-- Tabs (custom grid) -->
            <div class="grid grid-cols-4 gap-[7px]"
                 id="default-styled-tab"
                 data-tabs-toggle="#default-styled-tab-content"
                 data-tabs-active-classes="bg-white text-[#0D5B60]"
                 data-tabs-inactive-classes="bg-[#5C7071] text-white"
                 role="tablist">
                <button
                    class="bg-white text-[#0D5B60] aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-bold text-base"
                    id="blade-tab" data-tabs-target="#blade" type="button" role="tab" aria-controls="blade"
                    aria-selected="true">
                    Blade Services
                </button>
                <button
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-normal text-base"
                    id="inspections-tab" data-tabs-target="#inspections" type="button" role="tab"
                    aria-controls="inspections" aria-selected="false">
                    Inspections & Diagnostics
                </button>
                <button
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-normal text-base"
                    id="turbine-tab" data-tabs-target="#turbine" type="button" role="tab" aria-controls="turbine"
                    aria-selected="false">
                    Turbine Maintenance & Repair
                </button>
                <button
                    class="bg-[#5C7071] text-white aspect-[4/3] rounded-[4px] h-[50px] w-full flex items-center justify-center font-normal text-base"
                    id="exterior-tab" data-tabs-target="#exterior" type="button" role="tab" aria-controls="exterior"
                    aria-selected="false">
                    Exterior & Construction Services
                </button>
            </div>

            @php
                $services = [
                    ['name' => 'services_winds.svg', 'description' => '	Blade Repair <br> (Categories 1–5)'],
                    ['name' => 'services_protection.svg', 'description' => 'Leading Edge Protection <br> (LEP) Repair'],
                    ['name' => 'services_lightening.svg', 'description' => 'Lightning Protection <br> System (LPS) '],
                    ['name' => 'services_rebalancing.svg', 'description' => 'Wind Turbine <br> Blade Rebalancing'],
                    ['name' => 'services_coating.svg' , 'description' => 'Blade Surface <br> Coating'],
                    ['name' => 'services_vortex.svg', 'description' => 'Replacement of <br> Vortex Generators'],
                    ['name' => 'services_serrations.svg', 'description' => 'Serrations <br> Maintenance'],
                    ['name' => 'services_maintanence.svg', 'description' => 'Various other <br> Blade Maintenance'],
                ];
            @endphp


                <!-- Tab content -->
            <div id="default-styled-tab-content">
                <div class="grid grid-cols-4 mt-2 gap-[7px]" id="blade" role="tabpanel" aria-labelledby="blade-tab">
                    @foreach ($services as $service)
                        <button
                            class="text-[#0D5B60] hover:text-[#008983] group bg-white aspect-[4/3] rounded-[4px] h-[273px] w-full flex items-center justify-center font-normal text-base flex-col hover:shadow-lg hover:shadow-black/15">
                            <div class="w-[62px] h-[97px] flex justify-center items-center">
                                {!! file_get_contents(public_path('images/' . $service['name'])) !!}
                            </div>
                            <p
                                class="pt-3 text-[20px] font-medium leading-[135%] tracking-[-0.05em] text-center"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                {!! $service['description'] !!}
                            </p>
                        </button>
                    @endforeach
                </div>


                @php
                    $inspectionServices = [
                        'Blade Services',
                        'Blade Services',
                        'Blade Services',
                        'Blade Services',
                        'Blade Services',
                        'Blade Services',
                        'Blade Services',
                        'Blade Services2',
                    ];
                @endphp


                <div class="grid grid-cols-4 mt-2 gap-[7px]" id="inspections" role="tabpanel"
                     aria-labelledby="inspections-tab">
                    @foreach ($inspectionServices as $service)
                        <button
                            class="bg-white text-black aspect-[4/3] rounded-[4px] h-[273px] w-full flex items-center justify-center font-normal text-base">
                            {{ $service }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @php
        $inspectionServices1 = [
            'nordex.png',
            'bionalis.png',
            'skywork.png',
            'ekologix.png',
        ];

        $inspectionServices2 = [
            'safeway.png',
            'kiwa.png',
            'safety_leaders.png',
            'vejo_planas.png',
            'fender.png',
        ];
    @endphp

    <div class="container mx-auto flex-start flex flex-col justify-between items-center mb-[52px]">
        <div class=" w-full px-[75px]">
            <h3
                class=" text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                Our
                <span
                    class=" text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D]">
                                partners
                            </span>
            </h3>
            <p class="text-medium text-base text-[#818181] pt-2">Expert Tips, News, and Trends in Renewable Energy</p>
        </div>

        <div class="flex justify-between pt-12 px-4" style="width: inherit;">
            @foreach($inspectionServices1 as $service)
                <div class="flex justify-center items-center">
                    <a href="https://www.nordex.com/" target="_blank">
                        <img class="color-[#0D5B60]" src="{{ asset('images/' . $service) }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-between pt-8 px-12" style="width: inherit;">
            @foreach($inspectionServices2 as $service)
                <div class="flex justify-center items-center">
                    <a href="https://www.nordex.com/" target="_blank">
                        <img class="color-[#0D5B60]" src="{{ asset('images/' . $service) }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mx-auto flex-col  flex-start mb-[52px] mt-2 flex bg-[#E4E9E9] rounded-[24px]">
        <div class="h-full pt-15 px-[75px] flex gap-10">
            <div class="flex justify-between items-center h-full w-1/2">
                <div class="pt-8">
                    <div class=" flex items-center">
                        <h3
                            class=" text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                            Why choose
                        </h3>
                        <img
                            class="h-[55px] w-[96px] pl-4 pt-2"
                            src="{{ asset('images/dzp_logo.png') }}" alt="Wind Turbine"/>
                    </div>
                    <p class=" text-[#00403D] text-[45px] leading-[67px] font-semibold tracking-[-0.04em]">
                        and how you can save <br> on your wind turbine costs.
                    </p>
                </div>
            </div>
            <div class="w-1/2 relative">
                <img class="absolute top-[-110px] right-0 w-full object-cover"
                     src="{{asset('images/why_choose_us.png')}}">
            </div>
        </div>
        <div class="h-full pb-15 px-[75px] flex mt-16 gap-16">
            <div class="bg-[#003538] rounded-[20px] w-1/2">
                <div class="px-10 py-5 flex items-center justify-between gap-x-10">
                    <p class="font-metrophobic text-[#D9FF00] text-[120px]">15%</p>
                    <div class="font-metrophobic text-[#D9FF00] text-[20px]">Approximate business
                        cost savings by choosing
                        doing blade inspections.
                    </div>
                </div>
                <p class="px-10 text-white text-[18px] leading-[32px] tracking-[0em] font-hanken-grotesk">
                    With our services your company can save significant <br>operational costs of wind turbine
                    business. Read more, <br> download below.
                </p>
                <a href="{{ asset('images/dzp_brochure.pdf') }}" target="_blank"
                   class="underline flex items px-10 pt-13 text-white font-hankenGrotesk">Download PDF</a>
            </div>
            <div class="w-1/2">
                <div>
                    <p class="text-xl text-[#003538] font-bold leading-[24px]">Expert In-House Team</p>
                    <p class="text-[#003538] leading-[24px]">Our IRATA-certified technicians are highly experienced and
                        <br> fully
                        in-house—no freelancers or contractors—ensuring <br> quality, safety, and consistency on every
                        project. </p>
                </div>
                <div class="pt-5">
                    <p class="text-xl text-[#003538] font-bold">Efficient, Flexible & Cost-Effective</p>
                    <p class="text-[#003538] ">We follow strict safety protocols and use low-impact <br> methods that
                        minimize environmental disruption compared to traditional solutions.</p>
                </div>

                <div class="pt-5">
                    <p class="text-xl text-[#003538] font-bold">Safety & Sustainability First</p>
                    <p class="text-[#003538] ">Rope access enables fast mobilization, reduced downtime, <br> and
                        eliminates the need for expensive cranes or lifts—even in hard-to-reach locations.</p>
                </div>

                <div class="pt-5">
                    <p class="text-xl text-[#003538] font-bold">Proven, Comprehensive Services</p>
                    <p class="text-[#003538] ">With a strong track record across multiple regions, we deliver<br>end-to-end
                        turbine solutions—from blade repairs and LEP coating to inspections and drone services.</p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container mx-auto  flex-start mb-[52px] mt-2 flex h-[253px] border-[2px] border-gray-200 rounded-[24px] justify-between">
        <div class="px-6 flex gap-10">
            <div class="flex items-end w-1/4 font-thin">
                <img src="{{ asset('images/comitee_hands.png') }}" class="w-[323px] h-[212px]" alt="hand_wing"/>
            </div>
            <div class="w-2/4 flex flex-col items-start justify-center">
                <h4 class="text-[#8EA2A0] font-gotham font-light text-[40px] leading-[50px]">By Doing business with us
                    you support RED
                    CROSS organization!</h4>
                <p class="text-left font-gotham font-semibold pt-4">We are supporting financially all RED CROSS
                    activities in
                    Lithuania.</p>
            </div>
            <div class="w-1/4 flex items-center justify-center">
                <img src="{{ asset('images/cross_comitee.png') }}" class="w-[158] h-[155px]" alt="hand_wing"/>
            </div>
        </div>
    </div>

    <div
        class="container mx-auto rounded-[24px] h-[715px] object-cover"
        style="background-image: url('{{ asset('images/our_clients.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">

        <div class="w-[920px] px-[75px] py-20">
            <h4 class="font-metrophobic text-6xl text-white font-extralight">Our Certifications & Honors</h4>
            <p class="text-white pt-4">Find our ISO certifications and other our services quality assuring
                information.</p>
            <div id="default-carousel" class="relative w-[720px] pt-8" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out flex justify-between items-center" data-carousel-item>
                        <img src="{{ asset('images/iso1.png') }}" alt="..."
                             class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                        <img src="{{ asset('images/iso2.png') }}" alt="..."
                             class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                        <img src="{{ asset('images/iso3.png') }}" alt="..."
                             class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out flex justify-between items-center" data-carousel-item>
                        <img src="{{ asset('images/iso1.png') }}" alt="..."
                             class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                        <img src="{{ asset('images/iso2.png') }}" alt="..."
                             class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                        <img src="{{ asset('images/iso3.png') }}" alt="..."
                             class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div
                    class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse top-120">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-70 start-70 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
                </button>
                <button type="button"
                        class="absolute top-70 end-70 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
                </button>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-visible overflow-y-hidden">
        <div
            class="container mx-auto relative ">
            <div class="px-[75px] py-10 w-full">
                <div class="flex items-center">
                    <h3
                        class="w-1/2 font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                        Our Latest
                        <span
                            class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                           news
                                       </span>
                    </h3>
                    <div class="flex items-center w-1/2 justify-end">
                        <button
                            class="border-[#F06449] border-[2px]  text-[#F06449] border font-light text-base rounded-full h-12 w-[255px] flex items-center justify-center gap-2 font-hankenGrotesk">
                            Read more on <span class="font-medium"> Linkedin</span>
                        </button>
                        <p class="text-[#818181] pl-8 pr-3 font-light">also follow us on:</p>
                        <div class="flex gap-2">
                            <i class="text-[#F06449] text-[21px] hover:text-[#FFC005]  fab fa-youtube border-[2px] rounded-full p-3"></i>
                            <i class="text-[#F06449] text-[21px] hover:text-[#FFC005] fab fa-twitter border-[2px] rounded-full p-3"></i>
                            <i class="text-[#F06449] text-[21px] hover:text-[#FFC005] fab fa-facebook border-[2px] rounded-full p-3"></i>
                        </div>
                    </div>
                </div>

                <div id="default-carousel-news" data-carousel="static">

                    <div class="relative overflow-hidden rounded-lg md:h-235">
                        <div class="flex flex-col gap-10 mt-10" data-carousel-item>
                            <div class="flex">
                                <div
                                    class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                    <img src="{{ asset('images/news1.png') }}" alt="news1"
                                         class="w-full h-full object-cover"/>
                                </div>
                                <div class="flex flex-col pl-12 w-[706px]">
                                    <p class="text-xl text-[#818181]">3 March, 2025</p>
                                    <p class="text-[#0A1018] font-medium text-[28px] pt-8">How Do Wind Turbines Save on
                                        Electricity Bills?</p>
                                    <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up
                                        to
                                        40%
                                        on energy costs with wind turbine solutions. Learn how businesses and homes can
                                        save
                                        up
                                        to 40% on energy costs with wind turbine solutions.</p>
                                </div>
                                <div class="ml-26  pt-16">
                                    <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                         class="w-[34px] h-[34px] object-cover "/>
                                </div>
                            </div>
                            <div class="flex">
                                <div
                                    class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                    <img src="{{ asset('images/news1.png') }}" alt="news1"
                                         class="w-full h-full object-cover"/>
                                </div>
                                <div class="flex flex-col gap-2 pl-12 w-[706px]">
                                    <p class="text-xl text-[#818181]">3 March, 2025</p>
                                    <p class="text-[#0A1018] font-medium text-[28px] pt-8">How Do Wind Turbines Save on
                                        Electricity Bills?</p>
                                    <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up
                                        to
                                        40%
                                        on energy costs with wind turbine solutions. Learn how businesses and homes can
                                        save
                                        up
                                        to 40% on energy costs with wind turbine solutions.</p>
                                </div>
                                <div class="ml-26  pt-16">
                                    <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                         class="w-[34px] h-[34px] object-cover"/>
                                </div>
                            </div>
                            <div class="flex">
                                <div
                                    class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                    <img src="{{ asset('images/news1.png') }}" alt="news1"
                                         class="w-full h-full object-cover"/>
                                </div>
                                <div class="flex flex-col gap-2 pl-12 w-[706px]">
                                    <p class="text-xl text-[#818181]">3 March, 2025</p>
                                    <p class="text-[#0A1018] font-medium text-[28px] pt-8">How Do Wind Turbines Save on
                                        Electricity Bills?</p>
                                    <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up
                                        to
                                        40%
                                        on energy costs with wind turbine solutions. Learn how businesses and homes can
                                        save
                                        up
                                        to 40% on energy costs with wind turbine solutions.</p>
                                </div>
                                <div class="ml-26  pt-16">
                                    <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                         class="w-[34px] h-[34px] object-cover"/>
                                </div>
                            </div>
                        </div>
                        <div class="hidden flex flex-col gap-10 mt-10" data-carousel-item>
                            <div class="flex">
                                <div
                                    class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                    <img src="{{ asset('images/news1.png') }}" alt="news1"
                                         class="w-full h-full object-cover"/>
                                </div>
                                <div class="flex flex-col pl-12 w-[706px]">
                                    <p class="text-xl text-[#818181]">3 March, 2025</p>
                                    <p class="text-[#0A1018] font-medium text-[28px] pt-8">How Do Wind Turbines Save on
                                        Electricity Bills?</p>
                                    <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up
                                        to
                                        40%
                                        on energy costs with wind turbine solutions. Learn how businesses and homes can
                                        save
                                        up
                                        to 40% on energy costs with wind turbine solutions.</p>
                                </div>
                                <div class="ml-26  pt-16">
                                    <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                         class="w-[34px] h-[34px] object-cover "/>
                                </div>
                            </div>
                            <div class="flex">
                                <div
                                    class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                    <img src="{{ asset('images/news1.png') }}" alt="news1"
                                         class="w-full h-full object-cover"/>
                                </div>
                                <div class="flex flex-col gap-2 pl-12 w-[706px]">
                                    <p class="text-xl text-[#818181]">3 March, 2025</p>
                                    <p class="text-[#0A1018] font-medium text-[28px] pt-8">How Do Wind Turbines Save on
                                        Electricity Bills?</p>
                                    <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up
                                        to
                                        40%
                                        on energy costs with wind turbine solutions. Learn how businesses and homes can
                                        save
                                        up
                                        to 40% on energy costs with wind turbine solutions.</p>
                                </div>
                                <div class="ml-26  pt-16">
                                    <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                         class="w-[34px] h-[34px] object-cover"/>
                                </div>
                            </div>
                            <div class="flex">
                                <div
                                    class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                    <img src="{{ asset('images/news1.png') }}" alt="news1"
                                         class="w-full h-full object-cover"/>
                                </div>
                                <div class="flex flex-col gap-2 pl-12 w-[706px]">
                                    <p class="text-xl text-[#818181]">3 March, 2025</p>
                                    <p class="text-[#0A1018] font-medium text-[28px] pt-8">How Do Wind Turbines Save on
                                        Electricity Bills?</p>
                                    <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up
                                        to
                                        40%
                                        on energy costs with wind turbine solutions. Learn how businesses and homes can
                                        save
                                        up
                                        to 40% on energy costs with wind turbine solutions.</p>
                                </div>
                                <div class="ml-26  pt-16">
                                    <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                         class="w-[34px] h-[34px] object-cover"/>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse top-226">
                            <button type="button"
                                    class="w-3 h-3 rounded-full"
                                    style="background-color: #00403D;"
                                    aria-current="true"
                                    aria-label="Slide 1"
                                    data-carousel-slide-to="0"></button>

                            <button type="button"
                                    class="w-3 h-3 rounded-full"
                                    style="background-color: #D9D9D9;"
                                    aria-current="false"
                                    aria-label="Slide 2"
                                    data-carousel-slide-to="1"></button>
                        </div>

                        <button type="button"
                                class="absolute top-110 start-120 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white border transition-all duration-200 ease-in-out group-hover:border-[3px] focus:outline-none focus:ring-4"
                                style="border: 2px solid #5A6F6E;"
                                onmouseover="this.style.borderColor='#00403D'; this.style.borderWidth='3px';"
                                onmouseout="this.style.borderColor='#5A6F6E'; this.style.borderWidth='2px';"
                            >
                                <svg class="w-4 h-4 text-[#5A6F6E] rtl:rotate-180" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>

                        <button type="button"
                                class="absolute top-110 end-120 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full border transition-all duration-200 ease-in-out group-hover:border-[3px] focus:outline-none focus:ring-4"
                            style="background-color: white; border: 2px solid #5A6F6E;"
                            onmouseover="this.style.borderColor='#00403D'; this.style.borderWidth='3px';"
                            onmouseout="this.style.borderColor='#5A6F6E'; this.style.borderWidth='2px';"
                        >
                            <svg class="w-4 h-4 text-[#5A6F6E] rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                        </button>
                    </div>
                </div>

            </div>
            <img class="w-[162px] h-[430px] absolute right-[-50px] top-[-70px]"
                 src="{{asset('images/hangin_guy_3.png')}}">
        </div>
    </div>

    <div class="container mx-auto h-120"
         style="background-image: url('{{ asset('images/neptunas.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="px-[75px] py-10 w-full">
            <div class="flex items-center">
                <div>
                    <h3
                        class="font-bold text-[48px] leading-[64.8px] tracking-[-0.05em] text-[#013538] font-['Space_Grotesk']">
                        We Are Sponsoring NEPTUNAS <br> Basketball Team
                    </h3>
                    <p class="text-[26px] font-bold text text-[#013538] pt-8">dzp is proudly supporting this brand and
                        its events.</p>
                </div>
                <img src="{{asset('images/neptunas_logo.png')}}" class="pt-20 pl-8">
            </div>
        </div>
    </div>

    <div
        class="container mx-auto">
        <div class="px-[75px] py-10 w-full">
            <div class="flex flex-col items-start">
                <h3
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                    Projects
                    <span
                        class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                           we are proud of
                                       </span>
                </h3>
                <p class="pt-6 text-[#818181] text-base">Discover the latest trends, technologies, and solutions shaping
                    the future of wind energy.</p>
            </div>
            <div class="pt-12 flex gap-7">
                <div class="flex flex-col w-1/3">
                    <img src="{{ asset('images/proud_of_maximizing.jpg') }}"
                         class="w-[396px] h-[396px] object-cover rounded-[20px]" alt="projects">
                    <p class="text-[#191919] text-base pt-8 font-normal">Norway, 2023, March</p>
                    <p class="text-[#191919] text-3xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                        Efficiency</p>
                    <p class="text-[#191919] text-xl pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                    <span class="pt-8">Client:</span>
                    <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/telia_sonera.png')}}">
                </div>
                <div class="flex flex-col w-1/3">
                    <img src="{{ asset('images/best_projects_2.jpg') }}"
                         class="w-[396px] h-[396px] object-cover rounded-[20px]" alt="projects">
                    <p class="text-[#191919] text-base pt-8 font-normal">Norway, 2023, March</p>
                    <p class="text-[#191919] text-3xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                        Efficiency</p>
                    <p class="text-[#191919] text-xl pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                    <span class="pt-8">Client:</span>
                    <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/skanska.png')}}">
                </div>
                <div class="flex flex-col w-1/3">
                    <img src="{{ asset('images/best_projects_3.jpg') }}"
                         class="w-[396px] h-[396px] object-cover rounded-[20px]" alt="projects">
                    <p class="text-[#191919] text-base pt-8 font-normal">Norway, 2023, March</p>
                    <p class="text-[#191919] text-3xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                        Efficiency</p>
                    <p class="text-[#191919] text-xl pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                    <span class="pt-8">Client:</span>
                    <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/metso.png')}}">
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto flex-start mb-[52px] mt-2 flex-col bg-[#F9F8F2] h-[911px] rounded-[24px]">
        <div class="px-[75px] py-14">
            <h3
                class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                Our Values
                <span
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                & Mission
                            </span>
            </h3>
            <div class="flex pt-15 gap-25">
                <img class="w-1/3" src="{{asset('images/values_and_mission.png')}}">
                <div class="w-2/3 flex flex-wrap gap-6">
                    <div class="h-[222px] w-[356px]">
                        <div class="w-[89px] h-[100px] pt-2 pl-2 group">
                            <svg class="text-[#F06449] group-hover:text-[#FFC005]" width="90" height="100"
                                 viewBox="0 0 90 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.5314 6.93558C28.9533 6.50676 29.4651 5.03356 30.1637 4.33499C35.9597 -1.48175 52.8151 -1.31575 58.9223 4.05834C60.1949 5.1788 60.5892 6.7765 61.433 7.54423C62.1454 8.19438 64.2549 8.98977 65.2647 9.70908C72.9143 15.1247 78.4544 21.972 81.3247 31.0187C82.1962 33.7714 82.5558 38.7098 83.5518 40.7778C84.8383 43.4337 89.2233 44.4505 89.2717 48.8078C89.327 53.8223 84.7414 52.0655 81.6705 52.1485C55.5125 52.8332 29.2576 52.3836 3.05807 52.5358C-0.0128376 52.688 -0.351744 49.126 0.243072 46.8643C0.94855 44.1946 4.76644 43.1225 5.68632 41.0268C6.50247 39.1525 6.70304 35.3899 7.29786 33.1213C10.0783 22.5391 15.7498 15.9201 24.2916 9.57075C25.2737 8.83761 27.9919 7.49582 28.5383 6.9425L28.5314 6.93558ZM61.765 12.3166V23.4244C61.765 24.5726 58.2376 24.5726 58.2376 23.4244V9.6745C58.2376 6.36152 51.4387 4.252 48.7966 3.95459C44.4254 3.46352 32.6813 3.73326 31.5262 9.40476C30.8277 12.8284 32.3216 20.9345 31.2081 23.5213C30.6478 24.8285 27.9158 24.2751 27.9158 23.4244V11.9638C27.072 12.0814 26.249 12.8146 25.5435 13.2918C19.1734 17.6353 14.0898 24.0815 11.593 31.4268C10.5002 34.636 10.1474 40.5288 8.94398 42.8804C7.74051 45.232 4.44828 46.0136 3.93646 48.628H85.3708C85.0527 46.4493 82.2446 45.066 80.9581 43.3507C79.1114 40.8885 79.2152 37.2366 78.4198 34.2556C76.082 25.4509 70.0924 16.3558 61.7511 12.3235L61.765 12.3166Z"
                                    fill="currentColor"/>
                                <path
                                    d="M14.0897 57.5293C14.6638 58.1034 14.7053 65.4279 14.9197 67.0948C19.2909 100.301 60.4576 108.026 72.347 75.9548C74.7678 69.4256 74.3113 65.1928 75.1966 58.6913C75.5009 56.4365 78.1361 56.7408 78.6133 58.3939C79.139 60.1991 78.5718 65.6838 78.2883 67.7933C72.1603 112.736 14.2626 109.341 11.005 65.7184C10.8943 64.259 10.7767 58.9472 11.2332 57.8682C11.6205 56.9691 13.4326 56.8584 14.0897 57.5224V57.5293Z"
                                    fill="currentColor"/>
                                <path
                                    d="M46.2508 30.2931H54.184C54.26 30.2931 55.1523 31.1784 55.2353 31.3582C57.2964 35.7986 46.728 33.6061 46.4168 34.1525C45.656 35.8677 47.1153 41.3871 45.898 42.4591C44.8398 43.3929 42.7303 42.4799 42.7303 41.0482V34.1732H35.5026C34.0017 34.1732 34.0017 30.2931 35.5026 30.2931H42.7303V23.0654C42.7303 22.5881 43.8369 21.6198 44.3972 21.5368C47.9246 20.9904 46.2784 28.315 46.2577 30.2931H46.2508Z"
                                    fill="currentColor"/>
                            </svg>
                        </div>
                        <p class="text-[#191919] font-medium pt-4 text-[32px]">Safety First</p>
                        <p class="text-[#191919] font-medium text-base pt-3">We work to reduce carbon emissions and
                            support the global transition to clean energy.</p>
                    </div>
                    <div class="h-[222px] w-[356px]">
                        <div class="w-[89px] h-[100px] pt-2 pl-2 group">
                            <svg class="text-[#F06449] group-hover:text-[#FFC005]" width="111" height="108"
                                 viewBox="0 0 111 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.2785 10.1775C30.9703 10.2615 31.3853 11.8009 31.1646 12.6047C29.951 17.0547 27.8758 22.9704 27.2926 27.3836C27.0299 29.3801 30.4659 32.5271 25.748 32.7057C25.2068 31.2399 24.1403 29.2277 24.1666 27.6516C24.2191 24.1893 26.5886 17.3384 27.4817 13.6502C28.3276 10.1722 28.8635 5.80105 29.9773 2.50167C31.0911 -0.797711 34.1856 -0.844995 35.168 2.42812V32.8738C35.3099 33.6619 36.5025 33.8248 37.1277 34.3186C38.3571 35.2853 39.6916 37.3711 39.8649 38.9315C39.9543 39.751 39.5445 40.9331 39.7441 41.3902C40.0488 42.0837 49.264 47.3585 50.7298 48.2727C51.6019 48.8191 58.6946 53.8102 59.0466 53.4687C59.1622 52.9748 58.7681 52.8487 58.5212 52.5493C57.6964 51.5406 55.8838 49.8804 54.8593 48.8611C51.1501 45.1782 47.1835 41.6844 43.4375 37.9805C42.4551 35.8475 45.518 36.0261 46.8105 36.7038C50.982 40.7598 55.2744 44.6844 59.3198 48.8664C61.0693 50.6737 64.5788 53.9048 65.866 55.6963C66.6804 56.8311 66.9063 57.761 65.9921 58.9694C64.9098 60.4037 63.6174 59.9466 62.2777 59.2846C58.6053 57.4721 54.1553 54.0203 50.5722 51.819C46.9891 49.6177 43.1171 47.3743 39.3868 45.173C38.8615 44.863 38.4884 43.8753 37.9053 44.5372C37.4429 45.2623 38.2678 49.5178 38.3203 50.6999C38.9823 67.0655 39.4604 83.3995 40.1381 99.7914C40.2275 101.972 40.7003 104.341 40.6162 106.548C40.3956 107.43 39.8229 107.688 38.9718 107.788C36.2188 108.108 29.9825 108.029 27.1455 107.793C26.7462 107.761 26.2313 107.756 25.8898 107.541C25.2331 107.126 25.4065 103.332 25.4432 102.392C25.9266 88.7374 27.3609 75.1038 28.0754 61.465C28.254 58.029 28.1385 54.53 28.6008 51.1045L3.73978 59.9729C0.282778 60.9921 -1.33539 57.6139 1.32829 55.4599L25.5851 39.8299C26.5781 38.9157 26.4205 37.6075 27.0982 36.3624C28.0649 34.5866 30.3135 33.3677 32.2785 33.0104V10.1775ZM30.2925 37.3133C26.6674 41.9366 33.1663 45.7929 36.0927 42.2046C39.3028 38.2747 33.077 33.7617 30.2925 37.3133ZM29.867 46.8699C30.24 45.6563 29.0158 45.3936 28.3328 44.6949C27.6498 43.9961 27.2085 42.7299 26.1683 43.0189L9.18272 54.5247L29.867 46.8699ZM28.8635 104.641H36.8703C37.7424 103.842 37.0226 102.618 36.9911 101.635C36.4552 84.9442 36.077 68.1688 35.1628 51.509C35.0682 49.7648 34.4745 47.9154 34.6427 46.1239C32.4203 46.0556 32 45.7719 31.7583 48.0993C31.296 52.5598 31.4956 57.5089 31.2277 62.0008C30.5027 74.0268 29.2733 86.121 28.8582 98.2047C28.7847 100.343 28.937 102.508 28.8687 104.646L28.8635 104.641Z"
                                    fill="currentColor"/>
                                <path
                                    d="M82.4052 46.6544C84.4437 46.4705 86.8657 46.9013 88.8464 46.6701C89.2299 46.6229 89.5189 46.6386 89.75 46.2656V40.229C89.75 39.3201 91.799 39.588 92.3769 40.0977V46.6596C94.9408 46.7384 97.8987 46.5651 100.116 47.9731C103.126 49.8802 103.583 54.1515 103.394 57.4194C103.61 57.6348 108.559 57.1777 109.515 57.4667C110.981 57.9133 110.187 60.041 109.567 60.041H103.399V67.9112H109.961L110.503 69.3403C110.534 69.6555 109.657 70.5329 109.567 70.5329H103.399V78.403H109.567C109.788 78.403 110.492 79.4853 110.482 79.8531C110.413 82.212 103.941 80.1158 103.258 81.5553C103.174 81.7287 103.452 83.9353 103.41 84.5815C102.932 91.6794 98.9389 93.1767 92.3769 93.0979L92.2508 99.3972C91.7833 100.353 89.4926 100.043 89.4926 99.0032V93.0979H82.4052V99.2658C82.4052 99.891 80.1461 100.979 79.4526 99.3289C79.0533 98.378 79.2424 96.1976 79.2372 95.0576C79.2372 94.2222 79.7941 93.4552 78.985 92.9613L71.9029 93.1032V97.695C71.9029 97.8211 72.1813 98.0995 72.1235 98.6669C71.8713 101.152 69.0133 100.033 69.0133 99.2658V93.2292C69.0133 92.5095 67.4109 93.0821 67.0431 93.0979C63.8751 93.2082 60.397 92.9088 58.2482 90.3502C57.8962 89.9299 56.6773 88.0858 56.6773 87.718V81.4187L56.2833 81.0247H49.8526C49.4954 80.4573 49.4691 78.403 50.2467 78.403H56.4146C56.6773 76.3646 56.9295 73.475 56.6878 71.4365C56.6406 71.053 56.6563 70.764 56.2833 70.5329H50.2467C49.4691 70.5329 49.4954 68.4734 49.8526 67.9112H56.2833C57.0346 67.9112 56.4199 65.899 56.4041 65.4314C56.3674 64.2651 56.9558 60.041 55.2325 60.041H49.8526C48.5602 57.1094 51.4918 57.0306 53.6459 57.4299C54.0137 57.4982 59.2254 60.6873 59.3042 61.013L59.2937 85.1069C59.8559 87.8861 62.052 90.0717 64.9363 90.2241C74.5508 89.7092 84.8115 90.8755 94.3524 90.2241C98.1141 89.9666 100.2 88.1331 100.515 84.3188C99.9424 74.8462 101.245 64.5488 100.515 55.176C100.294 52.3337 98.713 50.3005 95.9233 49.5335C86.4454 50.2743 75.549 48.5878 66.2393 49.5335C65.2988 49.628 64.4687 50.2585 63.6859 50.0273C63.3444 49.9275 61.1168 47.7104 61.3953 47.4477C63.8803 46.7437 66.4126 46.5388 69.008 46.6596C69.2549 46.418 68.6718 41.3323 69.1394 40.3603C69.7436 39.0994 71.8976 39.7246 71.8976 40.4917V46.2656C71.8976 46.3339 72.3967 46.8225 72.5859 46.8593L79.2582 46.5388L79.4946 46.0292C79.1426 44.5791 78.5804 39.3359 80.9394 39.5618C81.3019 39.5985 82.3947 40.6441 82.3947 40.7544V46.6596L82.4052 46.6544Z"
                                    fill="currentColor"/>
                                <path
                                    d="M71.9072 78.6658C71.6813 78.0248 71.4396 77.7201 71.3661 76.9793C71.0509 73.9216 71.0246 66.0672 71.3766 63.0515C71.5184 61.8327 72.1384 61.2232 73.3468 61.0814C76.1733 60.7504 81.6951 60.9027 84.653 61.0761C86.4498 61.1812 88.131 60.9921 88.4199 63.0831C88.793 65.7835 88.7614 73.9426 88.4462 76.7061C88.3937 77.158 87.9996 78.6763 87.5268 78.6763H71.9125L71.9072 78.6658ZM85.2939 64.2336H74.2714V76.0442H85.2939V64.2336Z"
                                    fill="currentColor"/>
                            </svg>
                        </div>
                        <p class="text-[#191919] font-medium pt-4 text-[32px]">Advanced Technology</p>
                        <p class="text-[#191919] font-medium text-base pt-3">We continue to innovate with the latest
                            technologies to improve the efficiency, reliability and performance of wind turbines.</p>
                    </div>
                    <div class="h-[222px] w-[356px]">
                        <div class="w-[89px] h-[100px] pt-2 pl-2 group">
                            <svg class="text-[#F06449] group-hover:text-[#FFC005]" width="104" height="109"
                                 viewBox="0 0 104 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50.8615 82.9857C53.4315 83.4116 53.1861 87.0935 50.5005 87.0429C35.7008 86.0034 19.0603 88.4002 4.48443 87.0502C1.65445 86.7903 0.766477 85.5052 0.362194 82.7113C-2.1357 65.3272 8.52726 51.4733 24.9152 47.1056C33.3473 44.8604 50.5582 44.6077 58.4057 48.5783C61.1346 49.9644 60.9541 53.0832 57.9509 52.7439C56.1605 52.5417 52.6374 50.8741 50.32 50.4048C33.6 47.0262 9.01817 51.2928 4.8454 70.8283C4.10902 74.2864 3.15608 79.8814 4.85984 82.9857H50.8542H50.8615Z"
                                    fill="currentColor"/>
                                <path
                                    d="M58.3841 19.8317C58.3841 30.2564 49.9303 38.7103 39.5055 38.7103C29.0808 38.7103 20.627 30.2564 20.627 19.8317C20.627 9.40697 29.0808 0.953125 39.5055 0.953125C49.9303 0.953125 58.3841 9.40697 58.3841 19.8317ZM54.4207 19.8461C54.4207 11.6305 47.7644 4.9743 39.5488 4.9743C31.3332 4.9743 24.677 11.6305 24.677 19.8461C24.677 28.0617 31.3332 34.718 39.5488 34.718C47.7644 34.718 54.4207 28.0617 54.4207 19.8461Z"
                                    fill="currentColor"/>
                                <path
                                    d="M92.0912 67.4001C92.0912 77.0668 84.2582 84.8997 74.5915 84.8997C64.9248 84.8997 57.0918 77.0668 57.0918 67.4001C57.0918 57.7334 64.9248 49.9004 74.5915 49.9004C84.2582 49.9004 92.0912 57.7334 92.0912 67.4001ZM88.2865 67.3856C88.2865 59.827 82.1573 53.6978 74.5987 53.6978C67.04 53.6978 60.9108 59.827 60.9108 67.3856C60.9108 74.9443 67.04 81.0735 74.5987 81.0735C82.1573 81.0735 88.2865 74.9443 88.2865 67.3856Z"
                                    fill="currentColor"/>
                                <path
                                    d="M72.679 89.3539C82.353 89.1445 97.0154 91.6063 102.119 100.905C102.921 102.363 105.541 108.254 102.733 108.752C99.6577 109.301 100.098 105.67 99.3184 103.699C93.8678 89.8881 53.9593 89.4477 49.3678 105.041C48.9635 106.406 49.5122 108.449 47.4041 108.925C43.6934 109.77 45.7581 103.179 46.5595 101.497C50.7106 92.7542 63.8714 89.5344 72.679 89.3466V89.3539Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>
                        <p class="text-[#191919] font-medium pt-4 text-[32px]">Customer Centricity</p>
                        <p class="text-[#191919] font-medium text-base pt-3">We focus on customer satisfaction by
                            providing professional service and ongoing technical support.</p>
                    </div>
                    <div class="h-[222px] w-[356px]">
                        <div class="w-[89px] h-[100px] pt-2 pl-2 group">
                            <svg class="text-[#F06449] group-hover:text-[#FFC005]" width="80" height="109"
                                 viewBox="0 0 80 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M65.4254 38.2894C65.4254 24.1957 53.9979 12.7607 39.8968 12.7607C25.7957 12.7607 14.3682 24.1883 14.3682 38.2894C14.3682 52.3904 25.7957 63.818 39.8968 63.818C53.9979 63.818 65.4254 52.3904 65.4254 38.2894ZM39.882 60.2631C27.7583 60.2631 17.9305 50.4352 17.9305 38.3116C17.9305 26.1879 27.7583 16.3601 39.882 16.3601C52.0056 16.3601 61.8334 26.1879 61.8334 38.3116C61.8334 50.4352 52.0056 60.2631 39.882 60.2631Z"
                                    fill="currentColor"/>
                                <path
                                    d="M45.3248 31.5188C42.8882 29.9117 42.7475 23.5129 39.1556 24.6164C37.7336 25.0533 36.5634 30.0746 34.9415 31.3485C32.9345 32.9186 28.9723 32.2224 27.3725 33.5925C24.3213 36.2142 31.1052 39.4359 31.6384 41.7984C32.2383 44.4349 30.0906 48.0195 30.6534 49.945C31.5347 52.9519 37.2004 48.8934 38.8889 48.5083C42.429 47.7084 45.9691 51.7151 47.9613 51.1892C51.257 50.3153 47.7688 44.3387 48.4131 41.8206C48.9834 39.584 54.1972 37.0067 53.5603 34.6368C52.9678 32.4372 47.2429 32.7852 45.3248 31.5188ZM47.5762 37.177C44.5101 40.7467 44.3176 42.0798 45.6877 46.8197C41.9032 44.309 38.7112 44.5016 34.749 46.442C36.0006 41.6132 34.749 39.1396 31.3496 35.881C36.008 35.9921 38.5927 33.9036 39.6592 29.4599C40.0961 29.1044 41.8143 33.1704 42.1328 33.5925C43.6362 35.5625 46.3912 35.8439 48.7167 35.881C48.9982 36.8956 48.0946 36.5845 47.5836 37.1844L47.5762 37.177Z"
                                    fill="currentColor"/>
                                <path
                                    d="M64.9435 66.5649C64.8843 65.5132 68.4096 64.78 69.402 63.9802C72.0237 61.8546 71.2831 57.5443 71.7127 54.5893C72.12 51.8046 75.5934 50.1161 77.1265 47.9239C80.5036 43.11 75.9045 40.7919 75.4527 36.4371C75.0528 32.5415 77.8893 28.9866 76.7932 25.2836C75.9045 22.2842 70.6462 20.7363 69.2538 18.0998C67.8541 15.4484 69.2094 11.6713 66.4025 9.24956C63.9659 7.14625 61.122 7.88685 58.3151 7.13884C53.7678 5.92425 53.4123 -0.881898 47.4134 0.0956992C45.3916 0.421565 42.4884 2.53228 40.5036 2.62856C40.3555 2.62856 40.1926 2.62856 40.037 2.61375C40.037 2.61375 40.0074 2.61375 39.9926 2.61375C39.9778 2.61375 39.963 2.61375 39.9482 2.61375C39.7926 2.62856 39.6297 2.64338 39.4816 2.63597C37.4968 2.53969 34.5862 0.436377 32.5717 0.103105C26.5729 -0.874492 26.2174 5.93165 21.6701 7.14625C18.8706 7.89425 16.0193 7.14625 13.5827 9.25697C10.7758 11.6787 12.1311 15.4558 10.7313 18.1072C9.33901 20.7437 4.08813 22.2916 3.192 25.291C2.0885 29.0015 4.93242 32.5489 4.53249 36.4445C4.08073 40.7993 -0.525829 43.1174 2.85873 47.9313C4.39178 50.1161 7.86521 51.8046 8.27254 54.5967C8.70209 57.5517 7.96149 61.862 10.5832 63.9876C11.5682 64.7874 15.1009 65.5206 15.0417 66.5723L0 97.5739C0.451768 99.0255 1.38493 99.3662 2.8217 99.2996C6.42844 99.1292 10.6869 96.9592 14.464 97.0111C15.3897 97.2407 19.1224 107.017 20.374 108.179C21.0776 108.839 21.7663 108.95 22.6625 108.542L40 75.9261L57.3375 108.542C58.2337 108.95 58.9224 108.839 59.626 108.179C60.8776 107.017 64.6103 97.2407 65.536 97.0111C69.3057 96.9518 73.5716 99.1292 77.1783 99.2996C78.6151 99.3662 79.5482 99.0329 80 97.5739L64.9509 66.5575L64.9435 66.5649ZM21.8996 103.44L17.8115 95.641C15.6341 90.5604 8.56878 95.3818 4.5399 95.5151L18.6854 67.224C19.9296 67.1351 22.8402 72.6452 23.9733 73.6302C27.6912 76.8519 31.9867 73.2377 36.2451 74.0079L21.8996 103.447V103.44ZM40.0444 71.7343C40.0444 71.7343 40.0148 71.7343 40 71.7343C39.9852 71.7343 39.9704 71.7343 39.9556 71.7343C39.9185 71.7491 39.8815 71.7491 39.8371 71.7491C38.5336 71.7491 36.9635 70.7271 35.3268 70.5938C32.7717 70.379 28.3133 72.0527 26.9209 71.4603C25.3731 70.8011 23.0624 65.9798 20.7517 64.4023C18.8558 63.1137 13.6419 62.2768 12.6717 61.1585C11.5016 59.8032 12.6347 53.782 10.2055 50.4123C9.3242 49.1903 5.68043 46.4205 5.37678 45.428C4.60655 42.8878 8.25032 38.9181 8.33179 35.6743C8.40585 32.9192 5.45825 28.409 6.621 26.0613C7.14682 24.9874 12.0422 22.5212 13.4716 20.0772C14.8047 17.7887 14.6936 12.8193 16.0489 11.7084C17.9967 10.1161 22.8772 11.8565 26.6469 8.33862C27.8911 7.17587 29.639 3.82094 31.2535 3.48766C32.6828 3.19142 37.2746 6.08718 39.8445 6.08718C39.8963 6.08718 39.9556 6.08718 40.0074 6.07978C40.0592 6.07978 40.1185 6.08718 40.1703 6.08718C42.7402 6.08718 47.332 3.19142 48.7613 3.48766C50.3685 3.82094 52.1163 7.17587 53.3679 8.33862C57.1376 11.8565 62.0182 10.1161 63.9659 11.7084C65.3212 12.8193 65.2102 17.7887 66.5432 20.0772C67.9726 22.5212 72.868 24.9874 73.3938 26.0613C74.5492 28.409 71.609 32.9192 71.683 35.6743C71.7645 38.9181 75.4083 42.8878 74.638 45.428C74.3344 46.4205 70.6906 49.1903 69.8093 50.4123C67.3801 53.782 68.5206 59.8032 67.3431 61.1585C66.3729 62.2768 61.159 63.1137 59.2631 64.4023C56.9524 65.9724 54.6491 70.8011 53.0939 71.4603C51.6941 72.0527 47.2431 70.379 44.688 70.5938C43.0439 70.7271 41.4738 71.7491 40.1777 71.7491C40.1407 71.7491 40.1037 71.7491 40.0592 71.7417L40.0444 71.7343ZM62.1811 95.641L58.0929 103.44L43.7475 74.0005C48.0059 73.2303 52.3014 76.8444 56.0193 73.6228C57.1524 72.6378 60.0555 67.1277 61.3072 67.2166L75.4527 95.5077C71.4238 95.3818 64.3585 90.553 62.1811 95.6336V95.641Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>
                        <p class="text-[#191919] font-medium pt-4 text-[32px]">Quality & Innovation</p>
                        <p class="text-[#191919] font-medium text-base pt-3">We ensure every product and service meets
                            the highest quality standards, providing reliable and durable solutions for our
                            customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto flex-start mb-[52px] mt-2 bg-[#E4E9E9] rounded-[24px]">

        <div class="px-[75px] py-20 w-full flex">
            <div class="flex flex-col items-start w-1/3">
                <h3
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                    Fill in the <br>
                    <span
                        class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                            form to:
                    </span>
                </h3>
                <div class="gap-5 flex flex-col mt-4 w-full">
                    <div class="flex items-center gap-4 h-[70px] cursor-pointer" id="send-us-your-cv-section">
                        <div class="group pl-7">
                            <svg class="text-[#00403D]" width="28" height="32" viewBox="0 0 28 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 3.1748C13.0139 3.1748 12.0925 3.36285 11.2324 3.73633C10.4756 4.06499 9.80572 4.5003 9.22168 5.04297L8.97656 5.28223C8.33561 5.93881 7.82394 6.70403 7.44141 7.58008C7.0621 8.44873 6.87109 9.37928 6.87109 10.375C6.87109 11.3717 7.05743 12.3036 7.42773 13.1729C7.79994 14.0465 8.31043 14.8047 8.95898 15.4502L9.20801 15.6875C9.80049 16.2252 10.4757 16.6623 11.2344 17C12.0939 17.3826 13.015 17.5752 14 17.5752C14.9861 17.5752 15.9075 17.3872 16.7676 17.0137L17.0869 16.8662C17.8187 16.5071 18.4639 16.0409 19.0234 15.4678C19.6644 14.8112 20.1761 14.046 20.5586 13.1699C20.9379 12.3013 21.1289 11.3707 21.1289 10.375C21.1289 9.37825 20.9426 8.44638 20.5723 7.57715C20.2001 6.70355 19.6896 5.94532 19.041 5.2998C18.4718 4.73334 17.82 4.26675 17.085 3.90039L16.7656 3.75C15.9061 3.36741 14.985 3.1748 14 3.1748ZM23.5801 10.7061C23.555 11.4756 23.4422 12.2267 23.2412 12.959C23.0117 13.7952 22.6769 14.582 22.2373 15.3184C21.7988 16.0528 21.2758 16.7226 20.668 17.3262C20.2028 17.7882 19.6876 18.1983 19.125 18.5596C20.2385 19.0063 21.2571 19.5876 22.1787 20.3047C23.2573 21.144 24.1789 22.1234 24.9414 23.2432C25.7031 24.3618 26.2861 25.5755 26.6914 26.8828C27.0973 28.1923 27.2998 29.5651 27.2998 31C27.2998 31.1657 27.1657 31.2998 27 31.2998H25.1426C24.977 31.2997 24.8428 31.1656 24.8428 31C24.8428 29.4343 24.5684 27.9892 24.0234 26.6611C23.4768 25.329 22.7147 24.1704 21.7373 23.1836C20.76 22.197 19.6187 21.4332 18.3105 20.8916C17.005 20.3511 15.5682 20.069 13.9971 20.0498C12.989 20.0501 12.0205 20.1786 11.0908 20.4346C10.2737 20.6596 9.50862 20.9644 8.79492 21.3486L8.49219 21.5186C7.69321 21.9836 6.96431 22.5479 6.30566 23.2129C5.64701 23.8779 5.08778 24.6139 4.62695 25.4209C4.22369 26.1272 3.89465 26.8895 3.6416 27.708L3.53809 28.0625C3.27492 29.0114 3.14782 29.9894 3.15723 30.9971C3.15797 31.0771 3.12657 31.1541 3.07031 31.2109C3.01404 31.2677 2.93737 31.2997 2.85742 31.2998H1C0.834315 31.2998 0.700195 31.1657 0.700195 31C0.700195 29.5644 0.907239 28.1909 1.32324 26.8809C1.73824 25.574 2.32702 24.3656 3.08887 23.2568C3.85163 22.1467 4.77267 21.1761 5.85156 20.3467C6.77382 19.6377 7.79304 19.0508 8.90723 18.584C8.34176 18.2281 7.82181 17.8197 7.34863 17.3574C6.73001 16.753 6.20509 16.0822 5.77539 15.3457C5.34636 14.6103 5.01223 13.8203 4.77344 12.9766C4.53371 12.1295 4.41406 11.2618 4.41406 10.375C4.41406 9.03793 4.66368 7.78143 5.16406 6.60938L5.35938 6.17871C5.83553 5.18876 6.4533 4.30502 7.21289 3.5293C8.08237 2.64137 9.09715 1.9498 10.2549 1.45605C11.4157 0.961011 12.6647 0.710241 13.998 0.700195H14L14.4932 0.711914C15.6354 0.767005 16.7159 1.01469 17.7324 1.45703L18.1592 1.6543C19.1405 2.13534 20.0157 2.76025 20.7842 3.52734C21.6635 4.40508 22.3482 5.42874 22.8369 6.59668C23.3269 7.7678 23.576 9.02804 23.5859 10.373V10.375L23.5801 10.7061Z"
                                    fill="currentColor" stroke="#00403D" stroke-width="0.6" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h6 class="text-[#00403D] text-xl font-bold">
                            Send Us your cv
                        </h6>
                    </div>
                    <div class="flex items-center gap-4 h-[70px] bg-white rounded-l-[60px] cursor-pointer"
                         id="quote-section">
                        <div class="group pl-7">
                            <svg class="text-[#00403D]" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 21H18M18 21H21M18 21V24M18 21V18" stroke="#627678" stroke-width="3"
                                      stroke-linecap="round"/>
                                <path
                                    d="M3 10.425C3 9.1005 3 8.439 3.105 7.887C3.32884 6.70176 3.90471 5.6115 4.75748 4.75846C5.61025 3.90542 6.70033 3.32921 7.8855 3.105C8.439 3 9.102 3 10.425 3C11.004 3 11.295 3 11.574 3.0255C12.7756 3.13835 13.9152 3.61092 14.844 4.3815C15.06 4.56 15.264 4.764 15.675 5.175L16.5 6C17.724 7.224 18.336 7.836 19.068 8.2425C19.4703 8.46674 19.8971 8.64391 20.34 8.7705C21.147 9 22.0125 9 23.742 9H24.303C28.251 9 30.2265 9 31.509 10.155C31.628 10.26 31.74 10.372 31.845 10.491C33 11.7735 33 13.749 33 17.697V21C33 26.6565 33 29.4855 31.242 31.242C29.484 32.9985 26.6565 33 21 33H15C9.3435 33 6.5145 33 4.758 31.242C3.0015 29.484 3 26.6565 3 21V10.425Z"
                                    stroke="#627678" stroke-width="3"/>
                            </svg>
                        </div>
                        <h6 class="text-[#00403D] text-xl font-bold">
                            Get a quote
                        </h6>
                    </div>
                    <div class="flex items-center gap-4 h-[70px] cursor-pointer" id="general-contacts-section">
                        <div class="group pl-7">
                            <svg class="text-[#00403D]" width="40" height="44" viewBox="0 0 40 44" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M27.0563 10.7715L31.6859 2.16826C32.7427 0.204473 35.1915 -0.530919 37.1553 0.525939C37.1779 0.538118 37.2005 0.550297 37.2232 0.562477C39.1871 1.61925 39.9224 4.06798 38.8656 6.03186L35.8718 11.5952C36.4235 11.8976 36.9347 12.2788 37.3877 12.7318C38.6428 13.9869 39.348 15.6893 39.348 17.4643C39.348 20.7365 39.348 25.3633 39.348 28.6255C39.348 30.391 38.6466 32.0841 37.3982 33.3325C36.1499 34.5809 34.4567 35.2822 32.6912 35.2822H30.5119L22.6027 43.1577C21.7355 44.0213 20.4014 44.2063 19.3319 43.6114C18.2624 43.0165 17.716 41.7853 17.9923 40.5931L19.2232 35.2822H7.31596C5.55047 35.2822 3.85729 34.5809 2.6089 33.3325C1.36052 32.0841 0.65918 30.391 0.65918 28.6255V17.4284C0.65918 15.6629 1.36052 13.9697 2.6089 12.7212C3.85729 11.4728 5.55047 10.7715 7.31596 10.7715H27.0563ZM25.5794 13.5161H7.31596C6.2784 13.5161 5.28338 13.9284 4.54971 14.662C3.81603 15.3957 3.40382 16.3908 3.40382 17.4284V28.6255C3.40382 29.663 3.81603 30.6581 4.54971 31.3918C5.28338 32.1255 6.2784 32.5376 7.31596 32.5376H22.6767L20.6661 41.2128L29.3786 32.5376H32.6912C33.7287 32.5376 34.7238 32.1255 35.4575 31.3918C36.1912 30.6581 36.6033 29.663 36.6033 28.6255C36.6033 25.3633 36.6033 20.7365 36.6033 17.4643C36.6033 16.4172 36.1873 15.4129 35.447 14.6726C35.1849 14.4105 34.8896 14.189 34.5711 14.0122L31.8088 19.1455C31.5581 19.6114 31.1781 19.9949 30.7145 20.2498L28.5662 21.4313C27.7504 21.88 26.7628 21.8845 25.943 21.4433C25.1231 21.0021 24.5828 20.1754 24.5078 19.2475L24.3103 16.8036C24.2677 16.2762 24.3784 15.7478 24.6291 15.282L25.5794 13.5161ZM8.29159 25.2731H23.1298C23.8872 25.2731 24.5021 24.6582 24.5021 23.9007C24.5021 23.1434 23.8872 22.5284 23.1298 22.5284H8.29159C7.53416 22.5284 6.91927 23.1434 6.91927 23.9007C6.91927 24.6582 7.53416 25.2731 8.29159 25.2731ZM8.29159 20.1269H19.699C20.4564 20.1269 21.0713 19.512 21.0713 18.7545C21.0713 17.9972 20.4564 17.3822 19.699 17.3822H8.29159C7.53416 17.3822 6.91927 17.9972 6.91927 18.7545C6.91927 19.512 7.53416 20.1269 8.29159 20.1269ZM29.3919 17.8449L36.4487 4.73124C36.7871 4.1022 36.5516 3.31784 35.9226 2.97939C35.8999 2.96721 35.8773 2.95503 35.8546 2.94285C35.2257 2.60432 34.4413 2.83984 34.1029 3.46888L27.0461 16.5825L27.2435 19.0264L29.3919 17.8449Z"
                                      fill="#003538"/>
                            </svg>
                        </div>
                        <h6 class="text-[#00403D] text-xl font-bold">
                            General contacts
                        </h6>
                    </div>
                </div>
            </div>

            <div class="w-2/3 h-[714px] bg-white rounded-[24px]">
                <div class="flex flex-col items-start p-8" id="quote-section-form">
                    <h5
                        class="font-medium text-[24px] text-align-top  text-[#00403D]">
                        Get a quote
                    </h5>
                    <div class="pt-10 w-full">
                        <form class="flex flex-col items-start">
                            <div class="flex w-full gap-6">
                                <div class="w-1/2">
                                    <label for="name" class="text-2xl font-semibold">Full
                                        Name</label>
                                    <input type="text" id="name" name="name" required placeholder="Enter your name"
                                           class="w-full mt-4 border-[#191919] rounded-[14px]">
                                </div>
                                <div class="w-1/2">
                                    <label for="name" class="text-2xl font-semibold">Email
                                    </label>
                                    <input type="text" id="name" name="name" required placeholder="Enter your email"
                                           class="w-full mt-4 border-[#191919] rounded-[14px]">
                                </div>
                            </div>
                            <div class="flex w-full gap-6 pt-7">
                                <div class="w-1/2">
                                    <label for="name" class="text-2xl font-semibold">Company
                                        Name</label>
                                    <input type="text" id="name" name="name" required
                                           class="w-full mt-4 border-[#191919] rounded-[14px]">
                                </div>
                                <div class="w-1/2">
                                    <label for="email" class="text-2xl font-semibold">Country</label>
                                    <input type="email" id="email" name="email" required
                                           class="w-full mt-4 border-[#191919] rounded-[14px]">
                                </div>
                            </div>
                            <div class="w-full pt-7">
                                <label for="email" class="text-2xl font-semibold">Service type</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full mt-4 border-[#191919] rounded-[14px]">
                            </div>

                            <div class="w-full pt-7">
                                <label for="email" class="text-2xl font-semibold">Details about service</label>
                                <input type="text" id="email" name="email" required
                                       class="w-full mt-4 border-[#191919] rounded-[14px] h-24">
                            </div>

                            <div class="flex pt-7 gap-7">
                                <button
                                    type="submit"
                                    class="bg-[#F06449] text-white font-medium text-base rounded-full h-12 w-[158px] flex items-center justify-center gap-2 font-hankenGrotesk">
                                    Submit request
                                </button>

                                <button
                                    type="submit"
                                    class="bg-white text-[#00403D] border border-[#00403D] font-medium text-base rounded-full h-12 w-[158px] flex items-center justify-center gap-2 font-hankenGrotesk">
                                    Clear
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="hidden" id="send-us-your-cv-form">
                    test
                </div>
                <div class="hidden" id="general-contacts-section-form">
                    test
                </div>
            </div>
        </div>
    </div>

    <div
        class="container mx-auto  flex-start mb-[52px] mt-2 flex border-[2px] border-gray-200 rounded-[24px] justify-between">
        <div class="px-[75px] py-10">
            <h3
                class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                What our
                <span
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                happy customers say
                            </span>
            </h3>
            <div class="flex grid-col-3 pt-8 gap-5">
                <div
                    class="w-[420px] h-[490px] border-[2px] border-gray-200 rounded-[24px]  hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div class="h-[196px] flex flex-col justify-between">
                                <img src="{{ asset('images/fender.png') }}" alt="quote"
                                     class="w-[118px] h-[44px] my-4">
                                <img class="w-[61px] h-[46px] object-cover mt-15"
                                     src="{{asset('images/brackets_up.png')}}"
                                     alt="brackets">
                            </div>

                            <img src="{{ asset('images/fender_guy.png') }}" alt="quote"
                                 class="w-[196px] h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">
                        </div>
                        <p class="pt-3 text-2xl text-[#191919]">I choose DZP over other rope access companies, because
                            of their clear communications and realiability.</p>
                        <p class="pt-8 text-base text-[#818181]">Ernst Both, CEO of fender.</p>
                        <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"
                             src="{{asset('images/brackets_down.png')}}"
                             alt="brackets">
                    </div>
                </div>
                <div
                    class="w-[420px] h-[490px] border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 ">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div class="h-[196px] flex flex-col justify-between">
                                <img src="{{ asset('images/fender.png') }}" alt="quote"
                                     class="w-[118px] h-[44px] my-4">
                                <img class="w-[61px] h-[46px] object-cover mt-15"
                                     src="{{asset('images/brackets_up.png')}}"
                                     alt="brackets">
                            </div>

                            <img src="{{ asset('images/fender_guy.png') }}" alt="quote"
                                 class="w-[196px] h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">
                        </div>
                        <p class="pt-3 text-2xl text-[#191919]">I choose DZP over other rope access companies, because
                            of their clear communications and realiability.</p>
                        <p class="pt-8 text-base text-[#818181]">Ernst Both, CEO of fender.</p>
                        <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"
                             src="{{asset('images/brackets_down.png')}}"
                             alt="brackets">
                    </div>
                </div>
                <div
                    class="w-[420px] h-[490px] border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 ">
                    <div class="p-6">
                        <div class="flex justify-between">
                            <div class="h-[196px] flex flex-col justify-between">
                                <img src="{{ asset('images/fender.png') }}" alt="quote"
                                     class="w-[118px] h-[44px] my-4">
                                <img class="w-[61px] h-[46px] object-cover mt-15"
                                     src="{{asset('images/brackets_up.png')}}"
                                     alt="brackets">
                            </div>

                            <img src="{{ asset('images/fender_guy.png') }}" alt="quote"
                                 class="w-[196px] h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">
                        </div>
                        <p class="pt-3 text-2xl text-[#191919]">I choose DZP over other rope access companies, because
                            of their clear communications and realiability.</p>
                        <p class="pt-8 text-base text-[#818181]">Ernst Both, CEO of fender.</p>
                        <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"
                             src="{{asset('images/brackets_down.png')}}"
                             alt="brackets">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="w-[1744px] h-[484px] mx-auto rounded-t-[90px] bg-[#013538]">
    <div class="pt-[100px] px-[150px] flex justify-between">
        <div>
            <img src="{{ asset('images/dzp_footer.png') }}" alt="logo" class="w-[215px] h-[58px]">
            <div class="pt-15 text-white flex flex-col">
                <div class="flex">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.3332 14.7908V17.2908C18.3341 17.5229 18.2866 17.7526 18.1936 17.9653C18.1006 18.1779 17.9643 18.3688 17.7933 18.5257C17.6222 18.6826 17.4203 18.8021 17.2005 18.8764C16.9806 18.9508 16.7477 18.9784 16.5165 18.9575C13.9522 18.6789 11.489 17.8026 9.32486 16.3992C7.31139 15.1197 5.60431 13.4126 4.32486 11.3992C2.91651 9.22517 2.04007 6.75 1.76653 4.17417C1.7457 3.94373 1.77309 3.71147 1.84695 3.49219C1.9208 3.27291 2.03951 3.07141 2.1955 2.90052C2.3515 2.72963 2.54137 2.59309 2.75302 2.4996C2.96468 2.40611 3.19348 2.35772 3.42486 2.3575H5.92486C6.32928 2.35352 6.72136 2.49673 7.028 2.76045C7.33464 3.02416 7.53493 3.39037 7.59153 3.79084C7.69705 4.59089 7.89274 5.37644 8.17486 6.1325C8.28698 6.43077 8.31125 6.75493 8.24478 7.06657C8.17832 7.37821 8.02392 7.66426 7.79986 7.89084L6.74153 8.94917C7.92783 11.0355 9.65524 12.7629 11.7415 13.9492L12.7999 12.8908C13.0264 12.6668 13.3125 12.5124 13.6241 12.4459C13.9358 12.3795 14.2599 12.4037 14.5582 12.5158C15.3143 12.798 16.0998 12.9937 16.8999 13.0992C17.3047 13.1563 17.6744 13.3602 17.9386 13.6721C18.2029 13.984 18.3433 14.3821 18.3332 14.7908Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="pl-4">Phone: +370 64 751 935</p>
                </div>

                <div class="flex pt-3">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.33366 4.02344H16.667C17.5837 4.02344 18.3337 4.77344 18.3337 5.6901V15.6901C18.3337 16.6068 17.5837 17.3568 16.667 17.3568H3.33366C2.41699 17.3568 1.66699 16.6068 1.66699 15.6901V5.6901C1.66699 4.77344 2.41699 4.02344 3.33366 4.02344Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.3337 5.69043L10.0003 11.5238L1.66699 5.69043" stroke="white" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="pl-4">info@bladerepair.eu</p>
                </div>
                <div class="flex pt-8 gap-4">
                    <i class="p-3 rounded-full border bg-[#0D5B60] border-[#0D5B60] fab fa-facebook"
                       aria-hidden="true"></i>
                    <i class="p-3 rounded-full border bg-[#0D5B60] border-[#0D5B60] fab fa-twitter"
                       aria-hidden="true"></i>
                    <i class="p-3 rounded-full border bg-[#0D5B60] border-[#0D5B60] fab fa-linkedin"
                       aria-hidden="true"></i>
                    <i class="p-3 rounded-full border bg-[#0D5B60] border-[#0D5B60] fab fa-instagram"
                       aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="flex gap-10 text-white" >
            <div>
                <h5 class="text-2xl">Our Services</h5>
                <div class="flex flex-col gap-3 pt-6">
                <p>Blade repair services</p>
                <p>Leading Edge Protection (LEP) Repair</p>
                <p>Drone-Assisted Blade & Turbine Inspectio</p>
                <p>Turbine Nacelle and Spinner Repair</p>
                <p>Construction & Installation Various Works</p>
                </div>
            </div>
            <div>
                <h5 class="text-2xl">Info</h5>
                <div class="flex flex-col gap-3 pt-6">
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                    <p>Accessibility Statement</p>
                    <p>Cookie Policy</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-[150px] pt-20 pb-5">
        <div class="flex justify-between">
            <div>
                <p class="text-[#649295]">© 2023 DZP. All rights reserved.</p>
            </div>
            <div class="flex gap-5">
                <p class="text-[#649295]"><span class="font-semibold">Designed by</span> BrokenPixels in Switzerland </p>
                <p class="text-[#649295]"><span class="font-semibold">Coded by</span> Karolis</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
