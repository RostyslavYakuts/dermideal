<?php $__env->startSection('content'); ?>

	<div class="mx-auto container flex flex-col md:flex-row flex-wrap gap-8 mt-[110px]">
		<?php echo $__env->make('global.breadcrumbs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	</div>
	<div class="mx-auto container flex flex-col md:flex-row flex-wrap gap-8 mt-10">

		<div class="flex flex-col gap-6">
			<h1 class="text-4xl"><?php echo e($title); ?></h1>
			<?php echo $thumbnail; ?>

		</div>

		<div class="flex flex-col gap-6 prose prose-base">
			<?php echo $content; ?>

		</div>


	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/page/default/page.blade.php ENDPATH**/ ?>