<?php

namespace di\App\Controllers;

use duncan3dc\Laravel\BladeInstance;

class SingleController implements ControllerInterface
{
    protected BladeInstance $blade;

    public function __construct()
    {
        $views = get_theme_file_path('App/Views');
        $cache = get_theme_file_path('storage/cache');
        $this->blade = new BladeInstance($views, $cache);
    }

    public function render(): void
    {

        $view = 'single.post.post';

        echo $this->blade->make($view, [
            'title' => get_the_title(),
            'thumbnail' => get_the_post_thumbnail(),
            'content' => apply_filters('the_content', get_the_content()),
        ])->render();
    }
}