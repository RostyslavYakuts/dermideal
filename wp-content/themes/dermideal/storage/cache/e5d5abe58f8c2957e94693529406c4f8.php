

<section id="testimonials" class="w-full bg-brand py-[60px] l:py-[80px]">
    <div class="container mx-auto">
        <div class="w-full flex flex-col l:flex-row l:justify-between l:items-start">
            <div class="l:min-h-[375px] gap-[40px] flex flex-col justify-between">
                <div class="text-white flex flex-col gap-[20px] l:gap-[40px] w-full l:max-w-[460px]">
                    <h2 class="text-[36px] l:text-[48px]"><?php echo e($data['testimonials_title']); ?></h2>
                    <p><?php echo e($data['testimonials_description']); ?></p>
                </div>
            </div>

            <div class="swiper mt-[40px] l:mt-[0px] overflow-hidden testimonials-container testimonials-container-js">
                <div class="swiper-wrapper relative">
                    <?php if($data['testimonials_slider']): ?>
                        <?php $__currentLoopData = $data['testimonials_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="testimonial-flip-container">
                                    <div class="bg-white">

                                        <div class="py-[19px] px-[24px] h-[397px]  md:h-[320px] relative flex flex-col justify-between">
                                            <div class="flex flex-col gap-[12px]">
                                                <span class="block max-h-[40px] leading-none text-[96px]">“</span>
                                                <p class="text-sm xmm:text-base"><?php echo $testimonial['feedback']; ?></p>
                                            </div>
                                            <div class="flex flex-row justify-end items-center">
                                                <div class="flex flex-row items-center gap-4">
                                                     <img class="w-[100px] h-[100px] object-cover rounded-full" width="100" height="100" src="<?php echo e($testimonial['screenshot']['url']); ?>"
                                                          alt="<?php echo e($testimonial['screenshot']['alt']); ?>">
                                                    <div class="flex flex-col gap-1 ">
                                                        <span class="text-base font-semibold xmm:text-lg"><?php echo e($testimonial['name']); ?></span>
                                                        <span class="text-sm xmm:text-base  text-brand-text"><?php echo e($testimonial['role']); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <div class="testimonials-swiper-pagination flex justify-center items-center gap-2 mt-[60px] relative"></div>
            </div>
        </div>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/testimonials.blade.php ENDPATH**/ ?>