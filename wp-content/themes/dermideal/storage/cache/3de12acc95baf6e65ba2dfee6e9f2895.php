
<div id="services" class="pt-[120px]"></div>
<section class="bg-light-gray md:rounded-[30px] services-wrapper container mx-auto w-full">
    <div class="px-[10px] py-[20px] md:p-[40px]">

        <?php echo $__env->make('global.section-title',['data'=>[
                 'section_title'=>'Usługi',
                 'tw_classes'=>'']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="services-info flex flex-col lgx:flex-row justify-between">
                <div class="flex flex-col gap-6">
                    <h2 class="mt-2 max-w-[550px] text-brand-header text-2xl xs:text-3xl lgx:text-[42px]"><?php echo $data['services_section_title']; ?></h2>
                    <?php echo $__env->make('global.brand-btn',[
                         'data'=>[
                             'button_link'=>$data['cta_button_url'],
                             'button_title'=>$data['cta_button_text'],
                             'tw_classes'=>'opacity-0 scale-50 animate-appearFromCenter delay-100'
                         ]
                     ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <p class="text-brand-text mt-8 lgx:mt-4 lgx:max-w-[648px]">
                    <?php echo $data['services_section_description']; ?>

                </p>
            </div>
        <div class="services w-full hidden md:grid md:grid-cols-2 lgx:grid-cols-3 gap-6 mt-[40px] md:mt-[60px]">
            <?php if($data['services']): ?>
                <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                       $service_id = $service['service'];
                        $thumbnail = get_the_post_thumbnail($service_id,'medium');
                        $title = get_the_title($service_id);
                        $excerpt = get_the_excerpt($service_id);
                        $link = get_permalink($service_id);
                    ?>
                   <?php echo $__env->make('global.service', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="relative">
            <div class="swiper services services-mobile swiper-container md:hidden gap-6 mt-[40px] md:mt-[60px]">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <?php
                                $service_id = $service['service'];
                                $thumbnail = get_the_post_thumbnail($service_id,'medium');
                                $title = get_the_title($service_id);
                                $excerpt = get_the_excerpt($service_id);
                                $link = get_permalink($service_id);
                            ?>
                            <?php echo $__env->make('global.service', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/services.blade.php ENDPATH**/ ?>