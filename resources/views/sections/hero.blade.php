<div class="container mx-auto flex justify-between items-center px-4 md:mt-[30px] mb-[52px] relative">

    <img src="{{ asset('images/guy.svg') }}" alt="flying_guy" data-aos="fade-down"
         class="md:w-[141px] w-20 top-[40px] right-3 md:h-[905px] absolute md:right-[-140px] hidden md:flex  md:top-[-70px] z-10"/>

    <div class="flex flex-wrap items-center md:justify-around lg:justify-between w-full">
        <!-- Image (like col-4) -->
        <div class="hidden md:flex md:w-1/4">
            <div class="transition-transform duration-500"
                 style="transform-origin: center;"
                 onmouseover="this.style.transform='rotate(180deg)'"
                 onmouseout="this.style.transform='rotate(0deg)'"/>
            <svg width="180" height="104" viewBox="0 0 180 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M65.0809 38.5887V21.7735H112.882C115.366 21.7735 117.635 23.2209 118.69 25.4903C119.726 27.7598 119.369 30.4223 117.742 32.3165L89.6873 65.2501H114.919V82.0653H67.118C64.6342 82.0653 62.3647 80.6179 61.3104 78.3485C60.2561 76.079 60.6314 73.4165 62.2397 71.5223L90.2948 38.5887H65.063H65.0809ZM44.0842 0.455078H60.8994V51.6156C60.8994 68.413 47.265 82.0653 30.4497 82.0653C13.6345 82.0653 0 68.413 0 51.6156C0 34.8182 13.6345 21.1659 30.4497 21.1659H39.8848V37.9811H30.4497C22.9266 37.9811 16.8152 44.0925 16.8152 51.6156C16.8152 59.1387 22.9266 65.2501 30.4497 65.2501C37.9728 65.2501 44.0842 59.1387 44.0842 51.6156V0.455078ZM135.916 103.545H119.101V52.2053C119.101 35.4079 132.735 21.7556 149.55 21.7556C166.366 21.7556 180 35.3901 180 52.2053C180 69.0205 166.366 82.655 149.55 82.655H140.115V65.8398H149.55C157.073 65.8398 163.185 59.7284 163.185 52.2053C163.185 44.6822 157.073 38.5708 149.55 38.5708C142.027 38.5708 135.916 44.6822 135.916 52.2053V103.545Z"
                      fill="#003538"/>
            </svg>
        </div>
    </div>

    <div class="w-full md:w-2/4">
        <div>
            <p class="wind-text font-normal text-2xl md:text-[27px] lg:text-[44px] md:tracking-[-0.04em] text-[#00403D] md:text-right">
                Ensuring that wind turbines blades
                <span class="wind-span text-[#818181]">never stop turning</span>
            </p>
        </div>
    </div>

</div>
</div>
<div class="relative md:mx-4 mx-2">
    <div class="container mx-auto flex justify-between items-center relative ">
        <div class="w-full relative swiper mySwiper" data-swiper-parallax="50%">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/hero.jpg') }}" alt="Wind Turbine"
                         class="flex w-full h-[465px] md:h-[876px] object-cover rounded-[24px]"/>
                    <div class="absolute inset-0 bg-[#003538] opacity-60 rounded-[24px]"></div>

                    <div
                        class="absolute inset-0 flex flex-col items-center justify-between md:w-[750px] md:ml-auto h-full overlay-content opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-between md:w-[750px] md:ml-auto h-full">
                            <div
                                class=" md:py-43 py-12 w-full px-8 flex flex-col items-center justify-between md:w-min h-full">
                                <div class="flex justify-center items-center">
                                    <h2 class="w-[115px] md:w-[255px] text-white text-[40px] md:text-[80px] md:text-6xl font-light drop-shadow-lg md:text-left">
                                        500 +
                                    </h2>
                                    <p class="md:w-[365px] w-[213px] text-white text-md md:text-2xl text-left">Serviced in last 365 days</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <h2 class="w-[115px] md:w-[255px] text-white text-[40px] md:text-[80px] md:text-6xl font-light drop-shadow-lg md:text-left">
                                        3 yrs
                                    </h2>
                                    <p class="md:w-[365px] w-[213px] text-md text-white md:text-2xl text-left">
                                        Over 3 years of experience in the
                                        wind industry</p>
                                </div>

                                <div class="flex justify-center items-center">
                                    <h2 class="w-[115px] md:w-[255px] text-white text-[40px] md:text-[80px] md:text-6xl font-light drop-shadow-lg md:text-left">
                                        100+
                                    </h2>
                                    <p class="md:w-[365px] w-[213px] text-md text-white md:text-2xl text-left">
                                        A dedicated in-house team of
                                        100+ professionals</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <h2 class="w-[115px] md:w-[255px] text-white text-[40px] md:text-[80px] md:text-6xl font-light drop-shadow-lg md:text-left">
                                        Low
                                    </h2>
                                    <p class="md:w-[365px] w-[213px] text-md text-white md:text-2xl text-left">
                                        Low employee turnover,
                                        reflecting strong team stability</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src="{{asset('images/hero_2.jpg')}}" alt="Wind Turbine"
                         class="flex w-full h-[465px] md:h-[876px] object-cover rounded-[24px]"/>
                    <div class="absolute inset-0 bg-[#003538] opacity-60 rounded-[24px]"></div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-between md:w-[750px] md:ml-auto h-full overlay-content opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <div
                            class="md:p-18 absolute inset-0 flex flex-col items-end md:justify-end md:w-[900px] ml-auto h-full">
                            <div class="p-10 flex flex-col justify-around md:h-auto h-full">
                                <h2 class="md:text-6xl text-white md:pb-40">
                                    Keeping wind turbines
                                    at peak performance
                                    all year round?<br>
                                    <span class="font-bold"> No problem.</span>
                                </h2>
                                <div class="flex gap-20">
                                    <div class="flex flex-col justify-end leading-none">
                                        <p class="md:text-[52px] font-light text-white">IRATA</p>
                                        <p class="md:text-[35px] font-light text-white">certified</p>
                                    </div>

                                    <p class="md:text-2xl text-white">In house employeed, professionals with extensive
                                        field
                                        experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <img src="{{asset('images/hero_4.jpg')}}" alt="Wind Turbine"
                         class="flex w-full h-[465px] md:h-[876px] object-cover rounded-[24px]"/>
                    <div class="absolute inset-0 bg-[#003538] opacity-60 rounded-[24px]"></div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-between md:w-[750px] md:ml-auto h-full overlay-content opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <div
                            class="md:p-18 absolute inset-0 flex flex-col items-end md:justify-end md:w-[900px] ml-auto h-full">
                            <div class="p-10 flex flex-col justify-around md:h-auto h-full">
                                <h2 class="md:text-6xl text-white md:pb-40">
                                    High safety standards, rapid mobilization and efficient execution.<br>
                                </h2>
                                <div class="flex gap-20">
                                    <div class="flex flex-col justify-end leading-none">
                                        <p class="md:text-[52px] font-light text-white">IRATA</p>
                                        <p class="md:text-[35px] font-light text-white">certified</p>
                                    </div>

                                    <p class="md:text-2xl text-white">In house employeed, professionals with extensive
                                        field
                                        experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    {{--                <div class="swiper-slide relative">--}}
    {{--                    <img src="{{asset('images/hero_3.jpg')}}" alt="Wind Turbine"--}}
    {{--                         class="flex w-full h-[465px] md:h-[876px] object-cover rounded-[24px]"/>--}}
    {{--                    <div class="absolute inset-0 bg-[#003538] opacity-60 rounded-[24px]"></div>--}}
    {{--                    <div--}}
    {{--                        class="absolute inset-0 flex flex-col items-center justify-between md:w-[750px] md:ml-auto h-full overlay-content opacity-0 translate-y-4 transition-all duration-500 ease-out">--}}
    {{--                        <div--}}
    {{--                            class="md:p-18 absolute inset-0 flex flex-col items-end md:justify-end md:w-[900px] ml-auto h-full">--}}
    {{--                            <div class="p-10 flex flex-col justify-around md:h-auto h-full">--}}
    {{--                                <h2 class="md:text-6xl text-white md:pb-40">--}}
    {{--                                    High safety standards, rapid mobilization and efficient execution.<br>--}}
    {{--                                </h2>--}}
    {{--                                <div class="flex gap-20">--}}
    {{--                                    <div class="flex flex-col justify-end leading-none">--}}
    {{--                                        <p class="md:text-[52px] font-light text-white">IRATA</p>--}}
    {{--                                        <p class="md:text-[35px] font-light text-white">certified</p>--}}
    {{--                                    </div>--}}

    {{--                                    <p class="md:text-2xl text-white">In house employeed, professionals with extensive--}}
    {{--                                        field--}}
    {{--                                        experience.</p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
                <div class="swiper-slide relative">
                    <img src="{{asset('images/hero_5.jpg')}}" alt="Wind Turbine"
                         class="flex w-full h-[465px] md:h-[876px] object-cover rounded-[24px]"/>
                    <div class="absolute inset-0 bg-[#003538] opacity-60 rounded-[24px]"></div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-between md:w-[750px] md:ml-auto h-full overlay-content opacity-0 translate-y-4 transition-all duration-500 ease-out">
                        <div
                            class="md:p-18 absolute inset-0 flex flex-col items-end md:justify-end md:w-[900px] ml-auto h-full">
                            <div class="p-10 flex flex-col justify-around md:h-auto h-full">
                                <h2 class="md:text-6xl text-white md:pb-40">
                                    Powering the future with innovative rope access solutions
                                </h2>
                                <div class="flex gap-20">
                                    <div class="flex flex-col justify-end leading-none">
                                        <p class="md:text-[52px] font-light text-white">IRATA</p>
                                        <p class="md:text-[35px] font-light text-white">certified</p>
                                    </div>

                                    <p class="md:text-2xl text-white">In house employeed, professionals with extensive
                                        field
                                        experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/hangin_guy_2.svg') }}" alt="flying_guy"
             class="hidden md:flex md:w-[128px] md:h-[1430px] object-cover absolute left-[-50px] top-[876px] z-10"/>
    </div>
</div>
