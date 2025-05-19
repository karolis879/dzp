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
