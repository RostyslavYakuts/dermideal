
<?php
    /**
     * @var array $options
     */
    $tw_class = 'mt-[150px]';
    $footer_background_image = $options['footer_background_image'] ?? [];
    $style = '';
    if($footer_background_image){
        $style = 'style="background:url('.$footer_background_image['url'].') no-repeat;
         background-position: center; background-size:cover; border-top-right-radius:20px; border-top-left-radius:20px;"';
    }
?>
<footer id="footer"  class="w-full mt-[96px] rounded-tl-[20px] rounded-tr-[20px] bg-black relative">
    <div id="footer_animated_bg" class="footer-animated-bg rounded-tl-[20px] absolute top-0 left-0 w-full h-[40%] lgx:h-full"></div>
    <div <?php echo $style; ?> class="rounded-tl-[20px] relative l:z-20">
        <div class="container mx-auto w-full">
            <?php if(!is_page_template('page-contact-us.php')): ?>
                <?php echo $__env->make('global.footer.footer-contacts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php else: ?>
                <?php $tw_class= 'pt-[35px]' ?>
            <?php endif; ?>
            <div class="<?php echo e($tw_class); ?>  md:mt-0  relative z-50 flex flex-col items-center md:items-start gap-12 justify-between">
                <div class="w-full flex flex-col items-center gap-6 md:flex-row flex-wrap justify-between pb-[40px]">
                    <?php echo $__env->make('global.footer.logotype', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('global.footer.footer-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
            <?php echo $__env->make('global.footer.cookies-warning', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('global.footer.copyright', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>

</footer>
<?php
wp_footer();
?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/footer.blade.php ENDPATH**/ ?>