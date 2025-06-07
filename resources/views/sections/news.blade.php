<div class=" relative overflow-hidden md:pb-10" id="news">
    <div
        class="container mx-auto relative">
        <div class="md:px-[75px]  md:py-18 w-full">
            <div class="flex lg:flex-row md:flex-col items-center p-4 md:p-0">
                <h3
                    class="md:w-full lg:w-1/2 font-normal text-[32px] md:text-[60px] md:leading-[68px] tracking-[-0.04em] text-[#818181]">
                    Our Latest
                    <span
                        class="font-normal ext-[32px] md:text-[60px] leading-[68px] tracking-[-0.04em] text-[#00403D] text-right">
                                           news
                                       </span>
                    <p class="md:hidden text-base">Discover the latest trends, technologies, and solutions shaping the
                        future of wind energy.</p>
                </h3>
                <div class="hidden md:flex items-center md:w-full lg:w-1/2 lg:justify-end justify-between py-4 lg:py-0">
                    <a href="https://www.linkedin.com/company/dzpcompany" target="_blank">
                        <button
                            class="border-[#F06449] border-[2px]  hover:text-white hover:bg-[#F06449] cursor-pointer text-[#F06449] font-light text-base rounded-full h-12 w-[255px] flex items-center justify-center gap-2 font-hankenGrotesk">
                            Read more on <span class="font-medium"> Linkedin</span>
                        </button>
                    </a>
                    <p class="text-[#818181] pl-8 pr-3 font-light">also follow us on:</p>
                    <div class="flex gap-2 hover:text-[#FFC005]">
                        <a href="https://www.youtube.com/@DZP-ropeaccessprofessionals/videos" target="_blank">
                            <div class="group hover:bg-white p-3 rounded-full bg-white border-2 border-[#F06449] hover:border-[#FFC005] inline-flex items-center justify-center">
                                <svg class="w-5 h-5 fill-[#F06449] group-hover:fill-[#FFC005]"  width="30" height="16" viewBox="0 0 22 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.5837 5.91691C21.6313 4.61058 21.3302 3.31403 20.7083 2.14765C20.2864 1.66905 19.7009 1.34607 19.0537 1.23499C16.3771 1.00457 13.6894 0.910127 11.0021 0.952069C8.32467 0.908224 5.64664 0.999618 2.9794 1.22587C2.45208 1.31687 1.96407 1.55154 1.57494 1.90123C0.709178 2.65873 0.612982 3.9547 0.516786 5.04989C0.377217 7.019 0.377217 8.99478 0.516786 10.9639C0.544616 11.5803 0.641354 12.1922 0.805374 12.7892C0.921362 13.2501 1.15603 13.6766 1.48837 14.0304C1.88014 14.3986 2.37951 14.6466 2.92168 14.7423C4.99559 14.9851 7.08526 15.0858 9.17442 15.0435C12.5413 15.0891 15.4945 15.0435 18.9864 14.7879C19.5419 14.6981 20.0553 14.4498 20.4582 14.076C20.7275 13.8204 20.9287 13.5075 21.045 13.1634C21.389 12.1619 21.558 11.1137 21.5452 10.0604C21.5837 9.54927 21.5837 6.4645 21.5837 5.91691ZM8.82812 10.608V4.95862L14.5229 7.79698C12.9261 8.63662 10.8194 9.58578 8.82812 10.608Z"/>
                                </svg>
                            </div>

                        </a>

                        <a href="https://www.facebook.com/dzprepair" target="_blank">
                            <div class="group hover:bg-white p-3 rounded-full border-2 bg-white border-[#F06449] hover:border-[#FFC005] inline-flex items-center justify-center">
                                <svg class="w-5 h-5 fill-[#F06449] group-hover:fill-[#FFC005]" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4997 1.85742H8.74967C7.97613 1.85742 7.23426 2.16471 6.68728 2.71169C6.1403 3.25867 5.83301 4.00054 5.83301 4.77409V6.52409H4.08301V8.85742H5.83301V13.5241H8.16634V8.85742H9.91634L10.4997 6.52409H8.16634V4.77409C8.16634 4.61938 8.2278 4.47101 8.3372 4.36161C8.44659 4.25221 8.59496 4.19076 8.74967 4.19076H10.4997V1.85742Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{--  Desktop swiper --}}
            <div class="swiper mySwiperNews" style="overflow: visible" id="news-desktop-swiper">
                <div class="swiper-wrapper flex md:flex-row">
                    <div class="swiper-slide w-full relative overflow-hidden rounded-lg md:h-235">
                        <div class="flex md:flex-col gap-10 mt-10">
                            @foreach($linkedInData1 as $data)
                                <div class="flex ">
                                    <a href="https://www.linkedin.com/feed/update/{{$data->post_id}}" target="_blank">
                                        <div
                                            class="md:w-[240px] w-full h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                            <img src="{{$data->image}}" alt="news1"
                                                 class="rounded-[24px] w-full h-full object-cover"/>
                                        </div>
                                    </a>
                                    <div class="flex flex-col pl-12 w-full lg:w-[706px]">
                                        <p class="text-[#0A1018] font-medium text-[28px] pt-8">{{ \Carbon\Carbon::parse($data->published_at)->format('F j, Y') }}</p>
                                        <p class="pt-4 font-light text-[#0A1018]">{{$data->description}}</p>
                                    </div>
                                    <div class="ml-70  pt-16 hidden lg:flex">
                                        <a href="https://www.linkedin.com/company/dzpcompany" target="_blank">
                                            <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                                 class="w-[34px] h-[34px] object-cover "/>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="swiper-slide relative overflow-hidden rounded-lg md:h-235">
                        <div class="flex md:flex-col gap-10 mt-10">
                            @foreach($linkedInData2 as $data)
                                <div class="flex ">
                                    <a href="https://www.linkedin.com/feed/update/{{$data->post_id}}" target="_blank">

                                        <div
                                            class="w-[240px] h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                            <img src="{{$data->image}}" alt="news1"
                                                 class="rounded-[24px] w-full h-full object-cover"/>
                                        </div>
                                    </a>
                                    <div class="flex flex-col pl-12 w-full lg:w-[706px]">
                                        <p class="text-[#0A1018] font-medium text-[28px] pt-8">{{ \Carbon\Carbon::parse($data->published_at)->format('F j, Y') }}</p>
                                        <p class="pt-4 font-light text-[#0A1018]">{{$data->description}}</p>
                                    </div>
                                    <div class="ml-70  pt-16 hidden lg:flex">
                                        <a href="https://www.linkedin.com/company/dzpcompany" target="_blank">
                                            <img src="{{ asset('images/stash_arrow-up.png') }}" alt="news2"
                                                 class="w-[34px] h-[34px] object-cover "/>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex" id="pagination-news-desktop-swiper">
                    <div class="swiper-pagination" style="top: 900px; left: -87px"></div>
                    <div class="swiper-pagination" style="top: 900px; left: -87px"></div>

                    <div class="swiper-button-next" style="top: 910px; right: 635px; opacity: 0.3; width: 45px">
                        <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="52" height="52" rx="26" stroke="#00403D" stroke-width="2"/>
                            <path
                                d="M36.2506 26.2494C36.4485 26.4491 36.5596 26.719 36.5596 27.0002C36.5596 27.2814 36.4485 27.5513 36.2506 27.751L29.1672 34.8344C29.07 34.9387 28.9527 35.0225 28.8223 35.0805C28.692 35.1386 28.5513 35.1698 28.4087 35.1724C28.266 35.1749 28.1243 35.1486 27.992 35.0952C27.8597 35.0418 27.7395 34.9622 27.6386 34.8613C27.5377 34.7604 27.4582 34.6402 27.4047 34.5079C27.3513 34.3756 27.3251 34.2339 27.3276 34.0913C27.3301 33.9486 27.3613 33.8079 27.4194 33.6776C27.4775 33.5473 27.5612 33.43 27.6656 33.3327L32.9356 28.0627H18.4997C18.218 28.0627 17.9477 27.9507 17.7484 27.7515C17.5492 27.5522 17.4372 27.282 17.4372 27.0002C17.4372 26.7184 17.5492 26.4481 17.7484 26.2489C17.9477 26.0496 18.218 25.9377 18.4997 25.9377H32.9356L27.6656 20.6677C27.4779 20.4663 27.3757 20.1999 27.3806 19.9246C27.3854 19.6494 27.4969 19.3867 27.6916 19.1921C27.8863 18.9974 28.1489 18.8859 28.4242 18.881C28.6994 18.8762 28.9658 18.9783 29.1672 19.166L36.2506 26.2494Z"
                                fill="#00403D"/>
                        </svg>
                    </div>

                    <div class="swiper-button-prev" style="top: 910px; left:460px; opacity: 0.3; width: 45px">
                        <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-1" y="1" width="52" height="52" rx="26" transform="matrix(-1 0 0 1 52 0)"
                                  stroke="#00403D" stroke-width="2"/>
                            <path
                                d="M17.7494 26.2494C17.5515 26.4491 17.4404 26.719 17.4404 27.0002C17.4404 27.2814 17.5515 27.5513 17.7494 27.751L24.8328 34.8344C24.93 34.9387 25.0473 35.0225 25.1777 35.0805C25.308 35.1386 25.4487 35.1698 25.5913 35.1724C25.734 35.1749 25.8757 35.1486 26.008 35.0952C26.1403 35.0418 26.2605 34.9622 26.3614 34.8613C26.4623 34.7604 26.5418 34.6402 26.5953 34.5079C26.6487 34.3756 26.6749 34.2339 26.6724 34.0913C26.6699 33.9486 26.6387 33.8079 26.5806 33.6776C26.5225 33.5473 26.4388 33.43 26.3344 33.3327L21.0644 28.0627H35.5003C35.782 28.0627 36.0523 27.9507 36.2516 27.7515C36.4508 27.5522 36.5628 27.282 36.5628 27.0002C36.5628 26.7184 36.4508 26.4481 36.2516 26.2489C36.0523 26.0496 35.782 25.9377 35.5003 25.9377H21.0644L26.3344 20.6677C26.5221 20.4663 26.6243 20.1999 26.6194 19.9246C26.6146 19.6494 26.5031 19.3867 26.3084 19.1921C26.1137 18.9974 25.8511 18.8859 25.5758 18.881C25.3006 18.8762 25.0342 18.9783 24.8328 19.166L17.7494 26.2494Z"
                                fill="#00403D"/>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        {{--  Mobile swiper --}}

        @include('mobile_sections.mobile_latest_news')
        <img class="hidden absolute lg:flex w-[162px] h-[430px] right-[-50px] top-[-60px]" style="pointer-events: none"
             data-aos="fade-down" data-aos-delay="300"
             src="{{asset('images/hangin_guy_3.svg')}}">
    </div>
</div>

<script>
    function updatePaginationPosition() {
        const pagination = document.querySelector('#news-desktop-swiper');
        const paginationMobile = document.querySelector('#news-mobile-swiper');
        const paginationDesktop = document.querySelector('#pagination-news-desktop-swiper');
        if (!pagination) return;

        if (window.innerWidth <= 1400){
            paginationDesktop.style.display = 'none';
        } else {
            paginationDesktop.style.display = 'flex';
        }

        if (window.innerWidth <= 768) {
            pagination.style.display = 'none';
            paginationMobile.style.display = 'block';
        } else {
            pagination.style.display = 'block';
            paginationMobile.style.display = 'none';
        }
    }

    window.addEventListener('resize', updatePaginationPosition);
    window.addEventListener('load', updatePaginationPosition);
</script>

