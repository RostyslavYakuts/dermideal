<?php
namespace di\App\Core;


use di\App\Controllers\PaginationController;
use di\App\Core\CPT\CPTRegistrar;
use di\App\Core\Handlers\AjaxHandler;
use di\App\Core\Setup\ACFInteractionSetup;
use di\App\Core\Setup\CommentsSetup;
use di\App\Core\Setup\DefaultHeadIncludesCleaner;
use di\App\Core\Setup\EmojiSetup;
use di\App\Core\Setup\FeedsSetup;
use di\App\Core\Setup\FilesModSetup;
use di\App\Core\Setup\HomePageInitializer;
use di\App\Core\Setup\NavMenuSetup;
use di\App\Core\Setup\PermalinkInitializer;
use di\App\Core\Setup\StaticPagesInitializer;
use di\App\Core\Setup\ThumbnailSetup;
use di\App\Core\Setup\YoastInteractionSetup;
use di\App\Core\Shortcodes\DateShortcodes;
use di\App\Core\Woocommerce\WooSetup;

class Bootstrap
{
    public static function init(): void
    {
        (new HomePageInitializer())->register();
        (new StaticPagesInitializer())->register();
        (new PermalinkInitializer())->register();
        (new ACFInteractionSetup())->initialize();
        (new YoastInteractionSetup)->initialize();
        new  WooSetup;
        (new CommentsSetup)->initialize();
        (new DefaultHeadIncludesCleaner)->initialize();
        (new EmojiSetup)->initialize();
        (new FeedsSetup)->initialize();
        (new FilesModSetup)->initialize();
        (new NavMenuSetup)->initialize();
        (new ThumbnailSetup)->initialize();
        (new Enqueuer)->initialize();
        new CPTRegistrar;
        new PaginationController;
        new AjaxHandler();
        (new DateShortcodes())->register();
    }

}