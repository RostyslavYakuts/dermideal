<?php

namespace di\App\Controllers;

use duncan3dc\Laravel\BladeInstance;

class TagController implements ControllerInterface
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

        $view = 'taxonomy.tag.tag';

        echo $this->blade->make($view, [
            'title' => get_the_title(),
            'content' => apply_filters('the_content', get_the_content()),
        ])->render();
    }
}