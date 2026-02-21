{{-- Tags Shop --}}
@php
    /**
     * @var array $data
     */
    $tags = $data['tags'];
    if(!$tags) return;
@endphp
<section class="bg-white w-full">
    <div class="container mx-auto">
        <div class="mt-10 flex flex-wrap flex-row items-center gap-2">
            @foreach($tags as $tag)
                <a class="bg-brand text-white hover:bg-white hover:text-brand border border-brand rounded p-2"
                   href="{{get_term_link($tag)}}">
                    {{$tag->name}}
                </a>
            @endforeach
        </div>
    </div>
</section>