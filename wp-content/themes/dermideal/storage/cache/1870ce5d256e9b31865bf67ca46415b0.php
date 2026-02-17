
<div class="footer-banner -mt-[300px] lgx:-mt-[253px] mb-[70px] w-full rounded-[40px] px-[5px] flex justify-center items-center h-[412px] lgx:py-[63px]"
     style="background-image: url('<?php echo e($options['banner']['background']['url'] ?? ''); ?>'); background-repeat: no-repeat; background-size: cover;">
    <div class="p-4 banner-info max-w-[764px] flex flex-col justify-center items-center">
        <h2 class="text-white text-center text-2xl lgx:text-5xl font-semibold mb-4"><?php echo e($options['banner']['title'] ?? ''); ?></h2>
        <p class="text-white opacity-80 lgx:text-xl text-center"><?php echo e($options['banner']['description'] ?? ''); ?></p>
        <?php if($options['banner']['cta']): ?>
            <a href="<?php echo e($options['banner']['cta']['url'] ?? ''); ?>" class="font-semibold mt-[40px] btn no-underline block py-2 px-6 text-center cursor-pointer transition bg-light-blue text-brand-brand rounded-full active:bg-blue-100 hover:bg-blue-200">
                <?php echo e($options['banner']['cta']['text'] ?? ''); ?>

            </a>
        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/banner.blade.php ENDPATH**/ ?>