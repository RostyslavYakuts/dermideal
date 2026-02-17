
<section class="single-service-wrapper container w-full mx-auto mt-[100px] lgx:mt-[110px] pb-[40px]">
    <div class="md:px-[20px]">
        <strong class="text-3xl block">Pełen zakres usług</strong>
        <div class="mt-[32px] flex flex-col md:flex-row gap-[24px] justify-between">

            <?php if($data['services']): ?>
                <ul class="flex flex-col gap-3">
                <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $id = $service['service'];
                        $title = get_the_title($id);
                        $link = get_permalink($id);
                        $icon = get_field('service_icon',$id) ?? [];
                        $hover_icon = get_field('service_hover_icon',$id) ?? [];
                        $current_url = home_url( $_SERVER['REQUEST_URI'] );
                        $is_current = $link === $current_url;
                        $css_class = $is_current ? 'current-service' : '';
                    ?>
                    <li class="<?php echo e($css_class); ?> min-w-[312px] service-item bg-light-gray hover:bg-brand hover:text-white py-[12px] px-[16px] rounded-2xl">
                        <a class="flex flex-row items-center gap-3 " href="<?php echo e($link); ?>">
                            <img width="42" height="42" class="service-icon" src="<?php echo e($icon['url']); ?>" alt="<?php echo e($icon['alt']); ?>">
                            <img width="42" height="42" class="service-hover-icon" src="<?php echo e($hover_icon['url']); ?>" alt="<?php echo e($hover_icon['alt']); ?>">
                            <?php echo e($title); ?>

                        </a>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

            <?php echo $__env->make('single.service.cta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


        </div>
    </div>

</section><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/single/service/content.blade.php ENDPATH**/ ?>