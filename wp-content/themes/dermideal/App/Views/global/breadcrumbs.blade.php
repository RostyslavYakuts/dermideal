{{-- Template part for breadcrumbs by Yoast SEO plugin--}}

@php
		if(function_exists('yoast_breadcrumb') && !is_front_page() && !is_404()) {
			yoast_breadcrumb( '<div class="breadcrumbs-wrapper"><div id="breadcrumbs" class="breadcrumbs text-base overflow-y-auto whitespaces-nowrap flex items-center gap-x-2 breadcrumbs ">','</div></div>' );
		}
@endphp
