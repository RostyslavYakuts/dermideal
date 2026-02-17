<?php
 $href = home_url();
 if(is_front_page()){
      $href = home_url() . '#hero_section';
 }
?>
<?php if(isset($options['header_logo'])): ?>

	<a class="h-[84px] relative z-10 flex items-center" aria-label="logo" href="<?php echo e($href); ?>">
		<img decoding="async" loading="lazy" width="107" height="27" class="anchor-link-js h-[27px] w-[107px]" src="<?php echo e($options['header_logo']['url'] ?? ''); ?>" alt="<?php echo e($options['header_logo']['alt'] ?? ''); ?>">
	</a>

<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/logotype.blade.php ENDPATH**/ ?>