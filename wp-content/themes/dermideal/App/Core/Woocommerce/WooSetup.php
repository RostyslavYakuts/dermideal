<?php

namespace di\App\Core\Woocommerce;

class WooSetup
{
    public function __construct(){
        add_action('after_setup_theme', [$this,'support_woocommerce'] );
    }
    function support_woocommerce(): void
    {
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
}