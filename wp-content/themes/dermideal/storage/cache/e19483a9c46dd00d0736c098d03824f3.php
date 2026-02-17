
<?php if($options): ?>
	<div class="max-w-[200px] flex flex-col gap-[32px]">
		<?php if(is_front_page()): ?>
			<div class="flex items-center">
				<img decoding="async" loading="lazy" width="184" height="46" src="<?php echo e($options['logo']['url'] ?? ''); ?>" alt="<?php echo e($options['logo']['alt'] ?? ''); ?>">
			</div>
		<?php else: ?>
			<a class="flex items-center" aria-label="Oil Painting" href="<?php echo e(get_option('home')); ?>">
				<img decoding="async" loading="lazy" width="184" height="46" src="<?php echo e($options['logo']['url'] ?? ''); ?>" alt="<?php echo e($options['logo']['alt'] ?? ''); ?>">
			</a>
		<?php endif; ?>

		<?php echo $__env->make('global.footer.footer-socials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	</div>


<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/logotype.blade.php ENDPATH**/ ?>