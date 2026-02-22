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
        $parent_cat = $this->obj->parent;
        $thumb_id = get_term_meta($id, 'thumbnail_id', true);
        $image = $thumb_id
            ? wp_get_attachment_image_url($thumb_id, 'medium')
            : null;
        return [
            'id' => $id,
            'name'=>$this->obj->name,
            'image_url'=>$image,
            'description'=>$this->obj->description,
            'parent'=>$parent_cat,
            'count'=>$this->obj->count
        ];

    }
}