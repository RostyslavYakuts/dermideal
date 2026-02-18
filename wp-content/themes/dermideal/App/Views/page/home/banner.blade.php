{{-- Home Banner --}}
@php
    /**
     * @var array $data
     */
    $style = '';
    if($data['banner_image']){
        $style = 'background: url(' . $data['banner_image']['url'] .') no-repeat;background-size: cover;';
    }
@endphp
<section style="{{$style}}" id="banner" class="banner relative w-full py-[60px] l:py[80px] flex flex-col items-center gap-6">

    <div class="flex flex-col items-center justify-center gap-6 relative z-10 text-brand">
        <h2 class="px-[20px] text-[36px] l:text-[48px] text-center">
            {!! $data['banner_title']  !!}
        </h2>
        <p class="px-[20px] text-sm l:text-base text-center">{{$data['banner_description']}}</p>
        <a href="{{$data['banner_cta_link']}}" class=" p-4 banner-cta flex justify-center items-center text-brand border border-white bg-white hover:text-white hover:bg-brand rounded-full w-[250px]">
            Перейти
        </a>
    </div>

</section>