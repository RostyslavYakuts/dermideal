
<?php
    /**
     * @var array $data
     */
    $categories = $data['categories'];
    if(!$categories) return;
?>
<section class="bg-brand-beige w-full py-[100px]">
    <div class="container mx-auto">
        <h2 class="text-4xl text-brand text-center uppercase">Наша продукція</h2>
        <div class="categories mt-10 flex flex-col gap-10">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col gap-6">
                    <a href="<?php echo e(get_term_link($group['parent'])); ?>"
                       class="text-2xl text-brand"><?php echo e($group['parent']->name); ?>

                    </a>

                    <ul class="grid gap-6
                               grid-cols-2
                               sm:grid-cols-3
                               md:grid-cols-4
                               lg:grid-cols-5">
                        <?php $__currentLoopData = $group['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                                $thumb_id = get_term_meta($child->term_id, 'thumbnail_id', true);
                                $image = $thumb_id
                                    ? wp_get_attachment_image_url($thumb_id, 'medium')
                                    : null;
                            ?>
                            <li class="group text-brand hover:text-brand-gold">
                                <a href="<?php echo e(get_term_link($child)); ?>" class="block relative">

                                    <?php if($image): ?>
                                        <img
                                                width="180"
                                                height="180"
                                                loading="lazy"
                                                decoding="async"
                                                src="<?php echo e($image); ?>"
                                                alt="<?php echo e($child->name); ?>"
                                                class="w-full aspect-square object-cover"
                                        >
                                    <?php endif; ?>

                                    <span class="absolute top-0 left-0 w-full text-center bg-half-white p-2 transition">
                                        <?php echo e($child->name); ?>

                                    </span>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/categories.blade.php ENDPATH**/ ?>