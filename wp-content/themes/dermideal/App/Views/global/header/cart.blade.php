{{-- Cart Button --}}
@php
    $cart_url = wc_get_cart_url();
@endphp

<a href="{{ $cart_url }}"
   class="rounded-full relative text-brand font-bold p-3 shadow-lg text-xl flex items-center space-x-2 z-50">

    <i class="fa fa-shopping-bag text-brand"></i>

    <span class="cart-count absolute top-0 -right-[5px] text-sm">
        {{ WC()->cart->get_cart_contents_count() }}
    </span>

</a>