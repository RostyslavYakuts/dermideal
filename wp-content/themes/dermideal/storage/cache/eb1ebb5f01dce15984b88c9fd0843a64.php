<?php
 $href = home_url();
 if(is_front_page()){
      $href = home_url() . '#hero_section';
 }
?>
<?php if(isset($options['header_logo'])): ?>

	<a class="h-[110px] relative z-10 flex items-center" aria-label="logo" href="<?php echo e($href); ?>">
		<img decoding="async" loading="lazy" width="107" height="200" class="anchor-link-js h-auto w-[100px]" src="<?php echo e($options['header_logo']['url'] ?? ''); ?>" alt="<?php echo e($options['header_logo']['alt'] ?? ''); ?>">
	</a>

<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/global/header/logotype.blade.php ENDPATH**/ ?>