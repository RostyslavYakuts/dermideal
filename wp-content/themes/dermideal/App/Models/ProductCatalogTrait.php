<?php

namespace di\App\Models;

trait ProductCatalogTrait
{
    private function getProductsCategories(
        bool $hideEmptyParent = true,
        bool $hideEmptyChild = true
    ): array {
        $parents = get_terms([
            'taxonomy'   => 'product_cat',
            'parent'     => 0,
            'hide_empty' => $hideEmptyParent,
            'orderby'    => 'name',
            'order'      => 'ASC',
        ]);

        if (is_wp_error($parents) || empty($parents)) {
            return [];
        }

        $categories = [];

        foreach ($parents as $parent) {

            $children = get_terms([
                'taxonomy'   => 'product_cat',
                'parent'     => $parent->term_id,
                'hide_empty' => $hideEmptyChild,
                'orderby'    => 'name',
                'order'      => 'ASC',
            ]);

            if (is_wp_error($children)) {
                continue;
            }

            $categories[] = [
                'parent'   => $parent,
                'children' => $children ?: [],
            ];
        }

        return $categories;
    }

    private function getNewProducts(int $limit = 10): array
    {
        return wc_get_products([
            'status'  => 'publish',
            'limit'   => $limit,
            'orderby' => 'date',
            'order'   => 'DESC',
            'return'  => 'ids',
        ]) ?: [];
    }
}