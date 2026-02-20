

<section id="testimonials" class="w-full bg-brand-yellow-green py-[60px] l:py-[80px]">
    <div class="container mx-auto">
        <div class="w-full flex flex-col l:flex-row l:justify-between l:items-start">
            <div class="l:min-h-[375px] gap-[40px] flex flex-col justify-between">
                <div class="text-white flex flex-col gap-[20px] l:gap-[40px] w-full l:max-w-[460px]">
                    <h2 class="text-[36px] l:text-[48px]"><?php echo e($data['testimonials_title']); ?></h2>
                    <p><?php echo e($data['testimonials_description']); ?></p>
                </div>
            </div>
            <div class="relative">
                <div class="swiper mt-[40px] l:mt-[0px] overflow-hidden max-w-full h-[400px] md:h-[320px] md:max-w-[670px] testimonials-container testimonials-container-js">
                    <div class="swiper-wrapper">
                        <?php if($data['testimonials_slider']): ?>
                            <?php $__currentLoopData = $data['testimonials_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="bg-brand-light-orange py-[19px] px-[24px] h-[400px]  md:h-[320px] flex flex-col justify-between">
                                        <div class="flex flex-col gap-[12px] text-brand-gold">
                                            <span class="block max-h-[40px] leading-none text-[96px]">“</span>
                                            <p class="text-sm xmm:text-base"><?php echo $testimonial['feedback']; ?></p>
                                        </div>
                                        <div class="flex flex-row justify-end items-center">
                                            <div class="flex flex-row items-center gap-4">
                                                <img class="w-[100px] h-[100px] object-cover rounded-full"
                                                     width="100"
                                                     height="100"
                                                     loading="lazy"
                                                     decoding="async"
                                                     src="<?php echo e($testimonial['screenshot']['url']); ?>"
                                                     alt="<?php echo e($testimonial['screenshot']['alt']); ?>">
                                                <div class="flex flex-col gap-1 text-brand-gold">
                                                    <span class="text-base font-semibold xmm:text-lg"><?php echo e($testimonial['name']); ?></span>
                                                    <span class="text-sm xmm:text-base"><?php echo e($testimonial['role']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <button aria-label="Prev" class="testimonials-prev absolute hidden md:block -left-5 xl:-left-[50px] top-1/2 -translate-y-1/2 z-20
                text-white text-4xl cursor-pointer select-none px-3">
                    &#10094;
                </button>
                <button aria-label="Next" class="testimonials-next absolute hidden md:block -right-5 xl:-right-[50px] top-1/2 -translate-y-1/2 z-20
                text-white text-4xl cursor-pointer select-none px-3">
                    &#10095;
                </button>
                <div class="testimonials-swiper-pagination flex justify-center items-center gap-2 mt-4"></div>
            </div>

        </div>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/testimonials.blade.php ENDPATH**/ ?>