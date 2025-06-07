<div
    class=" container mx-auto  flex-start mb-[52px] md:mt-2 md:flex md:border-[2px] md:border-gray-200 md:rounded-[24px] justify-between overflow-hidden relative z-10 bg-white">
    <div class="md:hidden flex w-full h-10 relative z-1000 bg-[#E4E9E9] rounded-b-[24px] overflow-hidden">

    </div>
    <div class="flex md:hidden relative overflow-visible h-[120px]">
        <img src="{{ asset('images/turbine_absolute.png') }}"
             class="h-[671px] w-[380px] absolute z-0 top-[-180px] right-[-73px]">
    </div>

    <div class="md:px-[75px] mt-6 md:py-10 pl-4 relative z-20">
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

        <div class="hidden lg:flex grid-col-3 pt-8 gap-5">
            <div class="hidden lg:grid grid-cols-3 gap-5 pt-8 items-stretch">
                <!-- Card 1 -->
                <div class="border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 flex flex-col">
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div class="flex justify-between w-full">
                            <div class="w-1/2 h-[196px] flex flex-col justify-between">
                                <img src="{{ asset('images/fender.png') }}" alt="logo"
                                     data-rjs="2"
                                     class="w-[118px] h-[44px] my-4">
                                <img src="{{ asset('images/brackets_up.png') }}" alt="brackets"
                                     class="w-[61px] h-[46px] object-cover">
                            </div>
                            <img src="{{ asset('images/fender_guy.png') }}" alt="person"
                                 class="w-1/2 h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">
                        </div>

                        <div class="flex flex-col justify-between flex-1 mt-4">
                            <p class="text-2xl text-[#191919] mb-4">
                                I choose DZP over other rope access companies, because of their clear communications and reliability.
                            </p>
                            <p class="text-base text-[#818181] mt-auto">Ernst Both, CEO of Fender</p>
                            <img src="{{ asset('images/brackets_down.png') }}" alt="brackets"
                                 class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7">
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 flex flex-col">
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div class="flex justify-between w-full">
                            <div class="w-1/2 h-[196px] flex flex-col justify-between">
                                <img src="{{ asset('images/logos/colors/nordex.png') }}" alt="logo"
                                     data-rjs="2"
                                     class="w-[118px] h-[44px] my-4">
                                <img src="{{ asset('images/brackets_up.png') }}" alt="brackets"
                                     class="w-[61px] h-[46px] object-cover">
                            </div>
                            <img src="{{ asset('images/ernestas_nordex.jpg') }}" alt="person"
                                 class="w-1/2 h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">
                        </div>

                        <div class="flex flex-col justify-between flex-1 mt-4">
                            <p class="text-2xl text-[#191919] mb-4">
                                They can do practically everything: repaint, repair, balance. That means I don’t need to look for other subcontractors – they handle it all themselves.
                            </p>
                            <p class="text-base text-[#818181] mt-auto">Ernestas Lukoševičius, Construction Manager, Nordex</p>
                            <img src="{{ asset('images/brackets_down.png') }}" alt="brackets"
                                 class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7">
                        </div>
                    </div>
                </div>

                <!-- Card 3 (optional – duplicated for layout symmetry) -->
{{--                <div class="border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 flex flex-col">--}}
{{--                    <div class="p-6 flex flex-col justify-between flex-1">--}}
{{--                        <div class="flex justify-between">--}}
{{--                            <div class="h-[196px] flex flex-col justify-between">--}}
{{--                                <img src="{{ asset('images/fender.png') }}" alt="logo"--}}
{{--                                     class="w-[118px] h-[44px] my-4">--}}
{{--                                <img src="{{ asset('images/brackets_up.png') }}" alt="brackets"--}}
{{--                                     class="w-[61px] h-[46px] object-cover">--}}
{{--                            </div>--}}
{{--                            <img src="{{ asset('images/fender_guy.png') }}" alt="person"--}}
{{--                                 class="w-[196px] h-[196px] object-cover rounded-[20px] rounded-bl-[90px]">--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-between flex-1 mt-4">--}}
{{--                            <p class="text-2xl text-[#191919] mb-4">--}}
{{--                                DZP provided consistent support on-site, always responsive and flexible. It’s been a smooth collaboration across all projects.--}}
{{--                            </p>--}}
{{--                            <p class="text-base text-[#818181] mt-auto">Jane Doe, Project Supervisor, WindCorp</p>--}}
{{--                            <img src="{{ asset('images/brackets_down.png') }}" alt="brackets"--}}
{{--                                 class="w-[34px] h-[26px] object-cover ml-auto mr-20 mt-7">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

        {{-- Mobile--}}
        <div class="swiper mySwiperNews">
            <div class="swiper-wrapper">
                <div class="flex lg:hidden pt-8 gap-5 items-stretch">
                    <!-- Slide 1 -->
                    <div class="swiper-slide flex flex-col" style="width: 60%;">
                        <div class="bg-white border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 flex flex-col h-full">
                            <div class="p-3 flex flex-col justify-between h-full">
                                <div class="flex justify-between">
                                    <div class="h-[112px] flex flex-col justify-between">
                                        <img src="{{ asset('images/fender.png') }}" alt="quote" class="w-[67px] h-[25px] my-4">
                                        <img src="{{ asset('images/brackets_up.png') }}" alt="brackets" class="w-[35px] h-[26px] object-cover">
                                    </div>
                                    <img src="{{ asset('images/fender_guy.png') }}" alt="quote" class="w-[112px] h-[112px] object-cover rounded-[20px] rounded-bl-[50px]">
                                </div>

                                <div class="flex flex-col flex-1 justify-between mt-3">
                                    <p class="text-[13px] text-[#191919] mb-4">
                                        I choose DZP over other rope access companies, because of their clear communications and reliability.
                                    </p>
                                    <p class="text-[9px] text-[#818181]">Ernst Both, CEO of fender.</p>
                                    <img src="{{ asset('images/brackets_down.png') }}" alt="brackets" class="w-[34px] h-[26px] object-cover ml-auto mr-8 mt-4">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide flex flex-col" style="width: 60%;">
                        <div class="bg-white border-[2px] border-gray-200 rounded-[24px] hover:shadow-[0px_10px_20px_0px_#00000026] transition-shadow duration-300 flex flex-col h-full">
                            <div class="p-3 flex flex-col justify-between h-full">
                                <div class="flex justify-between">
                                    <div class="h-[112px] flex flex-col justify-between">
                                        <img src="{{ asset('images/logos/colors/nordex.png') }}" alt="logo" class="w-[67px] h-[25px] my-4">
                                        <img src="{{ asset('images/brackets_up.png') }}" alt="brackets" class="w-[35px] h-[26px] object-cover">
                                    </div>
                                    <img src="{{ asset('images/ernestas_nordex.jpg') }}" alt="quote" class="w-[112px] h-[112px] object-cover rounded-[20px] rounded-bl-[50px]">
                                </div>

                                <div class="flex flex-col flex-1 justify-between mt-3">
                                    <p class="text-[13px] text-[#191919] mb-4">
                                        They can do practically everything: repaint, repair, balance. That means I don’t need to look for other subcontractors – they handle it all themselves.
                                    </p>
                                    <p class="text-[9px] text-[#818181]">Ernestas Lukoševičius, Construction Manager, Nordex</p>
                                    <img src="{{ asset('images/brackets_down.png') }}" alt="brackets" class="w-[34px] h-[26px] object-cover ml-auto mr-8 mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
