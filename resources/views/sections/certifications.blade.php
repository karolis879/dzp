<div
    class="container mx-auto rounded-[24px] h-[715px] object-cover"
    style="background-image: url('{{ asset('images/our_clients.png') }}')">

    <div class="w-full md:px-[75px] px-4 py-8 md:py-20">
        <h4 class="font-metrophobic md:text-6xl text-[32px] text-white md:font-extralight">Our Certifications & Honors</h4>
        <p class="text-white pt-4">Find our ISO certifications and other our services quality assuring
            information.</p>
        <div id="default-carousel" class="relative w-[720px] pt-8" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out flex justify-between items-center" data-carousel-item>
                    <img src="{{ asset('images/iso1.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                    <img src="{{ asset('images/iso2.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                    <img src="{{ asset('images/iso3.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out flex justify-between items-center" data-carousel-item>
                    <img src="{{ asset('images/iso1.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                    <img src="{{ asset('images/iso2.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                    <img src="{{ asset('images/iso3.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover"/>
                </div>
            </div>
            <!-- Slider indicators -->
            <div
                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse top-120">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                    class="absolute top-70 start-70 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                    class="absolute top-70 end-70 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
</div>
