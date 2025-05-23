<header class="hidden w-full border-b-2 border-[#D6DBDB] h-24 md:flex items-center z-20 bg-white sticky top-0">
    <div class="container mx-auto flex justify-between items-center z-20">
        <nav class="flex items-start h-8 relative">
            <ul class="flex gap-8 text-base font-medium text-[#191919]">
                <div
                    class="hidden items-center md:block transition-all duration-500 opacity-0 translate-y-3 logo-container absolute left-[-145px] top-[-10px]">
                    <a href="#" class="m-0 p-0">
                        <div class="transition-transform duration-500"
                             id="logo"
                             style="transform-origin: center;"
                             onmouseover="this.style.transform='rotate(180deg)'"
                             onmouseout="this.style.transform='rotate(0deg)'"/>
                        <svg width="90" height="50" viewBox="0 0 180 104" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M65.0809 38.5887V21.7735H112.882C115.366 21.7735 117.635 23.2209 118.69 25.4903C119.726 27.7598 119.369 30.4223 117.742 32.3165L89.6873 65.2501H114.919V82.0653H67.118C64.6342 82.0653 62.3647 80.6179 61.3104 78.3485C60.2561 76.079 60.6314 73.4165 62.2397 71.5223L90.2948 38.5887H65.063H65.0809ZM44.0842 0.455078H60.8994V51.6156C60.8994 68.413 47.265 82.0653 30.4497 82.0653C13.6345 82.0653 0 68.413 0 51.6156C0 34.8182 13.6345 21.1659 30.4497 21.1659H39.8848V37.9811H30.4497C22.9266 37.9811 16.8152 44.0925 16.8152 51.6156C16.8152 59.1387 22.9266 65.2501 30.4497 65.2501C37.9728 65.2501 44.0842 59.1387 44.0842 51.6156V0.455078ZM135.916 103.545H119.101V52.2053C119.101 35.4079 132.735 21.7556 149.55 21.7556C166.366 21.7556 180 35.3901 180 52.2053C180 69.0205 166.366 82.655 149.55 82.655H140.115V65.8398H149.55C157.073 65.8398 163.185 59.7284 163.185 52.2053C163.185 44.6822 157.073 38.5708 149.55 38.5708C142.027 38.5708 135.916 44.6822 135.916 52.2053V103.545Z"
                                  fill="#003538"/>
                        </svg>
                </div>
                </a>
    </div>
    {{--    <li><a href="#"--}}
    {{--           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center">Home</a>--}}
    {{--    </li>--}}
    <li><a href="#about-us"
           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link "
           data-target="about-us">About
            Us</a></li>
    <li><a href="#services"
           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link "
           data-target="services">Services</a>
    </li>
    <li><a href="#partners"
           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link "
           data-target="partners">Partners</a>
    </li>
    <li><a href="#news"
           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link "
           data-target="news">News</a>
    </li>
    <li><a href="#projects"
           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link"
           data-target="projects">Projects</a>
    </li>
    <li><a href="#contacts"
           class="hover:text-[#008983] transition-colors font-spaceGrotesk font-medium text-[24px] leading-[32px] tracking-[0] text-center scroll-link "
           data-target="contacts">Contact
            Us</a></li>
    </ul>
    </nav>
    <a href="#contacts" class="hidden md:block">
        <button
            class="bg-[#F06449] scroll-link text-white cursor-pointer font-medium text-base rounded-full h-12 w-[158px] flex items-center justify-center gap-2 font-hankenGrotesk"
            data-target="contacts">
            Get a quote
        </button>
    </a>
    </div>
</header>

@include('mobile_sections.mobile_header')


