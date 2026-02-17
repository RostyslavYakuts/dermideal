
<?php
    /**
    * @var array $data
    */
?>
<section id="hero_section"  class="h-calc-100-110 bg-brand-light relative mt-[110px] w-full hero-section home-hero-section flex flex-col ">
    <div class="container mx-auto flex flex-col relative z-10">
        <div class="mt-[110px] l:mt-[168px] flex flex-col justify-center gap-12">
            <h1 class="text-brand text-[40px] l:text-[64px] max-w-[550px] leading-none">
                <?php echo e($data['h1']); ?>

            </h1>

            <div class="flex flex-col gap-6">
                <p class="text-sm text-brand-green max-w-[480px]"><?php echo e($data['description']); ?></p>
                <a href="<?php echo e($data['cta_link']); ?>" class="rounded text-white bg-brand hover:bg-brand-hover w-full xs:w-[370px] h-[48px] flex justify-center items-center">
                        <?php echo e($data['cta_text']); ?>

                </a>
            </div>

        </div>
    </div>
    <?php echo $data['background_image']; ?>

</section>


<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/hero-section.blade.php ENDPATH**/ ?>