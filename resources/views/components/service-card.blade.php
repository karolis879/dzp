@props([
    'description',
    'icon' => null,
    'isLargeIcon' => false,
])

<button
    class="text-[#0D5B60] hover:text-[#008983] group bg-white aspect-[4/3] rounded-[4px] h-[273px] w-full flex items-center justify-center font-normal text-base flex-col hover:shadow-lg hover:shadow-black/15">
    @if($icon)
        <div class="{{ $isLargeIcon ? 'w-[105px] h-[97px]' : 'w-[75px] h-[97px]' }} flex justify-center items-center">
            {!! file_get_contents(public_path('images/' . $icon)) !!}
        </div>
    @endif
    <p
        class="pt-3 text-[20px] font-medium leading-[135%] tracking-[-0.05em] text-center"
        style="font-family: 'Space Grotesk', sans-serif;">
        {!! $description !!}
    </p>
</button>
