<?php

namespace di\App\Controllers\Factories;

use di\App\Controllers\CategoryController;
use di\App\Controllers\ProductCategoryController;
use di\App\Controllers\ShopController;
use di\App\Controllers\ControllerInterface;
use di\App\Controllers\Error404Controller;
use di\App\Controllers\HomeController;
use di\App\Controllers\PageController;
use di\App\Controllers\SingleController;
use di\App\Controllers\TagController;
use di\App\Models\HomeModel;
use di\App\Models\ShopModel;
use di\App\Models\ProductCategoryModel;


class ControllerFactory
{
    public static function make($current_obj): ControllerInterface
    {

        if (is_front_page()) {
            $homeModel = new HomeModel($current_obj);
            return new HomeController($homeModel);
        }

        if (is_singular('post')) {
            return new SingleController();
        }

        if($current_obj instanceof \WP_Post_Type && is_shop()){
            $shopModel = new ShopModel($current_obj);
            return new ShopController($shopModel);
        }

        if (is_page()) {
            $template = get_post_meta(get_queried_object_id(), '_wp_page_template', true);
            return match ($template) {
                default => new PageController(),
            };
        }

        if (is_category()) {
            return new CategoryController();
        }

        if (is_tag()) {
            return new TagController();
        }

        if(is_tax('product_cat')){
            $productCategoryModel = new ProductCategoryModel($current_obj);
            return new ProductCategoryController($productCategoryModel);
        }

        return new Error404Controller();
    }
}