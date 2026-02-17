{{-- Home About Us --}}

<section id="about_us" class=" container mx-auto about-us pt-[80px] l:pt-[120px]">
    <span class="flex justify-center items-center font-semibold w-[114px] bg-[#19C37A1A] text-[20px] rounded-full text-brand ">
        About Us
    </span>
    <h2 class="text-[38px] l:text-[48px] mt-3 l:max-w-[70%]">
        {!! $data['about_us_section_title'] !!}
    </h2>
    <div class="mt-3 w-full flex justify-end">
        <p class="text-brand-text l:max-w-[500px]">{{$data['about_us_section_description']}}</p>
    </div>
    <div class="mt-[20px] l:mt-[67px] gap-6 grid grid-cols-2 md:flex md:flex-row md:justify-between md:items-center">
        @if($data['about_us_section_statistic'])
            @foreach($data['about_us_section_statistic'] as $item)
                <div class="flex flex-col md:justify-center md:items-center">
                    <span class="flex items-center gap-2 leading-none text-[60px] l:text-[80px] text-brand-header">
                        {{$item['number']}}
                        <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.53564 3.53564L15.5356 15.5356L3.53564 27.5356" stroke="#19C37A" stroke-width="5" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <span class="text-brand-text">{{$item['title']}}</span>
                </div>
            @endforeach
        @endif
    </div>

    <div class="video-viewport-js mt-[40px] l:mt-[67px] relative">
        <button data-video-src="{{$data['about_us_section_video']['url']}}"
                class="video-play-btn-js z-20  absolute top-1/2 left-1/2
        -translate-x-1/2 -translate-y-1/2
        rounded-full bg-brand w-[50px] h-[50px] md:w-[100px] md:h-[100px] flex justify-center items-center">
            <svg class="ml-1 md:w-[30px] md:h-[30px]" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 10.3921L0 20.7844V-0.000214577L18 10.3921Z" fill="white"/>
            </svg>
        </button>
        <video
                class="absolute top-0 left-0 video-js opacity-0 transition-all w-full h-auto l:h-[700px] rounded-[20px] object-cover"
                src=""
                autoplay
                muted
                playsinline
                controls
        ></video>
        <img class="relative z-10 video-bg-js transition-all rounded-[20px] w-full h-auto l:h-[700px] object-cover" width="1170" height="700" loading="lazy" decoding="async" src="{{$data['about_us_section_video_background']['url']}}" alt="{{$data['about_us_section_video_background']['alt']}}">
    </div>

</section>