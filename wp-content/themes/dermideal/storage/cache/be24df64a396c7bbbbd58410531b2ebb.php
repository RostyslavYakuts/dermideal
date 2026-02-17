<?php
	/**
	 * @var array $data
	 */
    $home_url = get_home_url();
 	$img = $data['404_image'] ?? '';
    $text = $data['404_text'] ?? '';

?>


<?php $__env->startSection('content'); ?>
		<div class="w-full h-[100vh] flex justify-center items-center">
			<div class="relative flex flex-col items-center justify-center gap-[32px] w-[305px] h-[140px] xm:h-[160px] lg:w-[537px] lg:h-[232px]">
				<img src="<?php echo e($img['url']); ?>" alt="404" class="w-full max-w-[610px] h-auto object-contain">
				<div class="max-w-[537px] flex flex-col items-center gap-[32px]">
					<h1 class="mt-10 text-3xl lgx:text-[42px] text-brand-header">Strona nie znaleziona</h1>
					<p><?php echo $text; ?></p>
					<a class="flex flex-row justify-center items-center no-underline py-[14px] px-[40px] text-center font-semibold
    cursor-pointer rounded-full max-w-[244px] bg-brand text-white hover:bg-dark-blue" href="<?php echo e($home_url); ?>">
						Powrót do domu
					</a>
				</div>

			</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/404.blade.php ENDPATH**/ ?>