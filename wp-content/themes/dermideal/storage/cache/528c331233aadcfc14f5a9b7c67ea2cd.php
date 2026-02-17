

<section class="mt-[140px] lgx:mt-[172px] container w-full mx-auto">
    <?php echo $__env->make('global.section-title',['data'=>[
             'section_title'=>'Cases',
             'tw_classes'=>'']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="mt-4 flex justify-between items-center">
        <h2 class="text-3xl text-brand-header lgx:text-5xl font-semibold"><?php echo $data['cases_section_title']; ?></h2>
        <?php echo $__env->make('global.brand-btn',[
             'data'=>[
              'tw_classes'=>'hidden lgx:flex',
              'button_link'=>$data['cases_section_link'],
              'button_title'=>'Explore All Cases'
          ]
      ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <div class="cases w-full grid grid-cols-1 smx:grid-cols-2 mdx:grid-cols-3 gap-6 mt-[40px] md:mt-[60px]">
        <?php if($data['cases']): ?>
            <?php $__currentLoopData = $data['cases']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $id = $service['case'];
                    $thumbnail = get_the_post_thumbnail($id,'full');
                    $title = get_the_title($id);
                    $excerpt = get_the_excerpt($id);
                    $link = get_permalink($id);
                    $categories = get_the_category($id);
                ?>
                <?php echo $__env->make('global.case', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <?php echo $__env->make('global.brand-btn',[
           'data'=>[
            'tw_classes'=>'mt-10 w-full md:max-w-[196px] lgx:hidden',
            'button_link'=>$data['cases_section_link'],
            'button_text'=>'Explore All Cases'
        ]
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</section><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/page/home/cases.blade.php ENDPATH**/ ?>