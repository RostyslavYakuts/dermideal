{{-- Home Brands --}}
<div class="bg-white px-5 w-full py-[100px] flex flex-col items-center justify-center gap-6 text-center text-brand ">
    @if($data['brands'])
        <div class="swiper brands-swiper w-full">
            <div class="swiper-wrapper">
                @foreach($data['brands'] as $brand)
                    <div class="swiper-slide ">
                        <img
                                loading="lazy"
                                decoding="async"
                                src="{{$brand['image']['url']}}"
                                alt="{{$brand['image']['alt']}}"
                                width="250"
                                height="100"
                                class="w-[250px] h-[100px] object-contain"
                        >
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>