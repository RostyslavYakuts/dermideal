
<?php
    /**
     * @var array $data
     */
    $testimonials_section_display = $data['testimonials_section_display'] ?? false;
    if(!$testimonials_section_display){
        return;
    }
?>


<section id="testimonials" class="testimonials mt-[96px] l:mt-[0] relative bg-net-js  w-full">
    <div class="testimonials-wrapper hidden l:block w-full h-full absolute">
        <svg id="testimonials-bg-svg"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1920px" height="1195px" viewBox="0 0 1920 1195" version="1.1">
            <defs>
                <linearGradient
                        id="testimonialsGradient"
                        gradientUnits="userSpaceOnUse"
                        x1="0"
                        y1="0"
                        x2="1920"
                        y2="1800"
                >
                    <stop offset="0%" stop-color="#0C0809"/>
                    <stop offset="25%" stop-color="#1f1415"/>
                    <stop offset="50%" stop-color="#1C1414"/>
                    <stop offset="75%" stop-color="#231919"/>
                    <stop offset="100%" stop-color="#393333"/>
                </linearGradient>
            </defs>
            <g id="surface1">
                <rect x="0" y="0" width="1920" height="1195" style="fill:rgb(100%,100%,100%);fill-opacity:1;stroke:none;"/>
                <path style=" stroke:none;fill-rule:nonzero;fill:url(#testimonialsGradient);fill-opacity:1;" d="M 0 1061.316406 C 0 1105.511719 35.816406 1141.339844 80 1141.339844 L 1149.929688 1141.339844 C 1160.671875 1141.339844 1171.300781 1143.503906 1181.1875 1147.699219 L 1276.871094 1188.324219 C 1286.757812 1192.523438 1297.390625 1194.6875 1308.128906 1194.6875 L 1840 1194.6875 C 1884.1875 1194.6875 1920 1158.859375 1920 1114.664062 L 1920 122.386719 C 1920 78.191406 1884.1875 42.367188 1840 42.367188 L 935.464844 42.367188 C 923.535156 42.367188 911.753906 39.695312 900.988281 34.554688 L 844.351562 7.5 C 833.589844 2.355469 821.808594 -0.3125 809.878906 -0.3125 L 80 -0.3125 C 35.816406 -0.3125 0 35.515625 0 79.710938 Z M 0 1061.316406 "/>
            </g>
        </svg>

    </div>
    <div class="testimonials-slider-wrapper">
        <div class="container mx-auto w-full">
            <h2 class="pl-[20px] l:pl-[0] text-white text-[28px] lgx:text-[48px] uppercase max-w-[450px] 3xl:pt-[136px] 2xl:pt-[200px] xl:pt-[215px] l:pt-[235px] 2xl:pb-[10px] 3xl:pb-[68px]">
                <?php echo e($data['testimonials_section_title']); ?>

            </h2>
            <?php if($data['testimonials_slider']): ?>
                <div class="relative mt-[32px] l:mt-0">
                    <div class="swiper testimonials-container testimonials-container-js">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $data['testimonials_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="swiper-slide">
                                    <div class="slide-img">
                                        <img width="200" height="200" src="<?php echo e($testimonial['thumbnail']['url']); ?>" alt="<?php echo e($testimonial['thumbnail']['alt']); ?>">
                                    </div>
                                    <div class="slide-content">
                                        <p class="text-white text-lg l:text-xl"><?php echo e($testimonial['feedback']); ?></p>
                                        <span class="text-xl l:text-lg text-white font-bold"><?php echo e($testimonial['author']); ?></span>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <button aria-label="Prev"  class="swiper-button-next">
                            <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.05031 0.351562C7.58156 -0.117187 6.82031 -0.117187 6.35156 0.351562L0.351562 6.35156C-0.117187 6.82031 -0.117187 7.58156 0.351562 8.05031C0.820312 8.51906 1.58156 8.51906 2.05031 8.05031L6.00281 4.09781V17.9991C6.00281 18.6628 6.53906 19.1991 7.20281 19.1991C7.86656 19.1991 8.40281 18.6628 8.40281 17.9991V4.09781L12.3553 8.05031C12.8241 8.51906 13.5853 8.51906 14.0541 8.05031C14.5228 7.58156 14.5228 6.82031 14.0541 6.35156L8.05406 0.351562H8.05031Z" fill="white"/>
                            </svg>
                        </button>
                        <button aria-label="Next" class="swiper-button-prev">
                            <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.35531 18.8475C6.82406 19.3162 7.58531 19.3162 8.05406 18.8475L14.0541 12.8475C14.5228 12.3788 14.5228 11.6175 14.0541 11.1488C13.5853 10.68 12.8241 10.68 12.3553 11.1488L8.40281 15.1013V1.2C8.40281 0.53625 7.86656 0 7.20281 0C6.53906 0 6.00281 0.53625 6.00281 1.2V15.1013L2.05031 11.1488C1.58156 10.68 0.820312 10.68 0.351562 11.1488C-0.117187 11.6175 -0.117187 12.3788 0.351562 12.8475L6.35156 18.8475H6.35531Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>


</section>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/testimonials-section.blade.php ENDPATH**/ ?>