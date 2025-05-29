<div
    class=" container mx-auto  flex-start mb-[52px] md:mt-2 md:flex md:border-[2px] md:border-gray-200 md:rounded-[24px] justify-between overflow-hidden relative z-10 bg-white">
    <div class="md:hidden flex w-full h-10 relative z-1000 bg-[#E4E9E9] rounded-b-[24px] overflow-hidden">

    </div>
    <div class="flex md:hidden relative overflow-visible h-[120px]">
        <img src="{{ asset('images/turbine_absolute.png') }}"
             class="h-[671px] w-[380px] absolute z-0 top-[-143px] right-[-108px]">
    </div>

    <div class="md:px-[75px] mt-6 py-10 pl-4 relative z-20">
        <h3
            class="hidden md:flex font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
            What our
            <span
                class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                              &nbsp;  happy customers say
                            </span>
        </h3>

        <h3
            class=" md:hidden flex font-normal text-[32px] text-[#818181]">
            Our&nbsp;
            <span
                class="font-normal text-[#00403D]  text-[32px]  text-left">
                happy</span></h3>
        <h3 class=" md:hidden flex font-normal text-[32px] text-[#818181]">customers</h3>
        {{--  Desktop--}}

        <div class="hidden md:flex grid-col-3 pt-8 gap-5">
            <div
                class="w-1/3 h-full border-[2px] border-gray-200 rounded-[24px]  hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300">
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
{{--            <div--}}
{{--                class="w-1/3 h-full border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 ">--}}
{{--                <div class="p-6">--}}
{{--                    <div class="flex justify-between">--}}
{{--                        <div class="h-[196px] flex flex-col justify-between">--}}
{{--                            <img src="{{ asset('images/fender.png') }}" alt="quote"--}}
{{--                                 class="w-[118px] h-[44px] my-4">--}}
{{--                            <img class="w-[61px] h-[46px] object-cover mt-15"--}}
{{--                                 src="{{asset('images/brackets_up.png')}}"--}}
{{--                                 alt="brackets">--}}
{{--                        </div>--}}

{{--                        <img src="{{ asset('images/fender_guy.png') }}" alt="quote"--}}
{{--                             class="w-[196px] h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">--}}
{{--                    </div>--}}
{{--                    <p class="pt-3 text-2xl text-[#191919]">I choose DZP over other rope access companies, because--}}
{{--                        of their clear communications and realiability.</p>--}}
{{--                    <p class="pt-8 text-base text-[#818181]">Ernst Both, CEO of fender.</p>--}}
{{--                    <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"--}}
{{--                         src="{{asset('images/brackets_down.png')}}"--}}
{{--                         alt="brackets">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div--}}
{{--                class="w-1/3 h-full border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 ">--}}
{{--                <div class="p-6">--}}
{{--                    <div class="flex justify-between">--}}
{{--                        <div class="h-[196px] flex flex-col justify-between">--}}
{{--                            <img src="{{ asset('images/fender.png') }}" alt="quote"--}}
{{--                                 class="w-[118px] h-[44px] my-4">--}}
{{--                            <img class="w-[61px] h-[46px] object-cover mt-15"--}}
{{--                                 src="{{asset('images/brackets_up.png')}}"--}}
{{--                                 alt="brackets">--}}
{{--                        </div>--}}

{{--                        <img src="{{ asset('images/fender_guy.png') }}" alt="quote"--}}
{{--                             class="w-[196px] h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">--}}
{{--                    </div>--}}
{{--                    <p class="pt-3 text-2xl text-[#191919]">I choose DZP over other rope access companies, because--}}
{{--                        of their clear communications and realiability.</p>--}}
{{--                    <p class="pt-8 text-base text-[#818181]">Ernst Both, CEO of fender.</p>--}}
{{--                    <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"--}}
{{--                         src="{{asset('images/brackets_down.png')}}"--}}
{{--                         alt="brackets">--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        {{-- Mobile--}}
        <div class="swiper mySwiperNews">
            <div class="swiper-wrapper">
                <div class="flex md:hidden pt-8 gap-5">
                    <div class="swiper-slide" style="width: 80%;">
                        <div
                            class="bg-white border-[2px] border-gray-200 rounded-[24px]  hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300">
                            <div class="p-3">
                                <div class="flex justify-between">
                                    <div class="h-full flex flex-col justify-between">
                                        <img src="{{ asset('images/fender.png') }}" alt="quote"
                                             class="w-[67px] h-[25px] my-4">
                                        <img class="w-[35px] h-[26px] object-cover mt-8"
                                             src="{{asset('images/brackets_up.png')}}"
                                             alt="brackets">
                                    </div>

                                    <img src="{{ asset('images/fender_guy.png') }}" alt="quote"
                                         class="w-[112px] h-[112px] object-cover rounded-[20px] rounded-bl-[50px]">
                                </div>
                                <p class="pt-3 text-[13px] text-[#191919]">I choose DZP over other rope access
                                    companies,
                                    because
                                    of their clear communications and realiability.</p>
                                <p class="pt-8 text-[9px]] text-[#818181]">Ernst Both, CEO of fender.</p>
                                <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"
                                     src="{{asset('images/brackets_down.png')}}"
                                     alt="brackets">
                            </div>
                        </div>
                    </div>
{{--                    <div class="swiper-slide" style="width: 80%;">--}}
{{--                        <div--}}
{{--                            class="bg-white border-[2px] border-gray-200 rounded-[24px]  hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300">--}}
{{--                            <div class="p-3">--}}
{{--                                <div class="flex justify-between">--}}
{{--                                    <div class="h-full flex flex-col justify-between">--}}
{{--                                        <img src="{{ asset('images/fender.png') }}" alt="quote"--}}
{{--                                             class="w-[67px] h-[25px] my-4">--}}
{{--                                        <img class="w-[35px] h-[26px] object-cover mt-8"--}}
{{--                                             src="{{asset('images/brackets_up.png')}}"--}}
{{--                                             alt="brackets">--}}
{{--                                    </div>--}}

{{--                                    <img src="{{ asset('images/fender_guy.png') }}" alt="quote"--}}
{{--                                         class="w-[112px] h-[112px] object-cover rounded-[20px] rounded-bl-[50px]">--}}
{{--                                </div>--}}
{{--                                <p class="pt-3 text-[13px] text-[#191919]">I choose DZP over other rope access--}}
{{--                                    companies,--}}
{{--                                    because--}}
{{--                                    of their clear communications and realiability.</p>--}}
{{--                                <p class="pt-8 text-[9px]] text-[#818181]">Ernst Both, CEO of fender.</p>--}}
{{--                                <img class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7"--}}
{{--                                     src="{{asset('images/brackets_down.png')}}"--}}
{{--                                     alt="brackets">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>
</div>
