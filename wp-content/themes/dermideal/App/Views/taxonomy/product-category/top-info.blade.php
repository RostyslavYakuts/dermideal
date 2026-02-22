{{-- Product Category Top Info --}}
<section class="container mx-auto mt-5 flex items-start gap-10">
    <img class="w-full h-auto max-w-[500px]"
         src="{{$data['image_url']}}"
         alt="Категорія: {{$data['name']}}"
         loading="lazy"
         decoding="async" width="500" height="300">
    <div class="w-full">
        <h1 class="text-4xl uppercase">{{$data['name']}}</h1>
        <div class="mt-4">{!! $data['description'] !!}</div>
    </div>
</section>