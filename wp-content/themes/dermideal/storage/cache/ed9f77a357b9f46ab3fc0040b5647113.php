
<?php
/**
 * @var string $location
 * @var string $text
*/

?>
<?php if(isset($options['cta'])): ?>
    <?php echo $__env->make('global.brand-btn',[
             'data'=>[
              'location' => $location ?? '',
              'text' => $text ?? '',
              'button_link'=>$options['cta']['url'] ?? '',
              'button_title'=>$options['cta']['text'] ?? '',
              'tw_classes'=>'relative top-menu-cta glow lgxm:hidden bg-gradient-to-b from-[#313131] to-black w-[154px] py-[8px] text-sm'
          ]
      ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/cta.blade.php ENDPATH**/ ?>