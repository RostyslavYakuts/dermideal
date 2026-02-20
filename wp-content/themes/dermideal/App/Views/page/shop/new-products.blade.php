{{-- New Products Shop --}}
<section class="bg-white w-full ">
    <div id="new_products" class="container mx-auto py-[60px]">
        <h2 class="text-brand text-4xl">Нові надходження</h2>
        @if($data['new_products'])
        <div class="relative">
            <div class="mt-10 swiper new-products-slider">
                <div class="swiper-wrapper">
                    @foreach($data['new_products'] as $product_id)
                        @php
                            $product = wc_get_product($product_id);
                            if (!$product) continue;
                            $image_id = $product->get_image_id();
                            $image = wp_get_attachment_image_url($image_id, 'medium');
                        @endphp
                        <a class="swiper-slide p-4 border border-brand rounded text-brand hover:text-brand-hover flex-col gap-3 justify-between items-center" target="_blank" href="{{get_permalink($product_id)}}">
                            <img width="200" height="200" alt="{{$product->get_name()}}"
                                 loading="lazy"
                                 decoding="async"
                                 src="{{ $image }}"
                                 class="w-[200px] max-w-[200px] h-[200px] max-h-[200px] object-contain mdx:object-cover mb-4"
                            >
                            <h3 title="{{$product->get_name()}}" class="text-center text-lg font-semibold line-clamp-4 min-h-[86px]">{{$product->get_name()}}</h3>
                            <span class="text-sm">{!! $product->get_price_html() !!}</span>
                            <button aria-label="Visit" class="bg-brand hover:bg-brand-hover text-white p-3 rounded ">
                                Переглянути
                            </button>
                        </a>
                    @endforeach
                </div>

            </div>
            <div class="mt-4 w-full flex justify-between items-center shadow p-4">
                <button aria-label="Prev" class="new-products-prev text-brand text-3xl cursor-pointer select-none px-3">
                    &#10094;
                </button>
                <div class="new-products-pagination flex justify-center gap-1 items-center mx-auto"></div>
                <button aria-label="Next" class="new-products-next text-brand text-3xl cursor-pointer select-none px-3">
                    &#10095;
                </button>
            </div>


        </div>

        @endif
    </div>
</section>