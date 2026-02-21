
<section class="bg-white w-full ">
    <div id="new_products" class="container mx-auto py-[60px] border-t border-brand">
        <h2 class="text-brand text-4xl">Новинки</h2>
        <?php if($data['new_products']): ?>
        <div class="relative">
            <div class="mt-10 swiper new-products-slider">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $data['new_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $product = wc_get_product($product_id);
                            if (!$product) continue;
                            $image_id = $product->get_image_id();
                            $image = wp_get_attachment_image_url($image_id, 'medium');
                        ?>
                        <a class="swiper-slide p-4 border border-brand rounded text-brand hover:text-brand-hover flex-col gap-3 justify-between items-center" target="_blank" href="<?php echo e(get_permalink($product_id)); ?>">
                            <img width="200" height="200" alt="<?php echo e($product->get_name()); ?>"
                                 loading="lazy"
                                 decoding="async"
                                 src="<?php echo e($image); ?>"
                                 class="w-[200px] max-w-[200px] h-[200px] max-h-[200px] object-contain mdx:object-cover mb-4"
                            >
                            <h3 title="<?php echo e($product->get_name()); ?>" class="text-center text-lg font-semibold line-clamp-4 min-h-[86px]"><?php echo e($product->get_name()); ?></h3>
                            <?php
                                $rating = 20 * (int)$product->get_average_rating();
                            ?>
                            <?php echo $__env->make('global.star-rating',['rating'=>$rating], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <span class="text-sm"><?php echo $product->get_price_html(); ?></span>
                            <button aria-label="Visit" class="bg-brand hover:bg-brand-hover text-white p-3 rounded ">
                                Переглянути
                            </button>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
            <div class="mt-4 w-full flex justify-between items-center shadow p-4">
                <button aria-label="Prev" class="new-products-prev text-brand text-3xl cursor-pointer select-none px-3">
                    &#10094;
                </button>
                <div class="new-products-pagination flex justify-center gap-1 items-center mx-auto"></div>
                <button aria-label="Next" class="new-products-next text-brand text-3xl cursor-pointer select-none px-3">
                    &#10095;
                </button>
            </div>


        </div>

        <?php endif; ?>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/new-products.blade.php ENDPATH**/ ?>