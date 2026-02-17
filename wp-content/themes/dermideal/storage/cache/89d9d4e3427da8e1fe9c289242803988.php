
<div class="single-service-text-block w-full py-[16px] md:px-[32px]">
    <div>
        <h1 class="text-brand-header text-[32px]"><?php echo $data['title']; ?></h1>
        <div class="text-brand-text mt-3 lgx:text[20px]"><?php echo $data['content']; ?></div>
    </div>
    <div class="mt-[24px]">
        <h2 class="text-brand-header text-[32px]"><?php echo e($data['cta_title']); ?></h2>
        <p class="mt-3"><?php echo e($data['cta_description']); ?></p>
        <?php if($data['cta_list']): ?>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-[28px] mb-[40px]">
                <?php $__currentLoopData = $data['cta_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="font-[500] text-xl flex gap-3 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.6004 12.0004C21.6004 17.3023 17.3023 21.6004 12.0004 21.6004C6.69846 21.6004 2.40039 17.3023 2.40039 12.0004C2.40039 6.69846 6.69846 2.40039 12.0004 2.40039C13.5066 2.40039 14.9318 2.74726 16.2004 3.36547M19.8004 6.00039L11.4004 14.4004L9.00039 12.0004" stroke="#009CFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo e($li['cta_list_item']); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
        <?php echo $__env->make('global.brand-btn',[
            'data'=>[
                'button_link'=>$data['cta_button_url'],
                'button_title'=>'Wezwij Fachowca Teraz',
                'tw_classes'=>'min-w-[317px]'
                ]
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/single/service/cta.blade.php ENDPATH**/ ?>