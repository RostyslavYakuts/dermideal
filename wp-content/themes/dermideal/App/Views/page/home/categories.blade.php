{{-- Categories Home --}}
@php
    /**
     * @var array $data
     */
    $categories = $data['categories'];
    if(!$categories) return;
@endphp
<section class="bg-brand-beige w-full py-[100px]">
    <div class="container mx-auto">
        <h2 class="text-4xl text-brand text-center uppercase">Наша продукція</h2>
        <div class="categories mt-10 flex flex-col gap-10">
            @foreach($categories as $group)
                <div class="flex flex-col gap-6">
                    <a href="{{ get_term_link($group['parent']) }}"
                       class="text-2xl text-brand">{{ $group['parent']->name }}
                    </a>

                    <ul class="grid gap-6
                               grid-cols-2
                               sm:grid-cols-3
                               md:grid-cols-4
                               lg:grid-cols-5">
                        @foreach($group['children'] as $child)

                            @php
                                $thumb_id = get_term_meta($child->term_id, 'thumbnail_id', true);
                                $image = $thumb_id
                                    ? wp_get_attachment_image_url($thumb_id, 'medium')
                                    : null;
                            @endphp
                            <li class="group text-brand hover:text-brand-gold">
                                <a href="{{ get_term_link($child) }}" class="block relative">

                                    @if($image)
                                        <img
                                                width="180"
                                                height="180"
                                                loading="lazy"
                                                decoding="async"
                                                src="{{ $image }}"
                                                alt="{{ $child->name }}"
                                                class="w-full aspect-square object-cover"
                                        >
                                    @endif

                                    <span class="absolute top-0 left-0 w-full text-center bg-half-white p-2 transition">
                                        {{ $child->name }}
                                    </span>

                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            @endforeach
        </div>
    </div>
</section>