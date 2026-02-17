{{-- CTA --}}
@php
/**
 * @var string $location
 * @var string $text
*/

@endphp
@if(isset($options['cta']))
    @include('global.brand-btn',[
             'data'=>[
              'location' => $location ?? '',
              'text' => $text ?? '',
              'button_link'=>$options['cta']['url'] ?? '',
              'button_title'=>$options['cta']['text'] ?? '',
              'tw_classes'=>'relative top-menu-cta glow lgxm:hidden bg-gradient-to-b from-[#313131] to-black w-[154px] py-[8px] text-sm'
          ]
      ])
@endif
