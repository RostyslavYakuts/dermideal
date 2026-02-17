
<?php
    /**
     * @var array $data
     */
?>

<div class="features-bg-layer">
    <section id="features" class="features w-full container mx-auto pt-[40px] 3xl:py-[96px] ">


        <div class="features-content flex flex-col l:flex-row items-center justify-between text-[28px] lgx:text-[48px]">
            <div class="l:max-w-[655px] w-full gap-12">
                <h2 class="uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                    <?php echo $data['features_section_title']; ?>

                </h2>
            </div>

            <div class="mt-[73px] l:mt-8 l:max-w-[522px] text-brand-text text-lg">
                <?php if($data['healing_section_description_slider']): ?>
                    <div class="overflow-hidden h-[270px] xm:h-[255px] xs:h-[225px] smx:h-[175px] description-slider description-slider-js swiper">
                        <div class="swiper-wrapper">
                        <?php $__currentLoopData = $data['healing_section_description_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide flex flex-col gap-3 pr-[24px]">
                               <span class="text-brand-text font-bold text-[20px]">
                                   <?php echo e($slide['slide_title']); ?>

                               </span>
                                <p class="text-lg text-brand-text"><?php echo e($slide['slide_description']); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="description-slider-pagination swiper-pagination"></div>
                    </div>

                <?php endif; ?>
            </div>
        </div>

        <div class="features-slides-wrapper flex flex-col l:flex-row l:justify-between items-center gap-8 ">

            <div class="feature-slides-desktop-viewport">

                <div class="mt-[80] lgx:mt-[96px]">
                    <div class="relative">
                        <div class="active-feature-slide-img active-feature-slide-img-js">

                        </div>
                        <p class="max-w-full absolute bottom-[24px] left-[24px] uppercase font-medium text-[32px] text-[#222222] active-feature-excerpt active-feature-excerpt-js"></p>
                    </div>

                </div>

            </div>
            <div class="features-slides flex flex-col mt-[40px] lgx:mt-[96px]">
                <?php if($data['features_section_slides']): ?>
                    <?php $__currentLoopData = $data['features_section_slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $active = '';
                            if($key ===0){
                                $active = 'active';
                            }
                        ?>
                        <div data-index="<?php echo e($key); ?>" class="feature-slide-wrapper feature-slide-wrapper-js flex flex-col l:gap-6 <?php echo e($active); ?>">
                            <div data-index="<?php echo e($key); ?>" class="feature-slide lgxm:rounded-tl-[29px] lgxm:rounded-tr-[29px] w-full l:min-w-[420px] l:max-w-[550px] feature-slide-js">
                                <div class="feature-slide-title flex gap-3 lgx:gap-5 text-brand-text text-[18px] xm:text-[20px] lgx:text-[24px] py-4 px-5">
                                    <span><?php echo e($key < 10 ? '0'.$key+1 : $key+1); ?></span>
                                    <span><?php echo e($slide['slide_title']); ?></span>
                                </div>
                            </div>
                            <div class="feature-slide-mobile-viewport">
                                <?php if($slide['slide_image']): ?>
                                <div class="relative feature-image-wrapper rounded-[29px] lgxm:rounded-tl-[0px] lgxm:rounded-tr-[0px] lgxm:rounded-bl-[29px] lgxm:rounded-br-[29px]">
                                    <img width="400" height="600" loading="eager" decoding="async"
                                         class="feature-slide-image feature-slide-image-js w-full h-auto rounded-[29px] lgxm:rounded-tl-[0px] lgxm:rounded-tr-[0px] lgxm:rounded-bl-[29px] lgxm:rounded-br-[29px]"
                                         src="<?php echo e($slide['slide_image']['url']); ?>"
                                         alt="<?php echo e($slide['slide_image']['alt']); ?>">
                                    <p class="feature-excerpt feature-excerpt-js absolute bottom-[24px] left-[24px] uppercase font-medium text-[#222222]">
                                        <?php echo $slide['slide_excerpt']; ?>

                                    </p>
                                </div>

                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>

        </div>
    </section>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/features-section.blade.php ENDPATH**/ ?>