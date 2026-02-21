
<?php
    /**
     * @var array $data
     */
    $stock = $data['stock'];
    if(!$stock) return;
?>
<div class="w-full bg-white">
    <section class="container mx-auto py-[100px] flex flex-col gap-6 lgx:flex-row justify-between items-center">
        <div class="w-full lgx:max-w-[400px] flex flex-col gap-6">
            <h2 class="text-4xl text-brand-gold"><?php echo e($data['stock_title']); ?></h2>
            <p class="text-lite-black"><?php echo e($data['stock_description']); ?></p>
        </div>
        <div class="w-full swiper stock-swiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide p-4 rounded md:p-0 bg-brand-light-orange flex flex-col md:flex-row justify-start items-center gap-6 shadow-lg shadow-brand-light-orange">
                        <img width="200" height="400" alt="<?php echo e($item['title']); ?>"
                                 loading="lazy"
                                 decoding="async"
                                 src="<?php echo e($item['image']['url']); ?>"
                                 class="w-full max-w-[400px] mx-auto h-auto object-contain "
                        >
                        <div class="w-full flex flex-col justify-center gap-6 text-center">
                            <h3 class="text-brand-gold text-2xl font-semibold"><?php echo e($item['title']); ?></h3>
                            <p class="text-lite-black"><?php echo e($item['description']); ?></p>
                            <a class="mx-auto w-[150px] bg-brand hover:bg-brand-hover text-white p-3 rounded" target="_blank" href="<?php echo e($item['link']); ?>">
                                Перейти
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="mt-4 w-full flex justify-between items-center">
                <div class="w-full stock-pagination flex justify-center gap-1 items-center mx-auto"></div>
                <div class="flex justify-between items-center ">
                    <button aria-label="Prev" class="stock-prev text-brand text-xl cursor-pointer select-none px-3">
                        &#10094;
                    </button>
                    <button aria-label="Next" class="stock-next text-brand text-xl cursor-pointer select-none px-3">
                        &#10095;
                    </button>
                </div>

            </div>


        </div>
    </section>
</div><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/stock.blade.php ENDPATH**/ ?>