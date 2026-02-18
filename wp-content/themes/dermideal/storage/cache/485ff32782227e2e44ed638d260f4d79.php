

<section id="motivation" class="w-full bg-brand-beige flex flex-col lgx:flex-row lgx:items-center">
    <div class="px-[25px] py-[50px] lgx:px-[100px] lgx:py-0 flex flex-col gap-6 text-brand-yellow-green">
        <h2 class="w-full text-[36px] l:text-[48px]">
            <?php echo $data['motivation_section_title']; ?>

        </h2>
        <p class="font-semibold w-full text-sm l:text-base text-brand-text">
            <?php echo e($data['motivation_section_short_description']); ?>

        </p>
        <p class="w-full text-sm l:text-base text-brand-text">
            <?php echo e($data['motivation_section_description']); ?>

        </p>

        <?php if($data['arguments_list']): ?>
            <?php $__currentLoopData = $data['arguments_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $argument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="flex flex-row gap-2 items-center">
                     <figure class="flex justify-center items-center bg-brand-yellow-green-dark rounded-full min-w-[70px] w-[70px] h-[70px] p-2">
                         <img
                              class="w-[40px] h-[40px] object-cover"
                              width="40" height="40" loading="lazy"
                              decoding="async"
                              src="<?php echo e($argument['image']['url']); ?>"
                              alt="<?php echo e($argument['image']['alt']); ?>">
                     </figure>

                     <div class="flex flex-col gap-2">
                         <span class="text-xl font-semibold"><?php echo e($argument['title']); ?></span>
                         <span class="text"><?php echo e($argument['argument']); ?></span>
                     </div>
                 </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
    <img class="w-full h-auto max-h-[820px] lgx:min-w-[50%] lgx:w-[50%] object-cover" width="920" height="820"
         src="<?php echo e($data['motivation_section_image']['url']); ?>"
         alt="<?php echo e($data['motivation_section_image']['src']); ?>" loading="lazy" decoding="async">
</section>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/motivation.blade.php ENDPATH**/ ?>