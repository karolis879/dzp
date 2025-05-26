@php
    $inspectionServices1 = [
        ['image' => 'nordex.png', 'link' => 'https://www.nordex.com/'],
        ['image' => 'bionalis.png', 'link' => 'https://www.bionalis.lt/'],
        ['image' => 'skywork.png', 'link' => 'https://www.skywork.dk/'],
        ['image' => 'ekologix.png', 'link' => 'https://eologix-ping.com/en'],

    ];

    $inspectionServices2 = [
        [
            'image' => 'safeway.png',
            'link' => 'https://www.safeway.com/'
        ],
        [
            'image' => 'kiwa.png',
            'link' => 'https://www.kiwa.lt/'
        ],
        [
            'image' => 'safety_leaders.png',
            'link' => 'https://www.safetyleaders.com/'
        ],
        [
            'image' => 'vejo_planas.png',
            'link' => 'https://rekvizitai.vz.lt/imone/vejo_planas/juridinis-asmuo/'
        ],
         [
            'image' => 'fender_gray.png',
            'link' => 'https://www.fenderbv.nl/'
        ],
];

    $inspectionServicesMobile = [
        [
            'image' => 'nordex.png',
            'link' => 'https://www.nordex.com/'
        ],
        [
            'image' => 'bionalis.png',
            'link' => 'https://www.bionalis.lt/'
        ],
        [
            'image' => 'skywork.png',
            'link' => 'https://www.skywork.dk/'
        ],
        [
            'image' => 'kiwa.png',
            'link' => 'https://www.kiwa.com/'
        ],
        [
            'image' => 'safeway.png',
            'link' => 'https://www.safeway.com/'
        ],
        [
            'image' => 'ekologix.png',
            'link' => 'https://eologix-ping.com/en'
        ],
]

@endphp

<div id="partners" class="container mx-auto flex-start flex flex-col justify-between items-center mb-[52px]">
    <div class=" w-full px-4 md:px-[75px]">
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

    <div class="hidden md:flex justify-between pt-12 px-7" style="width: inherit;">
        @foreach($inspectionServices1 as $service)
            <div class="flex justify-center items-center">
                <a href="{{$service['link']}}" target="_blank">
                    <img class="color-[#0D5B60]" src="{{ asset('images/' . $service['image']) }}">
                </a>
            </div>
        @endforeach
    </div>
    <div class="hidden md:flex justify-between pt-8 px-15" style="width: inherit;">
        @foreach($inspectionServices2 as $service)
            <div class="flex justify-center items-center">
                <a href="{{$service['link']}}" target="_blank">
                    <img class="color-[#0D5B60]" src="{{ asset('images/' . $service['image']) }}">
                </a>
            </div>
        @endforeach
    </div>
    <div class="grid grid-cols-2 gap-4 md:hidden pt-8 px-4" style="width: inherit;">
        @foreach($inspectionServicesMobile as $service)
            <div class="flex justify-between items-center w-full h-32">
                <a href="{{$service['link']}}" target="_blank">
                    <img src="{{ asset('images/' . $service['image']) }}" class="w-full h-full object-contain" alt="Service Logo">
                </a>
            </div>
        @endforeach
    </div>
</div>
