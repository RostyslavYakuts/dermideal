
<?php
    /**
     * @var array $data
     */
?>

<div class="healing-bg-layer py-[80px] lgx:py-[96px]">
<section id="healing" class="healing w-full container mx-auto mt-[40px] l:mt-[220px] ">


        <div class="flex flex-col items-center justify-center text-[28px] lgx:text-[48px]">
            <h2 id="healing_h2" class="healing-h2 healing-content uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                <?php echo $data['healing_section_title']; ?>

            </h2>
            <div class="healing-content mt-8 max-w-[720px] l:text-center text-brand-text text-lg">
                <?php echo $data['healing_section_description']; ?>

            </div>
        </div>

        <div class="healing-slides-wrapper l:flex l:gap-8 mt-[50px] l:mt-[96px]">
            <div class="healing-slides flex flex-col gap-3">
                <?php if($data['healing_section_slides']): ?>
                    <?php $__currentLoopData = $data['healing_section_slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $active = '';
                            if($key ===0){
                                $active = 'active';
                            }
                        ?>
                        <div data-index="<?php echo e($key); ?>" class="healing-slide-wrapper healing-slide-wrapper-js flex flex-col l:flex-row gap-3 l:gap-6 <?php echo e($active); ?>">

                            <div data-index="<?php echo e($key); ?>" class="healing-slide healing-slide-js ">
                                <div class="healing-slide-title font-bold uppercase text-lg"><?php echo e($slide['step_title']); ?></div>
                                <div class="healing-slide-excerpt healing-slide-excerpt-js text-lg"><?php echo $slide['step_excerpt']; ?></div>
                            </div>

                            <div class="healing-slide-mobile-viewport mobile-flip-container">
                                <?php if($slide['step_image']): ?>
                                    <div class="mobile-flip-card">
                                        <div class="side front side-front-js relative">
                                            <div class="healing-image-wrapper">
                                                <img data-src="<?php echo e($slide['step_image']['url']); ?>" width="335" height="358" loading="lazy" decoding="async" class="hidden md:block healing-step-image healing-step-image-js w-full rounded-3xl" src="<?php echo e($slide['step_image']['url']); ?>" alt="<?php echo e($slide['step_image']['alt']); ?>">
                                                <img width="335" height="358" loading="lazy" decoding="async" class="md:hidden healing-step-image-mobile healing-step-image-mobile-js w-full rounded-3xl" src="<?php echo e($slide['step_mobile_image']['url']); ?>" alt="<?php echo e($slide['step_mobile_image']['alt']); ?>">
                                            </div>
                                            <button class="mobile-learn-more-btn absolute bottom-1 right-1 z-20 mobile-toggle-btn-js p-2 min-w-[145px] lgx:min-w-[192px] flex gap-1 sm:gap-2 items-center justify-end">Learn More
                                                <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.8475 8.05031C19.3162 7.58156 19.3162 6.82031 18.8475 6.35156L12.8475 0.351562C12.3788 -0.117188 11.6175 -0.117188 11.1488 0.351562C10.68 0.820313 10.68 1.58156 11.1488 2.05031L15.1013 6.00281H1.2C0.53625 6.00281 0 6.53906 0 7.20281C0 7.86656 0.53625 8.40281 1.2 8.40281H15.1013L11.1488 12.3553C10.68 12.8241 10.68 13.5853 11.1488 14.0541C11.6175 14.5228 12.3788 14.5228 12.8475 14.0541L18.8475 8.05406V8.05031Z" fill="black"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="side back">
                                            <div class="healing-description-wrapper py-[45px] px-[27px]">
                                                <p class="max-h-[300px] overflow-y-scroll text-xs xmm:text-sm smx:text-base md:text-lg healing-description-js"><?php echo $slide['step_description']; ?></p>
                                            </div>
                                            <button class="mobile-close-more-btn absolute bottom-1 right-1 z-20 mobile-toggle-btn-js p-2 min-w-[150px] lgx:min-w-[192px] flex gap-2 items-center justify-center">Close
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.05031 0.355312C1.58156 -0.113438 0.820313 -0.113438 0.351562 0.355312C-0.117188 0.824062 -0.117188 1.58531 0.351562 2.05406L5.50406 7.20281L0.355312 12.3553C-0.113438 12.8241 -0.113438 13.5853 0.355312 14.0541C0.824062 14.5228 1.58531 14.5228 2.05406 14.0541L7.20281 8.90156L12.3553 14.0503C12.8241 14.5191 13.5853 14.5191 14.0541 14.0503C14.5228 13.5816 14.5228 12.8203 14.0541 12.3516L8.90156 7.20281L14.0503 2.05031C14.5191 1.58156 14.5191 0.820313 14.0503 0.351562C13.5816 -0.117188 12.8203 -0.117188 12.3516 0.351562L7.20281 5.50406L2.05031 0.355312Z" fill="black"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>

            <div class="healing-slides-desktop-viewport hidden l:block flip-container">

                <div class="flip-card">
                    <div class="side front side-front-js relative">
                        <div class="active-slide-img active-slide-img-js">

                        </div>
                        <button class="absolute l:bottom-[65px] xl:bottom-[30px] 1xl:bottom-[15px] 2xl:bottom-3 right-1 z-20 toggle-btn-js p-2 min-w-[192px] flex gap-2 items-center justify-center">Learn More
                            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8475 8.05031C19.3162 7.58156 19.3162 6.82031 18.8475 6.35156L12.8475 0.351562C12.3788 -0.117188 11.6175 -0.117188 11.1488 0.351562C10.68 0.820313 10.68 1.58156 11.1488 2.05031L15.1013 6.00281H1.2C0.53625 6.00281 0 6.53906 0 7.20281C0 7.86656 0.53625 8.40281 1.2 8.40281H15.1013L11.1488 12.3553C10.68 12.8241 10.68 13.5853 11.1488 14.0541C11.6175 14.5228 12.3788 14.5228 12.8475 14.0541L18.8475 8.05406V8.05031Z" fill="black"/>
                            </svg>
                        </button>
                    </div>
                    <div class="side back">
                        <div class="active-slide-description py-[45px] px-[27px] active-slide-description-js">

                        </div>
                        <button class="absolute l:bottom-[65px] xl:bottom-[30px] 1xl:bottom-[15px] 2xl:bottom-3 right-1 z-20 toggle-btn-js p-2 min-w-[192px] flex gap-2 items-center justify-center">Close
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.05031 0.355312C1.58156 -0.113438 0.820313 -0.113438 0.351562 0.355312C-0.117188 0.824062 -0.117188 1.58531 0.351562 2.05406L5.50406 7.20281L0.355312 12.3553C-0.113438 12.8241 -0.113438 13.5853 0.355312 14.0541C0.824062 14.5228 1.58531 14.5228 2.05406 14.0541L7.20281 8.90156L12.3553 14.0503C12.8241 14.5191 13.5853 14.5191 14.0541 14.0503C14.5228 13.5816 14.5228 12.8203 14.0541 12.3516L8.90156 7.20281L14.0503 2.05031C14.5191 1.58156 14.5191 0.820313 14.0503 0.351562C13.5816 -0.117188 12.8203 -0.117188 12.3516 0.351562L7.20281 5.50406L2.05031 0.355312Z" fill="black"/>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

        </div>



</section>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/healing-section.blade.php ENDPATH**/ ?>