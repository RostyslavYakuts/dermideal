
<?php
    /**
    * @var array $data
    */
    $bg_slider = $data['bg_slider'];
?>
<section id="hero_section"  class="h-calc-100-110 relative mt-[110px] w-full hero-section home-hero-section flex flex-col-reverse mdx:flex-col ">
    <div class="container mx-auto flex flex-col relative z-10">
        <div class="mdx:max-w-[550px] p-4 bg-[#ffffff99] mb-12 mdx:mb-0 mdx:mt-[168px] flex flex-col justify-center gap-12">
            <h1 class="text-brand text-[40px] font-lite l:text-[64px] leading-none">
                <?php echo e($data['h1']); ?>

            </h1>

            <div class="flex flex-col gap-6">
                <p class="max-w-[480px]"><?php echo e($data['description']); ?></p>
                <a href="<?php echo e($data['cta_link']); ?>" class="rounded text-white bg-brand hover:bg-brand-hover w-full xs:w-[370px] h-[48px] flex justify-center items-center">
                        <?php echo e($data['cta_text']); ?>

                </a>
            </div>

        </div>
    </div>
    <div class="bg-slider swiper">
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $bg_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide w-full h-full"
                     style="background-image:url('<?php echo e($slide['image']['url']); ?>')">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/hero-section.blade.php ENDPATH**/ ?>