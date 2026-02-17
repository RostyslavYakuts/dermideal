
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
              'tw_classes'=>'lgxm:hidden '
          ]
      ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/header/cta.blade.php ENDPATH**/ ?>