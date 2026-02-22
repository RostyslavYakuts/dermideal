
<div class="mt-12 w-full py-[50px] px-[20px] bg-slate-200">
    <?php if($data['similar_categories']): ?>
        <div class="container mx-auto flex flex-row flex-wrap gap-3">
        <?php $__currentLoopData = $data['similar_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $link = get_term_link($category);
            ?>
            <a href="<?php echo e($link); ?>" target="_blank"
               class="p-3 bg-brand text-white border border-brand rounded hover:bg-white hover:text-brand">
                <?php echo e($category->name); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/taxonomy/product-category/similar-categories.blade.php ENDPATH**/ ?>