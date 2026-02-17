
<?php if($options): ?>
	<?php if(is_front_page()): ?>
		<div class="flex items-center">
			<img decoding="async" loading="lazy" width="184" height="46" src="<?php echo e($options['logo']['url'] ?? ''); ?>" alt="<?php echo e($options['logo']['alt'] ?? ''); ?>">
		</div>
	<?php else: ?>
		<a class="flex items-center" aria-label="Oil Painting" href="<?php echo e(get_option('home')); ?>">
			<img decoding="async" loading="lazy" width="184" height="46" src="<?php echo e($options['logo']['url'] ?? ''); ?>" alt="<?php echo e($options['logo']['alt'] ?? ''); ?>">
		</a>
	<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/logotype.blade.php ENDPATH**/ ?>