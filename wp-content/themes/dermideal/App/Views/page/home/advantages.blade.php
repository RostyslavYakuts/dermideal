{{-- Home Advantages --}}
<div class="w-full bg-brand">
    <section id="advantages" class="container mx-auto pt-[100px] pb-[30px]">
        <div class="flex flex-col md:flex-row justify-between items-start">
            <h2 class="text-[38px] l:text-[48px] mt-3 l:max-w-[50%] text-brand-light">
                {!! $data['advantages_section_title'] !!}
            </h2>
            <div class="mt-3 w-full flex gap-2  justify-end">
                <p class="text-brand-light l:max-w-[500px]">{{$data['advantages_section_description']}}</p>
            </div>
        </div>

        <hr class="w-full bg-brand-light my-[50px] h-[2px]">

        <div class="mt-[20px] l:mt-[67px] gap-6 grid grid-cols-1 mdx:flex mdx:flex-row mdx:justify-between mdx:items-center">
            @if($data['advantages_section_features'])
                @foreach($data['advantages_section_features'] as $item)
                    <div class="flex flex-row gap-3 mdx:justify-center md:items-center">
                        <figure class="bg-brand-light rounded-full p-3 min-w-[70px] w-[70px] h-[70px] flex justify-center items-center">
                            <img class="w-[40px] h-[40px]" width="40" height="40" src="{{$item['icon']['url']}}" alt="{{$item['icon']['alt']}}" title="{{$item['title']}}">
                        </figure>

                        <div class="flex flex-col gap-2 text-brand-light">
                          <span class="font-semibold uppercase flex items-center gap-2 leading-none">
                            {{$item['title']}}
                          </span>
                            <span class="text-sm">{{$item['description']}}</span>
                        </div>

                    </div>
                @endforeach
            @endif
        </div>

        @if($data['advantages_section_slider'])
        <div class="relative">
            <div class="mt-[50px] swiper advantages-swiper">
                <div class="swiper-wrapper">
                    @foreach($data['advantages_section_slider'] as $item)
                        <div class="swiper-slide">
                            <img
                                    loading="lazy"
                                    decoding="async"
                                    width="360"
                                    height="348"
                                    class="mx-auto w-[360px] h-[348px] object-cover"
                                    src="{{$item['image']['url']}}"
                                    alt="{{$item['image']['alt']}}"
                                    title="{{ $item['title'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="adv-prev absolute left-0 xl:-left-[50px] top-1/2 -translate-y-1/2 z-20
                text-brand-light text-4xl cursor-pointer select-none px-3">
                &#10094;
            </div>
            <div class="adv-next absolute right-0 xl:-right-[50px] top-1/2 -translate-y-1/2 z-20
                text-brand-light text-4xl cursor-pointer select-none px-3">
                &#10095;
            </div>
        </div>


        <div class="adv-pagination mt-4 flex justify-center gap-1 items-center mx-auto"></div>
        @endif

    </section>
</div>
