<div class="container mx-auto flex justify-between items-center px-4 mt-[52px] mb-[52px] relative">

    <img src="{{ asset('images/guy.png') }}" alt="flying_guy"
         class="md:w-[141px] w-20 top-[40px] right-3 md:h-[905px] absolute md:right-[-140px] hidden md:flex  md:top-[-70px] z-10"/>

    <div class="flex flex-wrap items-center">
        <!-- Image (like col-4) -->
        <div class="hidden md:flex md:w-1/4">
            <img src="{{ asset('images/dzp_logo.png') }}" alt="Wind Turbine"
                 class="transition-transform duration-500"
                 style="transform-origin: center;"
                 onmouseover="this.style.transform='rotate(180deg)'"
                 onmouseout="this.style.transform='rotate(0deg)'"/>
        </div>

        <!-- Text (like col-8) -->
        <div class="w-full md:w-3/4">
            <div>
                <p class="font-normal text-2xl md:text-[74px] md:leading-[88px] md:tracking-[-0.04em] text-[#00403D] md:text-right">
                    Ensuring that wind turbines blades
                    <span class="text-[#818181]">never stop turning</span>
                </p>
            </div>
        </div>
    </div>
</div>
