
<div class="flex flex-col gap-[40px] l:gap-0 l:flex-row justify-between items-start l:items-end">
		<div class="flex flex-col text-white font-bold text-[24px]">
			<a href="tel:<?php echo e($options['admin_phone']); ?>"><?php echo e($options['admin_phone']); ?></a>
			<a href="mailto:<?php echo e($options['admin_email']); ?>"><?php echo e($options['admin_email']); ?></a>
		</div>

		<div class="footer-socials flex flex-row items-center gap-[26px]">
			<?php if($options['footer_socials']): ?>
				<?php $__currentLoopData = $options['footer_socials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a class=" w-[40px] h-[40px] l:w-auto l:h-auto l:py-[9px] l:px-[16px] text-brand bg-[#19C37A1A] rounded-full text-sm flex justify-center items-center gap-2" aria-label="<?php echo e($social['title']); ?>" rel="noopener noreferrer" target="_blank" href="<?php echo e($social['link']); ?>">
						<img width="16" height="16" class="w-[16px] h-auto object-cover" src="<?php echo e($social['icon']['url']); ?>" alt="<?php echo e($social['title']); ?>">
						<span class="hidden l:inline"><?php echo e($social['title']); ?></span>
					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>

		</div>

</div>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/footer-contacts.blade.php ENDPATH**/ ?>