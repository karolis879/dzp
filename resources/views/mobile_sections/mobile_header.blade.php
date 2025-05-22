<nav class="md:hidden sticky top-0 z-50">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto pt-5 md:pt-10 px-6 relative">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <div class="transition-transform duration-500 mobile-dzp-logo"
                 style="transform-origin: center;"
                 onmouseover="this.style.transform='rotate(180deg)'"
                 onmouseout="this.style.transform='rotate(0deg)'"/>
            <svg width="90" height="50" viewBox="0 0 180 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M65.0809 38.5887V21.7735H112.882C115.366 21.7735 117.635 23.2209 118.69 25.4903C119.726 27.7598 119.369 30.4223 117.742 32.3165L89.6873 65.2501H114.919V82.0653H67.118C64.6342 82.0653 62.3647 80.6179 61.3104 78.3485C60.2561 76.079 60.6314 73.4165 62.2397 71.5223L90.2948 38.5887H65.063H65.0809ZM44.0842 0.455078H60.8994V51.6156C60.8994 68.413 47.265 82.0653 30.4497 82.0653C13.6345 82.0653 0 68.413 0 51.6156C0 34.8182 13.6345 21.1659 30.4497 21.1659H39.8848V37.9811H30.4497C22.9266 37.9811 16.8152 44.0925 16.8152 51.6156C16.8152 59.1387 22.9266 65.2501 30.4497 65.2501C37.9728 65.2501 44.0842 59.1387 44.0842 51.6156V0.455078ZM135.916 103.545H119.101V52.2053C119.101 35.4079 132.735 21.7556 149.55 21.7556C166.366 21.7556 180 35.3901 180 52.2053C180 69.0205 166.366 82.655 149.55 82.655H140.115V65.8398H149.55C157.073 65.8398 163.185 59.7284 163.185 52.2053C163.185 44.6822 157.073 38.5708 149.55 38.5708C142.027 38.5708 135.916 44.6822 135.916 52.2053V103.545Z" fill="#003538"/>
            </svg>
    </div>
        </a>

        <!-- Hamburger button -->
        <div class="sticky top-0 right-0 z-50">
            <button
                id="hamburger-btn"
                aria-label="Open menu"
                aria-expanded="false"
            >
                <div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_2674_413)">
                            <rect x="20" y="70" width="60" height="60" rx="30" transform="rotate(-90 20 70)"
                                  fill="white"
                                  shape-rendering="crispEdges"/>
                            <g clip-path="url(#clip0_2674_413)">
                                <path d="M65.0379 28.4321H34.9619" stroke="#000001" stroke-width="2.31353"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M65.0379 40H34.9619" stroke="#000001" stroke-width="2.31353"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M65.0379 51.5674H34.9619" stroke="#000001" stroke-width="2.31353"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </g>
                        <defs>
                            <filter id="filter0_d_2674_413" x="0" y="0" width="100" height="100"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="10"/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2674_413"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2674_413"
                                         result="shape"/>
                            </filter>
                            <clipPath id="clip0_2674_413">
                                <rect width="32.3895" height="32.3895" fill="white"
                                      transform="translate(33.8052 23.8052)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>

            </button>
        </div>
    </div>

    <!-- Side drawer -->
    <div
        id="side-drawer"
        class="fixed top-0 left-0 z-50 w-64 h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out"
        aria-hidden="true"
    >
        <button
            id="close-btn"
            aria-label="Close menu"
            class="absolute top-4 right-4 p-2 text-gray-500 rounded focus:outline-none dark:text-gray-400"
        >
            <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <nav class=" px-4 pt-14">
            <div class="font-semibold text-gray-900 dark:text-gray-300 flex flex-col">
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#" class="block px-4 text-[#191919] py-2 rounded-md">Home</a>
                </div>
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#about-us" class="block px-4 text-[#191919] py-2 rounded-md">About Us</a>
                </div>
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#services" class="block px-4 text-[#191919] py-2 rounded-md">Services</a>
                </div>
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#partners" class="block px-4 text-[#191919] py-2 rounded-md">Partners</a>
                </div>
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#news" class="block px-4 text-[#191919] py-2 rounded-md">News</a>
                </div>
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#projects" class="block px-4 text-[#191919] py-2 rounded-md">Projects</a>
                </div>
                <div class="border-b-2 border-[#D8DFDE] w-full py-4">
                    <a href="#contacts" class="block px-4 text-[#191919] py-2 rounded-md">Contact</a>
                </div>
            </div>

        </nav>
    </div>

    <!-- Backdrop -->
    <div
        id="backdrop"
        class="fixed inset-0 hidden z-40"
        aria-hidden="true"
        style="background-color: rgba(10, 16, 24, 0.15);"
    ></div>
</nav>
