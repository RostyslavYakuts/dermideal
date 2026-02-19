{{-- Home Bestsellers --}}
@php
    /**
     * @var array $data
     */
    $bestsellers = $data['bestsellers'];
    if(!$bestsellers) return;
@endphp
<section class="w-full container mx-auto py-[100px]">
    <h2 class="text-center text-brand text-4xl">{{$data['bestsellers_title']}}</h2>
    <div class="relative">
        <div class="mt-10 swiper bestsellers-swiper">
            <div class="swiper-wrapper">
                @foreach($bestsellers as $item)
                    <div class="swiper-slide">
                        <div class="bg-white shadow rounded p-4 flex flex-col mdx:flex-row items-center gap-6 ">
                            <img loading="lazy" decoding="async"
                                 src="{{$item['image']['url']}}"
                                 class="hidden mdx:block w-full h-auto lgx:w-[710px] lgx:h-[710px] object-cover mb-4"
                                 alt="{{$item['image']['alt']}}"
                                 width="710"
                                 height="710"
                            >

                            @php
                                $product_id = $item['product'];
                                 if (!$product_id) continue;
                                 $product = wc_get_product($product_id);
                                 if (!$product) continue;
                                 $image_id = $product->get_image_id();
                                 $image = wp_get_attachment_image_url($image_id, 'medium');
                            @endphp
                            <a class="text-brand hover:text-brand-hover flex flex-col gap-3 justify-center items-center" target="_blank" href="{{get_permalink($product_id)}}">
                                <img width="200" height="200" alt="{{$product->get_name()}}"
                                     loading="lazy"
                                     decoding="async"
                                     src="{{ $image }}"
                                     class="w-full h-[360px] mdx:h-[260px] object-contain mdx:object-cover mb-4"
                                >
                                <h3 class="text-center text-lg font-semibold">{{$product->get_name()}}</h3>
                                <p class="text-sm">{!! $product->get_price_html() !!}</p>
                                <button class="bg-brand hover:bg-brand-hover text-white p-3 rounded ">
                                    Переглянути
                                </button>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bestsellers-button-prev absolute left-0 xl:-left-[50px] top-1/2 -translate-y-1/2 z-20
                text-brand text-4xl cursor-pointer select-none px-3">
            &#10094;
        </div>
        <div class="bestsellers-button-next absolute right-0 xl:-right-[50px] top-1/2 -translate-y-1/2 z-20
                text-brand text-4xl cursor-pointer select-none px-3">
            &#10095;
        </div>
        <div class="bestsellers-pagination  mt-4 flex justify-center gap-1 items-center mx-auto"></div>
    </div>

</section>