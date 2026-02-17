

<header class="total-header total-header-js h-[80px] fixed top-0 right-0 w-full py-[7px] px-[10px]">
	<div class="total-header-container w-full">
		<div class="inner-header bg-blur h-[65px] w-full flex items-center justify-between border-2 border-[#DE3F0126] rounded-[65px] p-[10px]">
			<div class="header-desktop-data w-full flex items-center justify-between gap-x-6">
				<?php echo $__env->make('global.header.logotype',['options'=>$options], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				<?php echo $__env->make('global.header.top-menu',['options'=>$options], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				<?php echo $__env->make('global.header.cta',['options'=>$options,'location'=>'top_header'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			</div>

			<div class="hidden lgxm:flex hamburger relative hamburger-js cursor-pointer w-[40px] h-[40px]">
				<span class="hamburger-line hamburger-top"></span>
				<span class="hamburger-line hamburger-middle"></span>
				<span class="hamburger-line hamburger-bottom"></span>
			</div>

		</div>
	</div>
</header>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/total-header.blade.php ENDPATH**/ ?>