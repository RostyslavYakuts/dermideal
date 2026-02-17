
<div id="about" class="pt-[110px]"></div>
<section class="about-wrapper container w-full mx-auto overflow-x-hidden">

    <div class="about-info transform -translate-x-20 opacity-0 transition-all duration-700 px-[10] md:px-[20px]">

        <div class="flex flex-col w-full">
            <?php echo $__env->make('global.section-title',['data'=>[
            'section_title'=>'O nas',
            'tw_classes'=>'']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="flex flex-col lgx:flex-row justify-between">
                <h2 class="mt-2 max-w-[500px] text-brand-header text-2xl xs:text-3xl lgx:text-[42px]"><?php echo $data['about_us_section_title']; ?></h2>
                <p class="text-brand-text mt-4 lgx:max-w-[648px]">
                    <?php echo $data['about_us_section_description']; ?>

                </p>
            </div>
        </div>

    </div>

    <?php if($data['about_us_section_gallery']): ?>
        <div class="about-gallery transform translate-x-20 opacity-0 transition-all duration-700 mt-[32px] flex flex-col mdx:flex-row justify-between items-center gap-6 px-[20px]">
            <?php $__currentLoopData = $data['about_us_section_gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <img src="<?php echo e($item['url'] ?? ''); ?>" alt="<?php echo e($item['alt'] ?? ''); ?>"
                         class="w-full rounded-xl" />
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

</section><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/about.blade.php ENDPATH**/ ?>