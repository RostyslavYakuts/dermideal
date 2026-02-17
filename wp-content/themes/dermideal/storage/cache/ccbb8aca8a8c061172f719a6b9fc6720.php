
<div class="flex flex-col gap-2 lgx:min-w-[375px]">
	<?php echo $__env->make('global.section-title',['data'=>[
                 'section_title'=>'Skontaktuj się z nami',
                 'tw_classes'=>'']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<div class="footer-contacts flex flex-col gap-2">
		<a href="tel:<?php echo e($options['admin_phone']); ?>" class="text-white "><?php echo e($options['admin_phone']); ?></a>
		<a href="mailto:<?php echo e($options['admin_email']); ?>" class="text-white"><?php echo e($options['admin_email']); ?></a>
	</div>

</div>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/footer-contacts.blade.php ENDPATH**/ ?>