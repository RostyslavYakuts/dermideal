
<?php
    /**
     * @var array $data
     */
    $features = $data['top_product_features'];
    $features_arr = explode(',',$features);
?>
<section id="top_product" class="w-full bg-brand-light-purple flex flex-col lgx:flex-row md:items-center">
    <img class="w-full h-auto lgx:max-w-[50%] object-cover"
         width="921" height="712" loading="lazy" decoding="async"
         src="<?php echo e($data['top_product_image']['url']); ?>" alt="<?php echo e($data['top_product_image']['alt']); ?>">
    <div class="w-full p-[25px] lgx:p-[100px] flex flex-col gap-10 text-brand-purple">
        <h2 class="text-4xl"><?php echo e($data['top_product_title']); ?></h2>
        <p class="font-semibold text-lg font-md"><?php echo e($data['top_product_short_description']); ?></p>
        <div class="flex lgx:flex-wrap flex-col lgx:flex-row gap-6 lgx:items-center justify-between">
            <?php if($features_arr): ?>
                <?php $__currentLoopData = $features_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-row items-center justify-start gap-1">
                        <span>&check;</span>
                        <strong class="text-sm"><?php echo e($feature); ?></strong>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <p><?php echo e($data['top_product_description']); ?></p>
        <a href="<?php echo e($data['top_product_link']); ?>" target="_blank"
           class="w-[170px] text-center bg-brand-purple hover:bg-brand-purple-hover text-white p-3 rounded">
            Перейти до товару
        </a>
    </div>
</section>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/top-product.blade.php ENDPATH**/ ?>