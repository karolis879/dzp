<div class="swiper mySwiperNews" style="overflow: visible; width: 100%" id="news-mobile-swiper">
    <div class="swiper-wrapper">
        @foreach($allData as $data)
        <div class="swiper-slide relative overflow-hidden rounded-lg md:h-235">
            <div class="flex md:flex-col gap-10 mt-10 px-4">
                <div class="flex flex-col">
                    <div
                        class="md:w-[240px] w-[236px] h-[218px] md:h-[240px] bg-[#E4E9E9] rounded-[20px] flex items-center justify-center">
                        <img src="{{$data->image}}" alt="news1"
                             class="w-full h-full object-cover rounded-[20px]"/>
                    </div>
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
    <button
        class="border-[#F06449] border-[2px] w-full  text-[#F06449] font-light text-base rounded-full h-12  flex items-center justify-center gap-2 font-hankenGrotesk">
        Read more on <span class="font-medium"> Linkedin</span>
    </button>
    <div class="flex justify-between w-full gap-2 pt-7">
        <i class="text-[#F06449] text-[21px] hover:text-[#FFC005]  fab fa-youtube border-[2px] rounded-full p-3"></i>
        <i class="text-[#F06449] text-[21px] hover:text-[#FFC005] fab fa-twitter border-[2px] rounded-full p-3"></i>
        <i class="text-[#F06449] text-[21px] hover:text-[#FFC005] fab fa-facebook border-[2px] rounded-full p-3"></i>
    </div>
</div>
