<div
    class="container mx-auto hidden md:flex">
    <div class=" px-[75px] py-10 w-full">
        <div class="flex flex-col items-start">
            <h3
                class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#818181]">
                Projects
                <span
                    class="font-normal text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                           we are proud of
                                       </span>
            </h3>
            <p class="pt-6 text-[#818181] text-base">Discover the latest trends, technologies, and solutions shaping
                the future of wind energy.</p>
        </div>
        <div class="pt-12 flex gap-7">
            <div class="flex flex-col w-1/3">
                <img src="{{ asset('images/proud_of_maximizing.jpg') }}"
                     class="w-[396px] h-[396px] object-cover rounded-[20px]" alt="projects">
                <p class="text-[#191919] text-base pt-8 font-normal">Norway, 2023, March</p>
                <p class="text-[#191919] text-3xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                    Efficiency</p>
                <p class="text-[#191919] text-xl pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                <span class="pt-8">Client:</span>
                <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/telia_sonera.png')}}">
            </div>
            <div class="flex flex-col w-1/3">
                <img src="{{ asset('images/best_projects_2.jpg') }}"
                     class="w-[396px] h-[396px] object-cover rounded-[20px]" alt="projects">
                <p class="text-[#191919] text-base pt-8 font-normal">Norway, 2023, March</p>
                <p class="text-[#191919] text-3xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                    Efficiency</p>
                <p class="text-[#191919] text-xl pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                <span class="pt-8">Client:</span>
                <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/skanska.png')}}">
            </div>
            <div class="flex flex-col w-1/3">
                <img src="{{ asset('images/best_projects_3.jpg') }}"
                     class="w-[396px] h-[396px] object-cover rounded-[20px]" alt="projects">
                <p class="text-[#191919] text-base pt-8 font-normal">Norway, 2023, March</p>
                <p class="text-[#191919] text-3xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                    Efficiency</p>
                <p class="text-[#191919] text-xl pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                <span class="pt-8">Client:</span>
                <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/metso.png')}}">
            </div>
        </div>
    </div>
</div>

{{--Mobile--}}

<div
    class="container mx-auto md:hidden flex flex-col pt-18">
    <div class=" px-4 w-full">
        <div class="flex flex-col items-start">
            <h3
                class="font-normal text-3xl text-[#818181]">
                Our
                <span
                    class="font-normal text-3xl text-[#00403D] text-right">
                                           projects
                                       </span>
            </h3>
            <p class="pt-6 text-[#818181] text-base">Discover the latest trends, technologies, and solutions shaping
                the future of wind energy.</p>
        </div>
    </div>

    <div class="pt-4 flex gap-7 px-4">
        <div class="swiper mySwiperNews" >
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide flex gap-4">
                    <img src="{{ asset('images/proud_of_maximizing.jpg') }}"
                         class="w-[236px] h-[218px] object-cover rounded-[20px]" alt="projects">
                    <p class="text-[#191919] text-sm pt-8 font-normal">Norway, 2023, March</p>
                    <p class="text-[#191919] text-xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                        Efficiency</p>
                    <p class="text-[#191919] text-base pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                    <span class="pt-8">Client:</span>
                    <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/telia_sonera.png')}}">
                </div>

                <div class="swiper-slide flex gap-4">
                    <img src="{{ asset('images/proud_of_maximizing.jpg') }}"
                         class="w-[236px] h-[218px] object-cover rounded-[20px]" alt="projects">
                    <p class="text-[#191919] text-sm pt-8 font-normal">Norway, 2023, March</p>
                    <p class="text-[#191919] text-xl pt-2 font-medium font-hankenGrotesk">Maximizing Wind
                        Efficiency</p>
                    <p class="text-[#191919] text-base pt-3 font-normal">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Aliquam quis iaculis sapien. Vivamus fermentum nec at....</p>
                    <span class="pt-8">Client:</span>
                    <img class="w-[196px] h-[52px] pt-2 object-cover" src="{{asset('images/telia_sonera.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
