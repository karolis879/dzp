<div
    class="container mx-auto flex justify-between items-center md:mt-[35px] mb-[52px] flex-col overflow-hidden relative" id="about-us">
    <img src="{{ asset('images/guy.png') }}" alt="flying_guy"
         class="md:w-[141px] w-20 top-[-350px] right-3 md:h-[905px] absolute md:right-[-140px] md:hidden  md:top-[-70px] z-10"/>
    <div class="w-full pt-6 md:pt-2 px-4 md:px-[75px]">
        <h3 class="font-normal text-4xl md:text-[60px] md:leading-[68px] tracking-[-0.04em] text-[#818181]">
            Leading
            <span
                class="font-normal text-4xl md:text-[60px] md:leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                    the wind
                </span>
        </h3>
        <p class="font-normal w-3/4 md:w-full  text-base md:text-[24px] md:leading-[32px] tracking-normal mt-[24px]">
            We are committed to advancing wind turbine maintenance solutions through innovation, efficiency and
            safety. Check below our journey towards excellence!
        </p>
    </div>

    @php
        $timeline = [
            [
                'year' => '2022',
                'img' => 'leading_the_wind_hand.svg',
                'title' => 'The Beginning of dzp with 7 employees',
                'description' => 'With a vision to deliver innovative and sustainable wind energy solutions.',
                'pt_img' => 'pt-4', // spacing tweaks for image container
                'pt_title' => 'pt-2',
                'pt_desc' => 'pt-4',
            ],
            [
                'year' => '2023',
                'img' => 'leading_the_wind_turbine.svg',
                'title' => 'First 100 wind turbine projects and 72 employees in the company.',
                'description' => 'Started the first project in TA 41, NY which was the first step towards global expansion.',
                'pt_img' => 'pt-5',
                'pt_title' => 'pt-4',
                'pt_desc' => 'pt-2',
            ],
            [
                'year' => '2024',
                'img' => 'leading_the_wind_certificate.svg',
                'title' => 'Award-Winning Innovations and our ISO Certifications',
                'description' => 'Started the first project in TA 41, NY which was the first step towards global expansion.',
                'pt_img' => 'pt-4',
                'pt_title' => 'pt-2',
                'pt_desc' => 'pt-4',
            ],
            [
                'year' => '2025',
                'img' => 'leading_the_wind_house.svg',
                'title' => 'Growth & Expansion',
                'description' => 'Within a few years, the company expanded rapidly, installing more than 50 wind turbines in various countries.',
                'pt_img' => 'pt-4',
                'pt_title' => 'pt-4',
                'pt_desc' => 'pt-2',
            ],
        ];
    @endphp


    <div class="w-full mt-[52px] md:px-[75px] flex">
        <div class="w-1/2 relative hidden md:flex">
            <img src="{{asset('images/leading_the_wind.jpg')}}" alt="leading_the_wind"
                 class=" h-full object-cover  rounded-[20px]"/>
            <button
                class="
                            bg-[#F06449]
                            text-white
                            font-normal
                            text-[24px]
                            rounded-full
                            h-[68px]
                            w-[203px]
                            items-center justify-center gap-
                            font-hankenGrotesk
                            absolute top-10 left-10
                            cursor-pointer
                            hidden md:flex
                          "
            >
                Get a quote
            </button>
        </div>
        <div class="md:px-0 md:w-1/2 flex flex-col md:ml-[52px]">
            <div class="flex flex-col">
                @foreach ($timeline as $item)
                    <div
                        class="flex {{ $loop->last ? 'pt-[36px]' : 'border-b-2 border-[#D6DBDB] pb-[36px] pt-[36px]' }}">

                        <div
                            class="text-[#F06449] hover:text-[#FFC005] md:w-1/4 px-3 {{ $item['pt_img'] }} md:pt-0 flex md:flex-row flex-col gap-4 md:items-start items-center justify-start">
                            {!! file_get_contents(public_path('images/' . $item['img'])) !!}

                            {{--                            <img src="{{ asset('images/' . $item['img']) }}" class="w-[79px] h-[80px]" alt="{{ $item['year'] }}" />--}}
                            <p class="md:hidden text-[15px] font-bold">{{ $item['year'] }}</p>
                        </div>
                        <div class="w-3/4 flex flex-col px-3">
                            <p class="hidden md:flex text-[15px] font-bold text-[#F06449]">{{ $item['year'] }}</p>
                            <p class="font-medium text-2xl {{ $item['pt_title'] }}">{{ $item['title'] }}</p>
                            <p class="font-normal text-base {{ $item['pt_desc'] }}">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
