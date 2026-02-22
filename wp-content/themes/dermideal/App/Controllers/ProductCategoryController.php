<?php

namespace di\App\Controllers;
use di\App\Models\ModelInterface;
use duncan3dc\Laravel\BladeInstance;
class ProductCategoryController implements ControllerInterface
{
    protected BladeInstance $blade;
    protected ModelInterface $model;

    public function __construct($model)
    {
        $views = get_theme_file_path('App/Views');
        $cache = get_theme_file_path('storage/cache');
        $this->blade = new BladeInstance($views, $cache);
        $this->model = $model;
    }
    public function render(): void
    {
        $view = 'taxonomy.product-category.product-category';
        $data = $this->model->get_post_data();
        echo $this->blade->make($view,  [
            'data' => $data
        ])->render();
    }
}