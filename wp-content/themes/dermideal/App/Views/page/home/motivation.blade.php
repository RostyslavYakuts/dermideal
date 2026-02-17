{{-- Home Motivation Section --}}
@php
    $star_icon = '<div class="min-w-[29px] l:min-w-auto l:w-auto"><svg class="w-[18px] h-[20px] min-w-[18px] min-h-[20px] max-w-[18px] max-h-[20px]" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8.33691" width="1.29028" height="20" fill="#19C37A"/>
                        <rect width="1.29031" height="19.9995" transform="matrix(0.499987 0.866033 -0.866018 0.500013 17.3198 4.44043)" fill="#19C37A"/>
                        <rect width="1.29031" height="19.9995" transform="matrix(-0.499987 0.866033 -0.866018 -0.500013 17.9656 14.4404)" fill="#19C37A"/>
                    </svg></div>';
    $slash_icon = '<div class="min-w-[29px] l:min-w-auto l:w-auto"><svg class="w-[29px] h-[29px] min-w-[29px] min-h-[29px] max-w-[29px] max-h-[29px]" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.3949 3.654L24.9153 3.20038L24.4617 4.72078L4.72151 24.4609L3.20112 24.9146L3.65473 23.3942L23.3949 3.654Z" fill="#19C37A"/>
                        <path d="M17.7664 3.94829L20.3137 3.53455L3.53454 20.3137L4.44177 17.2729L17.7664 3.94829Z" fill="#19C37A"/>
                        <path d="M24.167 10.3477L24.5808 7.80041L7.80161 24.5795L10.8424 23.6723L24.167 10.3477Z" fill="#19C37A"/>
                    </svg></div>';
    $argument_common_tw = 'w-full l:w-[46.5%] l:max-w-[540px] l:max-h-[80px] py-[20px] px-[12px] rounded-[20px] bd-white shadow-custom-shadow flex items-start gap-2';

@endphp
<div id="motivation" class="pt-[80px] l:pt-[120px] "></div>
<section class="container mx-auto">
    <div class="flex flex-col gap-[12px] md:flex-row md:justify-between md:items-center">
        <h2 class="w-full text-[36px] l:text-[48px]">
            {!! $data['motivation_section_title'] !!}
        </h2>
        <p class="w-full text-sm l:text-base max-w-[369px] text-brand-text">{{$data['motivation_section_description']}}</p>
    </div>
    <div class="arguments-list my-[40px] l:my-[60px] flex flex-col gap-5" >
        @if($data['arguments_list'])
            @foreach($data['arguments_list'] as $index => $list)
                @php
                    $argument = '';
                    if($index === 0){
                        $argument = '<div class="flex w-full l:justify-end"><div class="'.$argument_common_tw.' l:mr-[160px]">
                        '.$star_icon.'
                        <span class="text-sm l:text-base">'.$list['argument'].'</span>
                        </div></div>';
                    }
                    if($index === 1){
                        $argument = '<div class="flex flex-col l:flex-row l:justify-between gap-5">
                        <div class="'.$argument_common_tw.'">
                        '.$slash_icon.'
                        <span class="text-sm l:text-base">'.$list['argument'].'</span>
                        </div>';
                    }
                    if($index === 2){
                         $argument = '
                        <div class="'.$argument_common_tw.' l:mt-[36px]">
                        '.$star_icon.'
                        <span class="text-sm l:text-base">'.$list['argument'].'</span>
                        </div></div>';
                    }
                    if($index === 3){
                           $argument = '
                        <div class="'.$argument_common_tw.' l:ml-[160px]">
                        '.$slash_icon.'
                        <span class="text-sm l:text-base">'.$list['argument'].'</span>
                        </div>';
                    }

                @endphp
                    {!! $argument !!}
            @endforeach
        @endif
    </>
</section>