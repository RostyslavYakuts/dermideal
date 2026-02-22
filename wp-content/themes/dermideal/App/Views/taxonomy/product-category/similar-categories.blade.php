{{-- Similar Categories --}}
<div class="mt-12 w-full py-[50px] px-[20px] bg-slate-200">
    @if($data['similar_categories'])
        <div class="container mx-auto flex flex-row flex-wrap gap-3">
        @foreach($data['similar_categories'] as $category)
            @php
                $link = get_term_link($category);
            @endphp
            <a href="{{$link}}" target="_blank"
               class="p-3 bg-brand text-white border border-brand rounded hover:bg-white hover:text-brand">
                {{$category->name}}
            </a>
        @endforeach
        </div>
    @endif
</div>