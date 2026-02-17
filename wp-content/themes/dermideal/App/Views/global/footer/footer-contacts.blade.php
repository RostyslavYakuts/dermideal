{{-- Footer Socials --}}
<div class="flex flex-col gap-[40px] l:gap-0 l:flex-row justify-between items-start l:items-end">
		<div class="flex flex-col text-white font-bold text-[24px]">
			<a href="tel:{{$options['admin_phone']}}">{{$options['admin_phone']}}</a>
			<a href="mailto:{{$options['admin_email']}}">{{$options['admin_email']}}</a>
		</div>

		<div class="footer-socials flex flex-row items-center gap-[26px]">
			@if($options['footer_socials'])
				@foreach($options['footer_socials'] as $social)
					<a class=" w-[40px] h-[40px] l:w-auto l:h-auto l:py-[9px] l:px-[16px] text-brand bg-[#19C37A1A] rounded-full text-sm flex justify-center items-center gap-2" aria-label="{{$social['title']}}" rel="noopener noreferrer" target="_blank" href="{{$social['link']}}">
						<img width="16" height="16" class="w-[16px] h-auto object-cover" src="{{$social['icon']['url']}}" alt="{{$social['title']}}">
						<span class="hidden l:inline">{{$social['title']}}</span>
					</a>
				@endforeach
			@endif

		</div>

</div>
