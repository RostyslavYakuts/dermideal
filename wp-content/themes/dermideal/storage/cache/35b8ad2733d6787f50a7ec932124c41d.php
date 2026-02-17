<?php $__env->startSection('content'); ?>

	<div class="mx-auto container flex flex-col md:flex-row flex-wrap gap-8 mt-[136px]">

		<div class="flex flex-col gap-6">
			<h1 class="uppercase text-[48px] font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]"><?php echo e($title); ?></h1>
			<?php echo $thumbnail; ?>

		</div>

		<div class="flex flex-col prose prose-base w-full max-w-[100%]">
			<?php echo $content; ?>

		</div>


	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/default/page.blade.php ENDPATH**/ ?>