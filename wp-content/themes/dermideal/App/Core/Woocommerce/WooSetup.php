<?php

namespace di\App\Core\Woocommerce;

class WooSetup
{
    public function __construct(){
        add_action('after_setup_theme', [$this,'support_woocommerce'] );
        add_filter('woocommerce_add_to_cart_fragments',[$this, 'sync_ajax_cart'] );
    }
    public function support_woocommerce(): void
    {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
    public function sync_ajax_cart(): array
    {
        ob_start(); ?>

        <span class="cart-count absolute top-0 -right-[5px] text-sm">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
        </span>

        <?php
        $fragments['.cart-count'] = ob_get_clean();

        return $fragments;
    }
}