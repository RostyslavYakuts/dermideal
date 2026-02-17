
<div id="contact" class="pseudo-footer bg-white h-[153px] w-full"></div>
<footer class="container w-full mx-auto min-h-[312px] rounded-[30px] bg-dark-blue relative">
    <div class="px-[40px] pt-[40px] flex flex-col items-center md:items-start gap-12 justify-between">
        <div class="w-full flex flex-col items-center gap-6 md:flex-row flex-wrap justify-between pb-[40px]">
            <?php echo $__env->make('global.footer.logotype', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('global.footer.footer-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('global.footer.footer-contacts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <?php echo $__env->make('global.footer.footer-socials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <?php echo $__env->make('global.footer.cookies-warning', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</footer>
<div class="container w-full mx-auto">
    <?php echo $__env->make('global.footer.copyright', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php
wp_footer();
?>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/footer.blade.php ENDPATH**/ ?>