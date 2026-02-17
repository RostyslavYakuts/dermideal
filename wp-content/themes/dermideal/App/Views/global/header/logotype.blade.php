@php
 $href = home_url();
 if(is_front_page()){
      $href = home_url() . '#hero_section';
 }
@endphp
@if(isset($options['header_logo']))

	<a class="h-[110px] relative z-10 flex items-center" aria-label="logo" href="{{ $href  }}">
		<img decoding="async" loading="lazy" width="107" height="200" class="anchor-link-js h-auto w-[100px]" src="{{ $options['header_logo']['url'] ?? '' }}" alt="{{ $options['header_logo']['alt'] ?? '' }}">
	</a>

@endif
