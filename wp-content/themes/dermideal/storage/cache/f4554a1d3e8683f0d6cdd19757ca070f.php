
<div class="w-full bg-brand">
    <section id="advantages" class="container mx-auto pt-[100px] pb-[30px]">
        <div class="flex flex-col md:flex-row justify-between items-start">
            <h2 class="text-[38px] l:text-[48px] mt-3 l:max-w-[50%] text-white">
                <?php echo $data['advantages_section_title']; ?>

            </h2>
            <div class="mt-3 w-full flex gap-2  justify-end">
                <p class="text-white l:max-w-[500px]"><?php echo e($data['advantages_section_description']); ?></p>
            </div>
        </div>

        <hr class="w-full bg-brand-light my-[50px] h-[2px]">

        <div class="mt-[20px] l:mt-[67px] gap-6 grid grid-cols-1 mdx:flex mdx:flex-row mdx:justify-between mdx:items-center">
            <?php if($data['advantages_section_features']): ?>
                <?php $__currentLoopData = $data['advantages_section_features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-row gap-3 mdx:justify-center md:items-center">
                        <figure class="bg-white rounded-full p-3 min-w-[70px] w-[70px] h-[70px] flex justify-center items-center">
                            <img class="w-[40px] h-[40px]"
                                 width="40"
                                 height="40"
                                 src="<?php echo e($item['icon']['url']); ?>"
                                 alt="<?php echo e($item['icon']['alt']); ?>"
                                 title="<?php echo e($item['title']); ?>"
                                 loading="lazy"
                                 decoding="async"
                            >
                        </figure>

                        <div class="flex flex-col gap-2 text-white">
                          <span class="font-semibold uppercase flex items-center gap-2 leading-none">
                            <?php echo e($item['title']); ?>

                          </span>
                            <span class="text-sm"><?php echo e($item['description']); ?></span>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <?php if($data['advantages_section_slider']): ?>
        <div class="relative">
            <div class="mt-[50px] swiper advantages-swiper">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $data['advantages_section_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <img
                                    loading="lazy"
                                    decoding="async"
                                    width="360"
                                    height="348"
                                    class="mx-auto w-[360px] h-[348px] object-cover"
                                    src="<?php echo e($item['image']['url']); ?>"
                                    alt="<?php echo e($item['image']['alt']); ?>"
                                    title="<?php echo e($item['title']); ?>">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <button aria-label="Prev" class="adv-prev absolute left-0 xl:-left-[50px] top-1/2 -translate-y-1/2 z-20
                text-brand-light text-4xl cursor-pointer select-none px-3">
                &#10094;
            </button>
            <button aria-label="Next" class="adv-next absolute right-0 xl:-right-[50px] top-1/2 -translate-y-1/2 z-20
                text-brand-light text-4xl cursor-pointer select-none px-3">
                &#10095;
            </button>
        </div>


        <div class="adv-pagination mt-4 flex justify-center gap-1 items-center mx-auto"></div>
        <?php endif; ?>

    </section>
</div>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/advantages.blade.php ENDPATH**/ ?>