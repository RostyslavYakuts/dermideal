
<div class="bg-white px-5 w-full py-[100px] flex flex-col items-center justify-center gap-6 text-center text-brand ">
    <?php if($data['brands']): ?>
        <div class="swiper brands-swiper w-full">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $data['brands']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide ">
                        <img
                                loading="lazy"
                                decoding="async"
                                src="<?php echo e($brand['image']['url']); ?>"
                                alt="<?php echo e($brand['image']['alt']); ?>"
                                width="250"
                                height="100"
                                class="w-[250px] h-[100px] object-contain"
                        >
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/brands.blade.php ENDPATH**/ ?>