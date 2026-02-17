

    <section id="vision" class="vision bg-light-gray min-h-[100vh] l:pb-[64px] h-auto w-full relative z-10 ">
        <div class="vision-bg">

        <div class="relative overflow-x-hidden vision-container container mx-auto w-full z-10">
            <div class="min-h-[86px] lgx:min-h-[134px] text-[28px] lgx:text-[60px]">
                <h2 id="vision_h2" class="vision-h2 vision-content uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                    <?php echo $data['vision_section_title']; ?>

                </h2>
            </div>
            <div class="vision-content flex flex-col lgx:flex-row lgx:justify-between gap-6 mt-[32px]">
                <div class="w-full text-lg flex flex-col gap-[12px]"><?php echo $data['vision_section_first_paragraph']; ?></div>
                <div class="w-full text-lg flex flex-col gap-[12px]"><?php echo $data['vision_section_second_paragraph']; ?></div>
            </div>
            <div class="vision-first-section transform translate-x-20 opacity-0 transition-all duration-700 mt-[32px] lgx:mt-[96px] flex flex-col lgx:flex-row lgx:justify-between items-center gap-12">
                <?php
                    $vision_first_block_image = '';
                    $vision_first_block_alt = '';
                    if($data['vision_first_block_image']){
                         $vision_first_block_image = $data['vision_first_block_image']['url'];
                         $vision_first_block_alt = $data['vision_first_block_image']['alt'];
                    }
                ?>
                <img width="580" height="367" class="vision-first-block-img" loading="lazy" decoding="async" src="<?php echo e($vision_first_block_image); ?>" alt="<?php echo e($vision_first_block_alt); ?>">
                <div class="vision-first-block-info text-[28px] lgx:text-[48px] lgx:max-w-[547px]">
                    <h3 class="uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                        <?php echo $data['vision_first_block_title']; ?>

                    </h3>
                    <div class="flex flex-col gap-3 mt-[32px] text-lg text-brand-text"><?php echo $data['vision_first_block_description']; ?></div>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-hidden mt-[32px] lgx:mt-[96px] z-10">
            <div class="half-left-container w-full overflow-x-hidden">
                <div class="vision-second-section flex flex-col-reverse lgx:flex-row lgx:justify-between items-end lgx:items-center gap-12 lgx:gap-[75px]">
                    <?php
                        $vision_second_block_image = '';
                        $vision_second_block_alt = '';
                        if($data['vision_second_block_image']){
                             $vision_second_block_image = $data['vision_second_block_image']['url'];
                             $vision_second_block_alt = $data['vision_second_block_image']['alt'];
                        }
                    ?>

                    <div class="vision-first-block-info transform -translate-x-20 opacity-0 transition-all duration-700 text-[28px] lgx:text-[48px] lgx:max-w-[50%]">
                        <h3 class="uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                            <?php echo $data['vision_second_block_title']; ?>

                        </h3>
                        <p class="mt-[32px] text-lg text-brand-text"><?php echo $data['vision_second_block_description']; ?></p>
                    </div>
                    <div class="pl-[20px] vision-img-block-info lgx:w-auto">
                        <img width="893" height="487" class="object-contain translate-x-[100px] transition-all duration-300 opacity-0 vision-second-block-img" loading="lazy" decoding="async" src="<?php echo e($vision_second_block_image); ?>" alt="<?php echo e($vision_second_block_alt); ?>">
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/vision-section.blade.php ENDPATH**/ ?>