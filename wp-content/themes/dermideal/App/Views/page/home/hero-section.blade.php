{{-- Hero section --}}
@php
    /**
    * @var array $data
    */
    $bg_slider = $data['bg_slider'];
@endphp
<section id="hero_section"  class="h-calc-100-110 relative mt-[110px] w-full hero-section home-hero-section flex flex-col-reverse mdx:flex-col ">
    <div class="container mx-auto flex flex-col relative z-10">
        <div class="mdx:max-w-[550px] p-4 bg-[#ffffff99] mb-12 mdx:mb-0 mdx:mt-[168px] flex flex-col justify-center gap-12">
            <h1 class="text-brand text-[40px] font-lite l:text-[64px] leading-none">
                {{$data['h1']}}
            </h1>

            <div class="flex flex-col gap-6">
                <p class="max-w-[480px]">{{$data['description']}}</p>
                <a href="{{$data['cta_link']}}" class="rounded text-white bg-brand hover:bg-brand-hover w-full xs:w-[370px] h-[48px] flex justify-center items-center">
                        {{$data['cta_text']}}
                </a>
            </div>

        </div>
    </div>
    <div class="bg-slider swiper">
        <div class="swiper-wrapper">
            @foreach($bg_slider as $slide)
                <div class="swiper-slide w-full h-full"
                     style="background-image:url('{{$slide['image']['url']}}')">
                </div>
            @endforeach
        </div>
    </div>
</section>


