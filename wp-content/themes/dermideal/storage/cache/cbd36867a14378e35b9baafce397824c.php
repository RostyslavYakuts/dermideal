<?php
	/**
	 * @var array $data
	 */
    $home_url = get_home_url();
 	$bg = $data['404_image'] ?? [];
    $text = $data['404_text'] ?? '';
    $style = '';
    if(isset($bg['url'])){
        $style = 'style="background-image:url('. $bg['url'] .'); background-repeat: no-repeat; background-size: cover;" ';
    }
?>


<?php $__env->startSection('content'); ?>
		<div <?php echo $style; ?> class="w-full h-[100vh] flex justify-center">

				<div class="max-w-[537px] flex flex-col justify-between items-center gap-[32px] pb-10">
					<div>
						<h1 class="mt-10 text-center  text-3xl lgx:text-[48px] text-white uppercase">Page not found</h1>
						<p class="max-w-[440px] text-xl text-center text-white mt-8"><?php echo $text; ?></p>
					</div>

					<?php echo $__env->make('global.brand-btn',[
                   'data'=>[
                       'button_link'=>$home_url,
                       'button_title'=>'Back to home',
                       'tw_classes'=>'hero-first-cta opacity-0 scale-50 animate-appearFromCenter delay-100 w-[236px] py-[15.5px] text-lg text-brand-dark-text bg-white'
                   ]
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/404.blade.php ENDPATH**/ ?>