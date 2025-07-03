<div class="swiper mySwiperNews" style="overflow: visible; width: 100%" id="news-mobile-swiper">
    <div class="swiper-wrapper">
        @foreach($allData as $data)
            <div class="swiper-slide relative overflow-hidden rounded-lg md:h-235">
                <div class="flex md:flex-col gap-10 mt-10 px-4">
                    <div class="flex flex-col">
                        <a href="https://www.linkedin.com/feed/update/{{$data->post_id}}" target="_blank">
                            <div
                                class="md:w-[240px] w-[236px] h-[218px] md:h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                                <img src="{{$data->image ?? 'images/dzp_news_logo.jpeg}}" alt="news1"
                                     class="w-full h-full object-cover rounded-[20px]"/>
                            </div>
                        </a>
                        <div class="flex flex-col">
                            <p class="text-[#0A1018] font-medium text-[28px] pt-8">{{ \Carbon\Carbon::parse($data->published_at)->format('F j, Y') }}</p>
                            <p class="pt-4 font-light text-[#0A1018]">{{$data->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="md:hidden flex flex-col items-center w-full px-4 pb-15 pt-8">
    <a href="https://www.linkedin.com/company/dzpcompany" target="_blank" class="w-full">

        {{--        <button--}}
        {{--            class="border-[#F06449] border-[2px] w-full  text-[#F06449] font-light text-base rounded-full h-12  flex items-center justify-center gap-2 font-hankenGrotesk">--}}
        {{--            Read more on <span class="font-medium"> Linkedin</span>--}}
        {{--        </button>--}}
    </a>
    <div class="flex justify-between w-full gap-2 pt-7">
        <a href="https://www.youtube.com/@DZP-ropeaccessprofessionals/videos" target="_blank">
            <div
                class="group hover:bg-white p-3 rounded-full bg-white border-2 border-[#F06449] hover:border-[#FFC005] inline-flex items-center justify-center">
                <svg class="w-5 h-5 fill-[#F06449] group-hover:fill-[#FFC005]" width="30" height="16"
                     viewBox="0 0 22 16" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.5837 5.91691C21.6313 4.61058 21.3302 3.31403 20.7083 2.14765C20.2864 1.66905 19.7009 1.34607 19.0537 1.23499C16.3771 1.00457 13.6894 0.910127 11.0021 0.952069C8.32467 0.908224 5.64664 0.999618 2.9794 1.22587C2.45208 1.31687 1.96407 1.55154 1.57494 1.90123C0.709178 2.65873 0.612982 3.9547 0.516786 5.04989C0.377217 7.019 0.377217 8.99478 0.516786 10.9639C0.544616 11.5803 0.641354 12.1922 0.805374 12.7892C0.921362 13.2501 1.15603 13.6766 1.48837 14.0304C1.88014 14.3986 2.37951 14.6466 2.92168 14.7423C4.99559 14.9851 7.08526 15.0858 9.17442 15.0435C12.5413 15.0891 15.4945 15.0435 18.9864 14.7879C19.5419 14.6981 20.0553 14.4498 20.4582 14.076C20.7275 13.8204 20.9287 13.5075 21.045 13.1634C21.389 12.1619 21.558 11.1137 21.5452 10.0604C21.5837 9.54927 21.5837 6.4645 21.5837 5.91691ZM8.82812 10.608V4.95862L14.5229 7.79698C12.9261 8.63662 10.8194 9.58578 8.82812 10.608Z"/>
                </svg>
            </div>
        </a>
        <a href="https://www.linkedin.com/company/dzpcompany" target="_blank">
            <div
                class="group hover:bg-white p-3 rounded-full bg-white border-2 border-[#F06449] hover:border-[#FFC005] inline-flex items-center justify-center">
                <svg class="text-center w-5 h-5 fill-[#F06449] group-hover:fill-[#FFC005]" height="800px" width="800px"
                     version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 382 382" xml:space="preserve">
                        <path style="fill:#F06449;" d="M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
                            C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
                            H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
                            c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
                            s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
                            c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
                            c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
                            c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
                            L341.91,330.654L341.91,330.654z"/>
                        </svg>
            </div>
        </a>
        <a href="https://www.facebook.com/dzprepair" target="_blank">
            <div
                class="group hover:bg-white p-3 rounded-full border-2 bg-white border-[#F06449] hover:border-[#FFC005] inline-flex items-center justify-center">
                <svg class="w-5 h-5 fill-[#F06449] group-hover:fill-[#FFC005]" viewBox="0 0 14 15"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.4997 1.85742H8.74967C7.97613 1.85742 7.23426 2.16471 6.68728 2.71169C6.1403 3.25867 5.83301 4.00054 5.83301 4.77409V6.52409H4.08301V8.85742H5.83301V13.5241H8.16634V8.85742H9.91634L10.4997 6.52409H8.16634V4.77409C8.16634 4.61938 8.2278 4.47101 8.3372 4.36161C8.44659 4.25221 8.59496 4.19076 8.74967 4.19076H10.4997V1.85742Z"/>
                </svg>
            </div>
        </a>
    </div>
</div>
