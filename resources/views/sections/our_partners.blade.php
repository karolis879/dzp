@php
    $inspectionServices1 = [
        ['image' => 'nordex.png', 'link' => 'https://www.nordex-online.com/en/'],
        ['image' => 'bionalis.png', 'link' => 'https://www.bionalis.lt/'],
        ['image' => 'sky-work.png', 'link' => 'https://www.skywork.dk/'],
        ['image' => 'ekologix.png', 'link' => 'https://eologix-ping.com/en'],
        ['image' => 've-servisas.png', 'link' => 'https://rekvizitai.vz.lt/imone/ve_servisas/'],

    ];

    $inspectionServices2 = [
        [
            'image' => 'safeway.png',
            'link' => 'https://brandsafway.com/'
        ],
        [
            'image' => 'kiwa.png',
            'link' => 'https://www.kiwa.lt/'
        ],
        [
            'image' => 'safety-leaders.png',
            'link' => 'https://www.safetyleaders.no/en'
        ],
         [
            'image' => 'fender.png',
            'link' => 'https://www.fenderbv.nl/'
        ],
            [
            'image' => 'vejo-planas.png',
            'link' => 'https://rekvizitai.vz.lt/imone/vejo_planas/'
        ],
];

    $inspectionServicesMobile = [
        [
            'image' => 'nordex.png',
            'link' => 'https://www.nordex-online.com/en/'
        ],
        [
            'image' => 'bionalis.png',
            'link' => 'https://www.bionalis.lt/'
        ],
        [
            'image' => 'sky-work.png',
            'link' => 'https://www.skywork.dk/'
        ],
        [
            'image' => 'kiwa.png',
            'link' => 'https://www.kiwa.com/'
        ],
        [
            'image' => 'safeway.png',
            'link' => 'https://brandsafway.com/'
        ],
        [
            'image' => 'ekologix.png',
            'link' => 'https://eologix-ping.com/en'
        ],
]

@endphp

<div id="partners" class="container mx-auto flex-start flex flex-col justify-between items-center mb-[52px]">
    <div class=" w-full  px-4 md:px-[75px]" data-aos="fade-left">
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

    @php
        $logoBoxClass = 'w-[200px] h-[140px]';
        $imageClass = 'w-full h-full object-contain';
    @endphp

    <div class="hidden md:flex justify-between pt-12 md:px-[75px] px-8 flex-wrap gap-4" style="width: inherit;" data-aos="fade-right">
        @foreach($inspectionServices1 as $service)
            @php
                $smallerLogos = ['ve-servisas.png', 'vejo-planas.png'];
                $isOversized = in_array($service['image'], $smallerLogos);
                $imageClass = $isOversized
                    ? 'w-[50%] h-[80%] object-contain pt-6' // scale down big logos
                    : 'w-full h-full object-contain';
            @endphp

            <div class="relative w-[200px] h-[140px] group">
                <a href="{{ $service['link'] }}" target="_blank" class="w-full h-full flex justify-center items-center">
                    <!-- Grayscale -->
                    <img
                        src="{{ asset('images/logos/nocolors/' . $service['image']) }}"
                        data-rjs="2"
                        alt="Partner Logo"
                        class="absolute inset-0 transition-opacity duration-300 opacity-100 group-hover:opacity-0 {{ $imageClass }}">


                    <!-- Color -->
                    <img
                        src="{{ asset('images/logos/colors/' . $service['image']) }}"
                        data-rjs="2"
                        alt="Partner Logo"
                        class="absolute inset-0 transition-opacity duration-300 opacity-0 group-hover:opacity-100 {{ $imageClass }}">

                </a>
            </div>

        @endforeach
    </div>

    <div class="hidden md:flex justify-between pt-8 md:px-[75px] px-12" style="width: inherit;">
        @foreach($inspectionServices2 as $service)
            @php
                $smallerLogos = ['ve-servisas.png', 'vejo-planas.png'];
                $isOversized = in_array($service['image'], $smallerLogos);
                $imageClass = $isOversized
                    ? 'w-[50%] h-[70%] object-contain pt-10' // scale down big logos
                    : 'w-full h-full object-contain';
            @endphp

            <div class="relative w-[200px] h-[140px] group">
                <a href="{{ $service['link'] }}" target="_blank" class="w-full h-full flex justify-center items-center">
                    <!-- Grayscale -->
                    <img
                        src="{{ asset('images/logos/nocolors/' . $service['image']) }}"
                        data-rjs="2"
                        alt="Partner Logo"
                        class="absolute inset-0 transition-opacity duration-300 opacity-100 group-hover:opacity-0 {{ $imageClass }}">


                    <!-- Color -->
                    <img
                        src="{{ asset('images/logos/colors/' . $service['image']) }}"
                        data-rjs="2"
                        alt="Partner Logo"
                        class="absolute inset-0 transition-opacity duration-300 opacity-0 group-hover:opacity-100 {{ $imageClass }}">

                </a>
            </div>

        @endforeach
    </div>

    <div class="grid grid-cols-2 gap-4 md:hidden pt-8 px-4 gap-12" style="width: inherit;">
        @foreach($inspectionServicesMobile as $service)
            @php
                $smallerLogos = ['ve-servisas.png', 'vejo-planas.png'];
                $isOversized = in_array($service['image'], $smallerLogos);
                $imageClass = $isOversized
                    ? 'w-[50%] h-[70%] object-contain pt-10' // scale down big logos
                    : 'w-full h-full object-contain';
            @endphp

            <div class="relative w-[155px] h-[53px] group">
                <a href="{{ $service['link'] }}" target="_blank" class="w-full h-full flex justify-center items-center">
                    <!-- Grayscale -->

                    <img src="{{ asset('images/logos/colors/' . $service['image']) }}"
                         alt="Partner Logo"
                         data-rjs="2"
                         class="absolute inset-0 transition-opacity duration-300 opacity-100 group-hover:opacity-0 {{ $imageClass }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
