<?php

namespace di\App\Models;

class ShopModel implements ModelInterface
{
    use ProductCatalogTrait;
    public \WP_Post_Type$page;

    public function __construct($page){
        $this->page = $page;
    }

    public function get_post_data(): array
    {
        $id = wc_get_page_id('shop');
        $post = get_post($id);
        setup_postdata($post);
        $content = apply_filters('the_content', $post->post_content);
        wp_reset_postdata();

        return [
            'id' => $id,
            'background_image'=>get_the_post_thumbnail($id,'full',['class'=>'object-cover absolute top-0 left-0 z-0 w-full h-auto']),
            'title' => get_the_title($id),
            'content' => $content,
            'new_products' => $this->getNewProducts(),
            'categories'=>$this->getProductsCategories(),
            'stock'=>get_field('general_stock','options') ?? [],
        ];

    }
}