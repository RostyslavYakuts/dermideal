<?php

namespace di\App\Models;

class HomeModel implements ModelInterface
{
    public \WP_Post$page;

    public function __construct($page){
        $this->page = $page;
    }

    private function get_products_categories(bool $hide_empty_parent = true, bool $hide_empty_child = true): array
    {
        $parents = get_terms([
            'taxonomy'   => 'product_cat',
            'parent'     => 0,
            'hide_empty' => $hide_empty_parent,
            'orderby'    => 'name',
            'order'      => 'ASC',
        ]);
        $categories = [];

        foreach ($parents as $parent) {

            $children = get_terms([
                'taxonomy'   => 'product_cat',
                'parent'     => $parent->term_id,
                'hide_empty' => $hide_empty_child,
                'orderby'    => 'name',
                'order'      => 'ASC',
            ]);

            if ($children) {
                $categories[] = [
                    'parent'   => $parent,
                    'children' => $children,
                ];
            }
        }
        return $categories;
    }

    private function get_new_products(): array|\stdClass
    {
        $args = [
            'status'    => 'publish',
            'limit'     => 10,
            'orderby'   => 'date',
            'order'     => 'DESC',
            'return'    => 'ids',
        ];

        return wc_get_products($args);
    }
    public function get_post_data(): array
    {
        $id = $this->page->ID;
        $h1 = get_field('h1', $id) ?: '';


        return [
            'id' => $id,
            'h1'=> $h1,
            'background_image'=>get_the_post_thumbnail($id,'full',['class'=>'object-contain md:object-cover absolute top-0 left-0 z-0 w-full h-auto md:h-full']),
            'description'=>get_field('description', $id)??'',
            'cta_text'=>get_field('cta_text',$id) ?? '',
            'cta_link'=>get_field('cta_link',$id) ?? '',
            'bg_slider'=>get_field('bg_slider',$id) ?? [],

            'new_products' => $this->get_new_products(),
            'categories'=>$this->get_products_categories(false,false),

            'stock_title'=>get_field('stock_title',$id) ?? '',
            'stock_description'=>get_field('stock_description',$id) ?? '',
            'stock'=>get_field('stock',$id) ?? [],

            'bestsellers_title'=>get_field('bestsellers_title',$id) ?? '',
            'bestsellers'=>get_field('bestsellers',$id) ?? [],

            'advantages_section_title'=>get_field('advantages_section_title',$id) ?? '',
            'advantages_section_description'=>get_field('advantages_section_description',$id) ?? '',
            'advantages_section_features'=>get_field('advantages_section_features',$id) ?? [],
            'advantages_section_slider'=>get_field('advantages_section_slider',$id) ?? [],

            'statistic_section_title'=>get_field('statistic_section_title',$id) ?? '',
            'statistic_section_marks'=>get_field('statistic_section_marks',$id) ?? [],

            'top_product_title'=>get_field('top_product_title',$id) ?? '',
            'top_product_image'=>get_field('top_product_image',$id) ?? [],
            'top_product_short_description'=>get_field('top_product_short_description',$id) ?? '',
            'top_product_features'=>get_field('top_product_features',$id) ?? '',
            'top_product_description'=>get_field('top_product_description',$id) ?? '',
            'top_product_link'=>get_field('top_product_link',$id) ?? '',


            'banner_title'=>get_field('banner_title',$id) ?? '',
            'banner_description'=>get_field('banner_description',$id) ?? '',
            'banner_image'=>get_field('banner_image',$id) ?? [],
            'banner_cta_link'=>get_field('banner_cta_link',$id) ?? '',

            'motivation_section_title'=>get_field('motivation_section_title', $id)??'',
            'motivation_section_short_description'=>get_field('motivation_section_short_description', $id)??'',
            'motivation_section_description'=>get_field('motivation_section_description', $id)??'',
            'motivation_section_image'=>get_field('motivation_section_image', $id) ?? [],
            'arguments_list'=>get_field('arguments_list', $id) ?? [],

            'testimonials_title' => get_field('testimonials_title', $id) ?? '',
            'testimonials_description' => get_field('testimonials_description', $id) ?? '',
            'testimonials_slider' => get_field('testimonials_slider', $id) ?? [],


            'brands_title' => get_field('brands_title', $id) ?? '',
            'brands_description' => get_field('brands_description', $id) ?? '',
            'brands' => get_field('brands', $id) ?? [],


            'title' => get_the_title(),
            'content' => apply_filters('the_content', get_the_content()),

        ];

    }
}