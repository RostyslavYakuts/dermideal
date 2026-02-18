{{-- Cart Button --}}
@php
    $cart_count = WC()->cart->get_cart_contents_count();
    $cart_url = wc_get_cart_url();
@endphp

<a href="{{ $cart_url }}"
   class="rounded-full relative text-brand font-bold p-3 shadow-lg text-xl flex items-center space-x-2 z-50">
    <i class="fa fa-shopping-bag text-brand" aria-hidden="true"></i>
    <span class="absolute top-0 -right-[5px] text-sm">{{ $cart_count }}</span>
</a>
