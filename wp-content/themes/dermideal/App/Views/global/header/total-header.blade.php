{{-- Template Part Total Header --}}

<header class="total-header total-header-js bg-white shadow h-[110px] fixed top-0 right-0 w-full z-50">
	<div class="container mx-auto w-full flex flex-row justify-between items-center text-white text-sm">
			<div class="header-desktop-data flex items-center">
				@include('global.header.logotype',['options'=>$options])
			</div>
		@include('global.header.top-menu',['options'=>$options])


		<div class="flex gap-x-5 items-center">
			<div class="flex l:hidden hamburger relative hamburger-js cursor-pointer w-[40px] h-[40px]">
				<span class="hamburger-line hamburger-top"></span>
				<span class="hamburger-line hamburger-middle"></span>
				<span class="hamburger-line hamburger-bottom"></span>
			</div>
			@include('global.header.cart',['options'=>$options])
		</div>



	</div>
</header>
