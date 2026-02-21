
<?php
    /**
     * @var array $data
     */
    $tags = $data['tags'];
    if(!$tags) return;
?>
<section class="bg-white w-full">
    <div class="container mx-auto">
        <div class="mt-10 flex flex-wrap flex-row items-center gap-2">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="bg-brand text-white hover:bg-white hover:text-brand border border-brand rounded p-2"
                   href="<?php echo e(get_term_link($tag)); ?>">
                    <?php echo e($tag->name); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/shop/tags.blade.php ENDPATH**/ ?>