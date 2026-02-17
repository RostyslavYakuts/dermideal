
<?php if(isset($options['header_logo'])): ?>
	<?php if(is_front_page()): ?>
		<div class="flex items-center">
			<img decoding="async" loading="lazy" width="149" height="37" class="w-[149px]" src="<?php echo e($options['header_logo']['url'] ?? ''); ?>" alt="<?php echo e($options['header_logo']['alt'] ?? ''); ?>">
		</div>
	<?php else: ?>
		<a class="flex items-center" aria-label="mp-logo" href="<?php echo e(get_option("home")); ?>">
			<img decoding="async" loading="lazy" width="149" height="37" class="w-[149px]" src="<?php echo e($options['header_logo']['url'] ?? ''); ?>" alt="<?php echo e($options['header_logo']['alt'] ?? ''); ?>">
		</a>
	<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/header/logotype.blade.php ENDPATH**/ ?>