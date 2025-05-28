@php
    $inspectionServices1 = [
        ['image' => 'nordex.svg', 'link' => 'https://www.nordex-online.com/en/'],
        ['image' => 'bionalis.svg', 'link' => 'https://www.bionalis.lt/'],
        ['image' => 'skywork.svg', 'link' => 'https://www.skywork.dk/'],
        ['image' => 'ekologix.svg', 'link' => 'https://eologix-ping.com/en'],

    ];

    $inspectionServices2 = [
        [
            'image' => 'brand-safeway.svg',
            'link' => 'https://brandsafway.com/'
        ],
        [
            'image' => 'kiwa.svg',
            'link' => 'https://www.kiwa.lt/'
        ],
        [
            'image' => 'safety.svg',
            'link' => 'https://www.safetyleaders.no/en'
        ],
         [
            'image' => 'fender.svg',
            'link' => 'https://www.fenderbv.nl/'
        ],
];

    $inspectionServicesMobile = [
        [
            'image' => 'nordex.svg',
            'link' => 'https://www.nordex-online.com/en/'
        ],
        [
            'image' => 'bionalis.svg',
            'link' => 'https://www.bionalis.lt/'
        ],
        [
            'image' => 'skywork.svg',
            'link' => 'https://www.skywork.dk/'
        ],
        [
            'image' => 'kiwa.svg',
            'link' => 'https://www.kiwa.com/'
        ],
        [
            'image' => 'brand-safeway.svg',
            'link' => 'https://brandsafway.com/'
        ],
        [
            'image' => 'ekologix.svg',
            'link' => 'https://eologix-ping.com/en'
        ],
]

@endphp

<div id="partners" class="container mx-auto flex-start flex flex-col justify-between items-center mb-[52px]">
    <div class=" w-full px-4 md:px-[75px]" data-aos="fade-left">
        <h3
            class=" md:text-[60px] text-[32px] md:leading-[68px] tracking-[-0.04em] text-[#818181]">
            Our
            <span
                class=" md:text-[60px] text-[32px] md:leading-[68px] tracking-[-0.04em] text-[#00403D]">
                                partners
                            </span>
        </h3>
        <p class="text-medium text-base text-[#818181] pt-2">Expert Tips, News, and Trends in Renewable Energy</p>
    </div>

    <div class="hidden md:flex justify-between pt-12 px-8 flex-wrap gap-4" style="width: inherit;" data-aos="fade-right">
        @foreach($inspectionServices1 as $service)
            @php
                $isLightLogo = in_array($service['image'], ['skywork.svg']);
            @endphp
            <div class="flex justify-center items-center p-4 rounded transition-all duration-300">
                <a href="{{ $service['link'] }}" target="_blank" class="block w-[200px] h-[140px] flex items-center justify-center">
                    <img src="{{ asset('images/' . $service['image']) }}" alt="Partner Logo"
                         class="grayscale contrast-75 brightness-90 hover:grayscale-0 hover:contrast-100 hover:brightness-100 transition-all duration-300 {{ $isLightLogo ? 'light-logo' : '' }}">

                </a>
            </div>
        @endforeach
    </div>
    <div class="hidden md:flex justify-between pt-8 px-12" style="width: inherit;">
        @foreach($inspectionServices2 as $service)
            @php
                $isLightLogo = in_array($service['image'], ['safety.svg']);
            @endphp
            <div class="flex justify-center items-center p-4 rounded transition-all duration-300" data-aos="fade-left">
                <a href="{{ $service['link'] }}" target="_blank"
                   class="block w-[200px] h-[140px] flex items-center justify-center">
                    <img src="{{ asset('images/' . $service['image']) }}" alt="Partner Logo"
                         class="h-[100px] object-contain grayscale contrast-75 brightness-90 hover:grayscale-0 hover:contrast-100 hover:brightness-100 transition-all duration-300 {{ $isLightLogo ? 'light-logo' : '' }}">
                </a>
            </div>
        @endforeach

    </div>
    <div class="grid grid-cols-2 gap-4 md:hidden pt-8 px-4" style="width: inherit;">
        @foreach($inspectionServicesMobile as $service)
            <div class="flex justify-between items-center w-full h-32">
                <a href="{{$service['link']}}" target="_blank">
                    <img src="{{ asset('images/' . $service['image']) }}" class="w-full h-[50px] object-contain grayscale contrast-0 brightness-[0.4] hover:grayscale-0 hover:contrast-100 hover:brightness-100 transition-all duration-300" alt="Service Logo">
                </a>
            </div>
        @endforeach
    </div>
</div>
