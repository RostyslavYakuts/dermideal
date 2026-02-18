
<?php
    /**
     * @var array $data
     */
    $bestsellers = $data['bestsellers'];
    if(!$bestsellers) return;
?>
<section class="w-full container mx-auto py-[100px]">
    <h2 class="text-center text-brand uppercase text-4xl"><?php echo e($data['bestsellers_title']); ?></h2>
    <div class="mt-10 swiper bestsellers-swiper">
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $bestsellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="bg-white shadow rounded p-4 flex flex-row items-center gap-6 ">
                        <img loading="lazy" decoding="async"
                             src="<?php echo e($item['image']['url']); ?>"
                             class="w-full h-auto lgx:w-[710px] lgx:h-[710px] object-cover mb-4"
                             alt="<?php echo e($item['image']['alt']); ?>"
                             width="710"
                             height="710"
                        >

                        <?php
                            $product_id = $item['product'];
                             if (!$product_id) continue;
                             $product = wc_get_product($product_id);
                             if (!$product) continue;
                             $image_id = $product->get_image_id();
                             $image = wp_get_attachment_image_url($image_id, 'medium');
                        ?>
                        <a class="text-brand hover:text-brand-hover flex flex-col gap-3 justify-center items-center" target="_blank" href="<?php echo e(get_permalink($product_id)); ?>">
                            <img width="200" height="200" alt="<?php echo e($product->get_name()); ?>"
                                 loading="lazy"
                                 decoding="async"
                                 src="<?php echo e($image); ?>"
                                 class="w-full h-[260px] object-cover mb-4"
                            >
                            <h3 class="text-center text-lg font-semibold"><?php echo e($product->get_name()); ?></h3>
                            <p class="text-sm"><?php echo $product->get_price_html(); ?></p>
                            <button class="bg-brand hover:bg-brand-hover text-white p-3 rounded ">Перейти на товар</button>
                        </a>



                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="bestsellers-button-prev"></div>
        <div class="bestsellers-button-next"></div>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/bestsellers.blade.php ENDPATH**/ ?>