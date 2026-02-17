
<?php
    /**
    * @var array $data
    */
    $slash_icon = ' <svg class="inline" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.012 4.84358L33.0275 4.24226L32.4262 6.25779L6.25779 32.4262L4.24226 33.0275L4.84358 31.012L31.012 4.84358Z" fill="white"/>
                        <path d="M23.5511 5.23412L26.928 4.6857L4.68483 26.9288L5.88746 22.8978L23.5511 5.23412Z" fill="white"/>
                        <path d="M32.0365 13.7185L32.5849 10.3416L10.3418 32.5848L14.3728 31.3822L32.0365 13.7185Z" fill="white"/>
                    </svg>';
    $star_icon = ' <svg class="inline mt-5" width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="12.9233" width="2" height="31" fill="#19C37A"/>
                        <rect x="26.8467" y="6.88281" width="2" height="31" transform="rotate(60 26.8467 6.88281)" fill="#19C37A"/>
                        <rect x="27.8467" y="22.3828" width="2" height="31" transform="rotate(120 27.8467 22.3828)" fill="#19C37A"/>
                    </svg>';

?>
<section id="hero_section"  class="bg-black relative mt-[84px] w-full hero-section home-hero-section flex flex-col ">
    <div class="container mx-auto flex flex-col">
        <div class="mt-[110px] l:mt-[168px] flex flex-col justify-center">
            <h1 class="text-white text-[40px] l:text-[64px]">

                <span class="w-full flex flex-wrap flex-row items-center gap-2">
                    <span><?php echo e($data['h1_0']); ?></span>
                   <?php echo $slash_icon; ?>

                    <span class="text-brand"><?php echo e($data['h1_1']); ?></span>

                </span>

                <span class="block md:text-center w-full">
                    <?php echo e($data['h1_2']); ?>

                    <sup class="">
                       <?php echo $star_icon; ?>

                    </sup>
                </span>
                <span class="pl-[20%] md:pl-0 md:text-right w-full block"><?php echo e($data['h1_3']); ?><span class="block text-right pl-[20%] md:inline md:pl-0"> <?php echo e($data['h1_4']); ?></span></span>
            </h1>
            <div class="flex justify-between items-center mt-[40px] l:mt-[134px]">
                <div class="flex flex-col gap-6">
                    <p class="text-sm text-light-gray max-w-[480px]"><?php echo e($data['description']); ?></p>
                    <a href="<?php echo e($data['cta_link']); ?>" class="rounded-full text-white bg-brand hover:bg-brand-hover w-full l:w-[370px] h-[48px] flex justify-center items-center">
                        <?php echo e($data['cta_text']); ?>

                    </a>
                </div>

            </div>
        </div>
        <div class="services mt-[120px] l:mt-[168px] mb-[33px] l:mb-5">
            <?php if($data['services']): ?>
                <ul class="flex flex-row flex-wrap gap-[6px] l:gap-5 items-center l:justify-between">
                    <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="text-sm min-w-[75px] l:min-w-[178px] bg-[#19C37A1A] border border-bramd rounded-full text-brand text-center p-[13px]">
                            <?php echo e($service['title']); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

</section>


<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/hero-section.blade.php ENDPATH**/ ?>