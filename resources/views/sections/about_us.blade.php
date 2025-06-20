<div
    class="container mx-auto flex justify-between items-center md:mt-[35px] mb-[52px] flex-col overflow-hidden relative" id="about-us">
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
        $timeline = config('timeline')
    @endphp

    <div class="w-full mt-[52px] md:px-[75px] flex">
        <div class="w-1/2 relative hidden md:flex" data-aos="flip-right">
            <img src="{{asset('images/leading_the_wind.jpg')}}" alt="leading_the_wind"
                 class=" h-full object-cover  rounded-[20px]"/>
            <a href="#contacts" class="hidden md:block">
            <button
                class="scroll-link bg-[#F06449] text-white font-normal text-[24px] rounded-full h-[68px] w-[203px] items-center justify-center font-hankenGrotesk absolute top-10 left-10 cursor-pointer hidden md:flex"
                data-target="contacts">
                Get a quote
            </button>
            </a>
        </div>
        <div class="md:px-0 md:w-1/2 flex flex-col md:ml-[52px]">
            <div class="flex flex-col">
                @foreach ($timeline as $item)
                    <div
                        class="flex {{ $loop->last ? 'pt-[36px]' : 'border-b-2 border-[#D6DBDB] pb-[36px] pt-[36px]' }}" data-aos="fade-up" data-aos-duration="1500">
                        <div
                            class="text-[#F06449] hover:text-[#FFC005] md:w-1/4 px-3 {{ $item['pt_img'] }} md:pt-0 flex md:flex-row flex-col gap-4 md:items-start items-center justify-start">
                            {!! file_get_contents(public_path('images/' . $item['img'])) !!}
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
