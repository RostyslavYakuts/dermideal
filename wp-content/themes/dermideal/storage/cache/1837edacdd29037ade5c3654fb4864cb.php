<?php
 $scroll_logo = $options['header_scroll_logo'] ?? [];
 $scroll_logo_src = '';
 if($scroll_logo){
     $scroll_logo_src = $options['header_scroll_logo']['url'] ?? '';
 }
 $href = home_url();
 if(is_front_page()){
      $href = home_url() . '#hero_section';
 }
?>
<?php if(isset($options['header_logo'])): ?>

	<a class="relative z-10 flex items-center" aria-label="mp-logo" href="<?php echo e($href); ?>">
		<img data-scroll-logo="<?php echo e($scroll_logo_src); ?>" decoding="async" loading="lazy" width="149" height="37" class="anchor-link-js h-[45px] min-w-[65px] w-auto" src="<?php echo e($options['header_logo']['url'] ?? ''); ?>" alt="<?php echo e($options['header_logo']['alt'] ?? ''); ?>">
	</a>

<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/logotype.blade.php ENDPATH**/ ?>