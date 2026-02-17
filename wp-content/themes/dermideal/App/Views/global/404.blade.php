{{-- 404 Page --}}
@php
	/**
	 * @var array $data
	 */
    $home_url = get_home_url();
 	$bg = $data['404_image'] ?? [];
    $text = $data['404_text'] ?? '';
    $style = '';
    if(isset($bg['url'])){
        $style = 'style="background-image:url('. $bg['url'] .'); background-repeat: no-repeat; background-size: cover;" ';
    }
@endphp
@extends('layout')

@section('content')
		<div {!! $style !!} class="w-full h-[100vh] flex justify-center items-center">

				<div class="max-w-[537px]  md:h-[584px] flex flex-col justify-between items-center gap-[40px] md:gap-[80px] px-4 pb-10">
					<div class="text-center text-brand text-[168px] md:text-[238px] leading-none">404</div>
					<div class="flex flex-col gap-[32px]">
						<h1 class="mt-10 text-center  text-[38px] lgx:text-[48px] text-white leading-none">Page not found</h1>
						<p class="max-w-[440px] text-xl text-center text-white">{!! $text !!}</p>
					</div>

					@include('global.brand-btn',[
                   'data'=>[
                       'button_link'=>$home_url,
                       'button_title'=>'Back to home',
                       'tw_classes'=>'hero-first-cta w-[209px] py-4 h-[48px] text-lg text-white bg-brand'
                   ]
                ])
				</div>
		</div>
@endsection
