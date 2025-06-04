<div class="container mx-auto flex-col  flex-start mb-[52px] mt-2 flex bg-[#E4E9E9] md:rounded-[24px]">
    <div class="h-full md:pt-15 pt-12 md:px-[75px]  md:flex gap-10">
        <div class="flex justify-center md:justify-between items-center h-full md:w-1/2 w-full">
            <div class=" w-full px-4 md:px-0">
                <div class=" flex items-center">
                    <h3
                        class="md:text-3xl text-4xl lg:text-[60px] lg:leading-[68px] lg:tracking-[-0.04em] text-[#818181]">
                        Why choose
                    </h3>
                    <img
                        class="md:h-[55px] w-[70px] h-12 md:w-[96px] object-contain md:pl-4 pl-2 pt-2"
                        src="{{ asset('images/dzp_logo.svg') }}" alt="Wind Turbine"/>
                </div>
                <p class=" text-[#00403D] md:text-3xl text-2xl lg:text-[45px] lg    :leading-[67px] font-semibold tracking-[-0.04em]">
                    and how you can save <br> on your wind turbine costs.
                </p>
            </div>
        </div>
        <div class="md:w-1/2 relative w-full" data-aos="fade-left">
            <img class="lg:absolute md:h-full lg:h-auto px-4 md-px-0 top-[-110px] right-10 md:right-0 w-full object-cover"
                 src="{{asset('images/why_choose_us.png')}}" alt="why choose us"/>
        </div>
    </div>
    <div class="h-full md:pb-15 md:px-[75px] flex flex-col-reverse md:flex-row mt-4 md:mt-16 gap-16">
        <div class="bg-[#003538] rounded-[20px] w-full md:w-1/2 px-6 md:px-0" data-aos="fade-right">
            <div class="md:px-10 md:py-5 flex lg:flex-row  md:flex-col items-center justify-between md:gap-x-10">
                <p class="font-metrophobic text-[#D9FF00] md:text-[120px] text-[82px]">15%</p>
                <div class="font-metrophobic text-[#D9FF00] text-sm md:text-[20px] pl-5 md:pl-0">Approximate business
                    cost savings by choosing
                    doing blade inspections.
                </div>
            </div>
            <p class="md:px-10 text-white text-sm md:text-[18px] md:leading-[32px] md:tracking-[0em] font-hanken-grotesk">
                With our services your company can save significant <br class="hidden md:flex">operational costs of wind turbine
                business. Read more, <br class="hidden md:flex"> download below.
            </p>
            <a href="{{ asset('pdfs/why_you_need_dzp.pdf')}}" download="DZP-Brochure-2025.pdf"
               class="underline flex items md:px-10 py-8 font-hankenGrotesk md:pt-13 text-white">
                Download PDF
            </a>
        </div>
        <div class="md:w-1/2 w-full px-4 md:px-0">
            <div>
                <p class="text-xl text-[#003538] font-bold leading-[24px]">Expert In-House Team</p>
                <p class="text-[#003538] leading-[24px]">Our IRATA-certified technicians are highly experienced and
                    <br> fully
                    in-house—no freelancers or contractors—ensuring <br> quality, safety, and consistency on every
                    project. </p>
            </div>
            <div class="pt-8">
                <p class="text-xl text-[#003538] font-bold">Efficient, Flexible & Cost-Effective</p>
                <p class="text-[#003538] ">We follow strict safety protocols and use low-impact <br> methods that
                    minimize environmental disruption compared to traditional solutions.</p>
            </div>

            <div class="pt-8">
                <p class="text-xl text-[#003538] font-bold">Safety & Sustainability First</p>
                <p class="text-[#003538] ">Rope access enables fast mobilization, reduced downtime, <br> and
                    eliminates the need for expensive cranes or lifts—even in hard-to-reach locations.</p>
            </div>

            <div class="pt-8">
                <p class="text-xl text-[#003538] font-bold">Proven, Comprehensive Services</p>
                <p class="text-[#003538] ">With a strong track record across multiple regions, we deliver<br>end-to-end
                    turbine solutions—from blade repairs and LEP coating to inspections and drone services.</p>
            </div>
        </div>
    </div>
</div>
