<header class="hidden w-full border-b-2 border-[#D6DBDB] h-24 md:flex items-center z-20 bg-white">
    <div class="container mx-auto flex justify-between items-center px-4 z-20">
        <nav class="flex items-center h-8">
            <ul class="flex gap-8 text-base font-medium text-[#191919]">
                <li><a href="#"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Home</a>
                </li>
                <li><a href="#"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">About
                        Us</a></li>
                <li><a href="#services"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link " data-target="services">Services</a>
                </li>
                <li><a href="#"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Partners</a>
                </li>
                <li><a href="#"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">News</a>
                </li>
                <li><a href="#"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Project</a>
                </li>
                <li><a href="#"
                       class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Contact
                        Us</a></li>
            </ul>
        </nav>
        <button
            class="bg-[#F06449] text-white font-medium text-base rounded-full h-12 w-[158px] flex items-center justify-center gap-2 font-hankenGrotesk">
            Get a quote
        </button>
    </div>
</header>

<nav class="md:hidden">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pt-10 px-6 relative">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/dzp_logo.png') }}" alt="Wind Turbine"
                 class="transition-transform duration-500 w-[80px]"
                 style="transform-origin: center;"
                 onmouseover="this.style.transform='rotate(180deg)'"
                 onmouseout="this.style.transform='rotate(0deg)'"/>
        </a>
        <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden absolute top-[105px] left-0 w-full z-50 bg-white shadow-lg" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm dark:bg-blue-600" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#services" class="scroll-smooth block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Pricing</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
