<div
    class="container mx-auto rounded-[24px] h-[715px] overflow-hidden z-10 relative ">
    <img src="{{asset('images/our_clients.png')}}" class="z-0 absolute w-full h-full object-cover">

    <div class="w-full md:px-[75px] pl-4 md:px-4 py-8 md:py-20 flex flex-col justify-between">
        <div>
            <h4 class=" z-10 relative font-metrophobic md:text-6xl text-[32px] text-white md:font-extralight">Our Certifications &
                Honors</h4>
            <p class=" z-10 relative text-white pt-4">Find our ISO certifications and other our services quality assuring
                information.</p>
        </div>

        <div class="hidden md:flex rounded-[24px] w-[800px]" style="margin-left: 0; margin-top: 50px; overflow: visible">
                <div class="flex gap-4" style="display: flex">
                    <img src="{{ asset('images/iso1.png') }}" alt="..."
                         class="w-[236px]] h-[333px] rounded-[12px] object-cover z-10"/>
                    <img src="{{ asset('images/iso2.png') }}" alt="..."
                         class="w-[236px] h-[333px] rounded-[12px] object-cover z-10"/>
{{--                    <img src="{{ asset('images/iso3.png') }}" alt="..."--}}
{{--                         class="w-[236px] h-[333px] rounded-[12px] object-cover z-10"/>--}}
                </div>
        </div>

        @include('mobile_sections.mobile_certifications')
    </div>
</div>
