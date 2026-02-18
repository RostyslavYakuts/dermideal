<?php

namespace di\App\Models;

class HomeModel implements ModelInterface
{
    public \WP_Post$page;

    public function __construct($page){
        $this->page = $page;
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
            'services'=>get_field('services',$id) ?? [],

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

            'cases_section_title'=>get_field('cases_section_title',$id) ?? '',
            'cases_section_cta_text'=>get_field('cases_section_cta_text',$id) ?? '',
            'cases_section_cta_link'=>get_field('cases_section_cta_link',$id) ?? '',
            'cases_section_slider'=>get_field('cases_section_slider',$id) ?? [],

            'banner_title'=>get_field('banner_title',$id) ?? '',
            'banner_description'=>get_field('banner_description',$id) ?? '',
            'banner_cta_text'=>get_field('banner_cta_text',$id) ?? '',
            'banner_cta_link'=>get_field('banner_cta_link',$id) ?? '',

            'motivation_section_title'=>get_field('motivation_section_title', $id)??'',
            'motivation_section_short_description'=>get_field('motivation_section_short_description', $id)??'',
            'motivation_section_description'=>get_field('motivation_section_description', $id)??'',
            'motivation_section_image'=>get_field('motivation_section_image', $id) ?? [],
            'arguments_list'=>get_field('arguments_list', $id) ?? [],

            'testimonials_title' => get_field('testimonials_title', $id) ?? '',
            'testimonials_description' => get_field('testimonials_description', $id) ?? '',
            'testimonials_slider' => get_field('testimonials_slider', $id),
            'upwork_mark' => get_field('upwork_mark', $id) ?? '',
            'upwork_reviews_number' => get_field('upwork_reviews_number', $id) ?? '',
            'upwork_link' => get_field('upwork_link', $id) ?? '',

            'form_title' => get_field('form_title', $id) ?? '',
            'form_description' => get_field('form_description', $id) ?? '',

            'title' => get_the_title(),
            'content' => apply_filters('the_content', get_the_content()),

        ];

    }
}