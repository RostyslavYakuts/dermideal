<?php

namespace di\App\Models;

class ProductCategoryModel implements ModelInterface
{
    public \WP_Term $obj;
    public function __construct($obj){
        $this->obj = $obj;
    }
    public function get_post_data(): array
    {
        $id = $this->obj->term_id;
        $parent_id = $this->obj->parent;
        $thumb_id = get_term_meta($id, 'thumbnail_id', true);
        $image = $thumb_id
            ? wp_get_attachment_image_url($thumb_id, 'medium')
            : null;

        if($parent_id){
            $similar_categories = get_terms([
                'taxonomy'   => 'product_cat',
                'parent'     => $parent_id,
                'hide_empty' => true,
                'orderby'    => 'name',
                'order'      => 'ASC',
                'exclude'    => [$id]
            ]);
        }else{
            $similar_categories = get_terms([
                'taxonomy'   => 'product_cat',
                'child_of'   => $id,
                'hide_empty' => true,
                'orderby'    => 'name',
                'order'      => 'ASC',
            ]);
        }

        return [
            'id' => $id,
            'name'=>$this->obj->name,
            'image_url'=>$image,
            'description'=>$this->obj->description,
            'parent'=>$parent_id,
            'count'=>$this->obj->count,
            'similar_categories'=>$similar_categories
        ];

    }
}