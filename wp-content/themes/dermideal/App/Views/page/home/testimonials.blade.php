{{-- Home testimonials --}}
@php
    use di\App\Core\Helpers\StringHelper;

    $slash = '<br class="hidden l:block"><span class="hidden l:inline-block ml-[35px] mr-[40px]"><svg class="" width="42" height="29" viewBox="0 0 42 29" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M37.1497 5.30684L39.2509 5.39993L38.0218 7.1067L4.71747 23.2435L2.61621 23.1504L3.84539 21.4436L37.1497 5.30684Z" fill="#19C37A"/>
    <path d="M29.9714 3.22881L33.3413 3.81841L5.03262 17.5347L7.49098 14.1211L29.9714 3.22881Z" fill="#19C37A"/>
    <path d="M35.2057 14.0267L36.8315 11.0165L8.52285 24.7328L12.7254 24.919L35.2057 14.0267Z" fill="#19C37A"/>
    </svg></span>
    ';
        $h2 = str_replace('[/]',$slash,$data['testimonials_title']);

@endphp

<section id="testimonials" class="w-full bg-black py-[60px] l:py-[80px]">
    <div class="container mx-auto">
        <div class="w-full flex flex-col l:flex-row l:justify-between l:items-start">
            <div class="l:min-h-[375px] gap-[40px] flex flex-col justify-between">
                <div class="text-white flex flex-col gap-[20px] l:gap-[40px] w-full l:max-w-[460px]">
                    <h2 class="text-[36px] l:text-[48px]">{!! $h2 !!}</h2>
                    <p>{{$data['testimonials_description']}}</p>
                </div>

                <div class="upwork flex flex-row items-center gap-[12px]">
                    <div class="">
                        <svg width="57" height="40" viewBox="0 0 57 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.0742 3.39114C37.9646 3.42004 33.3209 7.39359 31.5824 13.7257C28.6656 9.31161 26.39 4.26257 25.0853 0L18.655 0.0297779L18.744 16.791C18.7478 17.5801 18.5935 18.3623 18.29 19.0927C17.9864 19.8232 17.5395 20.4877 16.9748 21.0483C16.41 21.6089 15.7385 22.0547 14.9986 22.3601C14.2587 22.6656 13.4649 22.8247 12.6624 22.8284C11.0418 22.836 9.48451 22.2101 8.33313 21.0886C7.76302 20.5332 7.30973 19.8729 6.99913 19.1453C6.68854 18.4177 6.52672 17.6371 6.52292 16.848L6.43386 0.0867052L0 0.117358L0.0890622 16.8795C0.114 23.8352 5.76589 29.3466 12.6825 29.3116C19.599 29.2766 25.2002 23.7187 25.169 16.7613L25.1556 13.9149C26.4524 16.4372 28.0733 19.1172 29.8546 21.4819L25.9225 40L32.5131 39.9702L35.3452 26.516C37.9245 28.0864 40.8226 29.0208 44.198 29.0051C51.2731 28.9744 57.0355 23.2571 56.9998 15.9818C56.9678 9.0226 51.1502 3.35873 44.0751 3.39026L44.0742 3.39114ZM44.166 22.5241C41.5938 22.5355 39.0164 21.4416 36.9181 19.7101L37.5486 17.1703V17.0109C38.0189 14.3186 39.4421 9.72762 44.2657 9.7066C45.9702 9.70355 47.6067 10.3639 48.8177 11.5434C50.0287 12.723 50.7158 14.3258 50.729 16.0019C50.5838 19.6392 47.5432 22.5004 44.1651 22.5153L44.166 22.5241Z"
                                  fill="#19C37A"/>
                        </svg>
                    </div>
                    <div class="upwork-data text-white traking-[0px] xmm:text-lg flex flex-col gap-1 ">
                        <span class="flex flex-row items-center gap-1">
                            <span class="font-semibold">{{$data['upwork_mark']}}</span> on Upwork
                        </span>
                        <span class="flex flex-row items-center gap-1">
                            <span class="font-semibold">{{$data['upwork_reviews_number']}} + </span> Verified Reviews&nbsp;
                            <svg width="3" height="3" viewBox="0 0 3 3" xmlns="http://www.w3.org/2000/svg">
                              <rect width="3" height="3" fill="white"/>
                            </svg>&nbsp;
                            <a class="text-brand hover:text-brand-hover" target="_blank" rel="noreferrer noopener"
                               href="{{$data['upwork_link']}}">View all</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="swiper mt-[40px] l:mt-[0px] overflow-hidden testimonials-container testimonials-container-js">
                <div class="swiper-wrapper relative">
                    @if($data['testimonials_slider'])
                        @foreach($data['testimonials_slider'] as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-flip-container">
                                    <div class="flip-card flip-card-js">
                                        <div class="py-[19px] px-[24px] h-[397px]  md:h-[320px] side front relative flex flex-col justify-between">
                                            <div class="flex flex-col gap-[12px]">
                                                <span class="block max-h-[40px] leading-none text-[96px]">“</span>
                                                <p class="text-sm xmm:text-base">{!! $testimonial['feedback'] !!}</p>
                                            </div>
                                            <div class="flex flex-row justify-between items-center ">
                                                <div class="flex flex-row items-center gap-4">
                                                    <span class="font-bold text-lg flex justify-center items-center rounded-full w-[50px] h-[50px] text-white uppercase bg-brand  ">{{
                                                         StringHelper:: getInitials($testimonial['name'])
                                                    }}</span>
                                                    <div class="flex flex-col gap-1 ">
                                                        <span class="text-base font-semibold xmm:text-lg">{{$testimonial['name']}}</span>
                                                        <span class="text-sm xmm:text-base  text-brand-text">{{$testimonial['role']}}</span>
                                                    </div>
                                                </div>
                                                <button class="testimonials-button-flip w-[54px] md:w-[174px] h-[46px] rounded-full border border-brand bg-white text-brand hover:text-white hover:bg-brand flex justify-center items-center flex-row gap-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M12 5.25C7.6926 5.25 4.03589 8.04402 2.74776 11.9196C2.72989 11.9733 2.72981 12.0315 2.74768 12.0852C4.03877 15.9589 7.69457 18.75 12 18.75C16.3075 18.75 19.9641 15.956 21.2513 12.0806L21.2522 12.0778C21.2701 12.0246 21.2697 11.969 21.2526 11.9183L21.2515 11.9151C19.9605 8.04115 16.3056 5.25 12 5.25ZM1.3244 11.4462C2.81033 6.97587 7.02757 3.75 12 3.75C16.9705 3.75 21.1856 6.97285 22.6746 11.4409C22.7962 11.8027 22.7956 12.1934 22.6743 12.5548C21.1891 17.0247 16.972 20.25 12 20.25C7.02963 20.25 2.81352 17.0272 1.32451 12.5591C1.20438 12.1981 1.20432 11.8073 1.3244 11.4462Z"
                                                              fill="#19C37A"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M12 9.75C11.4033 9.75 10.831 9.98705 10.409 10.409C9.98709 10.831 9.75004 11.4033 9.75004 12C9.75004 12.5967 9.98709 13.169 10.409 13.591C10.831 14.0129 11.4033 14.25 12 14.25C12.5968 14.25 13.1691 14.0129 13.591 13.591C14.013 13.169 14.25 12.5967 14.25 12C14.25 11.4033 14.013 10.831 13.591 10.409C13.1691 9.98705 12.5968 9.75 12 9.75ZM9.34839 9.34835C10.0517 8.64509 11.0055 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.355 10.0516 15.75 11.0054 15.75 12C15.75 12.9946 15.355 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0055 15.75 10.0517 15.3549 9.34839 14.6517C8.64513 13.9484 8.25004 12.9946 8.25004 12C8.25004 11.0054 8.64513 10.0516 9.34839 9.34835Z"
                                                              fill="#19C37A"/>
                                                    </svg>
                                                    <span class="hidden md:inline">View original</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="py-[19px] px-[24px] flex flex-col justify-between side back h-[397px]  md:h-[320px]">
                                            <img width="455" height="222" src="{{$testimonial['screenshot']['url']}}"
                                                 alt="{{$testimonial['screenshot']['alt']}}">
                                            <div class="mt-2 flex flex-row justify-between items-center">
                                                <div class="flex flex-col gap-1">
                                                    <span class="text-base font-semibold  xmm:text-lg">Original review</span>
                                                    <span class="text-xs xmm:text-sm text-brand-text">from Upwork</span>
                                                </div>
                                                <button class="testimonials-button-flip w-[54px] md:w-[188px] h-[46px] flex items-center justify-center flex-row gap-3 rounded-full bg-white border border-brand text-brand hover:text-white hover:bg-brand">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.1667 16.375L7 12M7 12L11.1667 7.625M7 12H17"
                                                              stroke="#19C37A" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="hidden md:inline">Back to review</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="testimonials-swiper-pagination flex justify-center items-center gap-2 mt-[60px] relative"></div>
            </div>
        </div>
    </div>
</section>