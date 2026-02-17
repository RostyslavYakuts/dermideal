

<a href="<?php echo e($link); ?>" class="service xl:max-w-[424px] bg-white w-full rounded-[20px] flex flex-col gap-4 justify-between hover:shadow-2xl py-[26px] px-[20px] md:px-[32px]">
    <div class="flex flex-col gap-4">
        <div class="flex flex-row gap-4 items-center">
            <?php echo $thumbnail; ?>

            <h3 class="text-brand-header text-[24px]"><?php echo $title; ?></h3>
        </div>
        <p class="excerpt text-brand-text"><?php echo $excerpt; ?></p>
    </div>

    <?php echo $__env->make('global.learn-more',['data'=>[
          'button_tag'=>'span'
      ]], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</a><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/service.blade.php ENDPATH**/ ?>