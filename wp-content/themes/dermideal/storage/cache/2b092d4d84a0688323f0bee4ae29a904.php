
<?php
    /**
     * @var array $data
     */
    $stock = $data['stock'];
    if(!$stock) return;
?>
<div class="w-full bg-white">

    <section class="container mx-auto py-[100px] flex flex-col gap-6 justify-between items-center">
        <h2 class="text-4xl text-brand-gold">Наші акції</h2>
        <div class="mt-5 w-full swiper stock-swiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $stock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide p-4 rounded lgx:p-0 bg-brand-light-orange
                     flex flex-col md:flex-row justify-start items-center gap-6 shadow-lg shadow-brand-light-orange">
                            <img width="400" height="400" alt="<?php echo e($item['image']['alt']); ?>"
                                 loading="lazy"
                                 decoding="async"
                                 src="<?php echo e($item['image']['url']); ?>"
                                 class="w-full max-w-[400px!important] mx-auto h-auto object-contain"
                            >
                        <div class="w-full flex flex-col justify-center gap-6 text-center lgx:pr-4">
                            <h3 class="text-brand-gold text-2xl font-semibold"><?php echo e($item['title']); ?></h3>
                            <span class="font-bold text-brand-green"><?php echo e($item['description']); ?></span>
                            <div class="text-brand-green flex flex-col gap-2 justify-center"><?php echo $item['long_description']; ?></div>
                            <a class="mx-auto w-[150px] bg-brand hover:bg-brand-hover text-white p-3 rounded" target="_blank" href="<?php echo e($item['link']); ?>">
                                Перейти
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="mt-4 w-full flex justify-between items-center">
                    <button aria-label="Prev" class="stock-prev text-brand text-xl cursor-pointer select-none px-3">
                        &#10094;
                    </button>
                    <div class="stock-pagination flex justify-center gap-1 items-center mx-auto"></div>
                    <button aria-label="Next" class="stock-next text-brand text-xl cursor-pointer select-none px-3">
                        &#10095;
                    </button>
            </div>


        </div>
    </section>
</div><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/shop/stock.blade.php ENDPATH**/ ?>