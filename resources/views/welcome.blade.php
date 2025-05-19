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
                    ['name' => 'services_winds.svg'],
                    ['name' => 'services_protection.svg'],
                    ['name' => 'services_lightening.svg'],
                    ['name' => 'services_rebalancing.svg'],
                    ['name' => 'services_coating.svg', 'is_svg' => true, 'svg_id' => 'services-coating'],
                    ['name' => 'services_vortex.svg'],
                    ['name' => 'services_serrations.svg'],
                    ['name' => 'services_maintanence.svg'],
                ];
            @endphp


                <!-- Tab content -->
            <div id="default-styled-tab-content">
                <div class="grid grid-cols-4 mt-2 gap-[7px]" id="blade" role="tabpanel" aria-labelledby="blade-tab">
                    @foreach ($services as $service)
                        <button
                            class="bg-white text-black aspect-[4/3] rounded-[4px] h-[273px] w-full flex items-center justify-center font-normal text-base flex-col hover:shadow-lg hover:shadow-black/15 transition-all duration-300 ease-in-out">

                            <div class="w-[130px] h-[130px] flex justify-center items-center">
                                {{--                                @if (!empty($service['is_svg']))--}}
                                {{--                                    <svg class="svg-icon">--}}
                                {{--                                        <use xlink:href="{{ asset('images/' . $service['name']) }}#{{ $service['svg_id'] }}" />--}}
                                {{--                                    </svg>--}}
                                {{--                                @else--}}
                                <img class="color-[#0D5B60] py-2" src="{{ asset('images/' . $service['name']) }}">
                                {{--                                @endif--}}
                            </div>
                            <p
                                class="text-[#008983] text-black hover:text-[#008983] text-[20px] font-medium leading-[135%] tracking-[-0.05em] text-center"
                                style="font-family: 'Space Grotesk', sans-serif;">
                                Blade Repair <br>(Categories 1–5)
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
    <div
        class="container mx-auto">
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
                                <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up to
                                    40%
                                    on energy costs with wind turbine solutions. Learn how businesses and homes can save
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
                                <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up to
                                    40%
                                    on energy costs with wind turbine solutions. Learn how businesses and homes can save
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
                                <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up to
                                    40%
                                    on energy costs with wind turbine solutions. Learn how businesses and homes can save
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
                                <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up to
                                    40%
                                    on energy costs with wind turbine solutions. Learn how businesses and homes can save
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
                                <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up to
                                    40%
                                    on energy costs with wind turbine solutions. Learn how businesses and homes can save
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
                                <p class="pt-4 font-light text-[#0A1018]">Learn how businesses and homes can save up to
                                    40%
                                    on energy costs with wind turbine solutions. Learn how businesses and homes can save
                                    up
                                    to 40% on energy costs with wind turbine solutions.</p>
                            </div>
                            <div class="ml-26  pt-16">
                                <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                     class="w-[34px] h-[34px] object-cover"/>
                            </div>
                        </div>
                    </div>
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse top-226">
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
</main>

<!-- Footer -->
<footer class="w-full py-4 px-6 bg-gray-100 dark:bg-zinc-900 text-sm text-center text-gray-600 dark:text-gray-300">
    &copy; {{ date('Y') }} DZP. All rights reserved.
</footer>

<script>
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
        observer.observe(btn, { attributes: true, attributeFilter: ['aria-current'] });
    });

</script>

</body>
</html>
