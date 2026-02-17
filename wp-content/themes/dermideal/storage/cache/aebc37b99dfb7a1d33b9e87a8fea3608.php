

<header class="total-header bg-white h-[100px] lgx:h-[110px] fixed top-0 left-0 w-full">
	<div class="container w-full mx-auto">
		<div class="h-[100px] lgx:h-[110px] w-full flex items-center justify-between px-[10px] md:px-[20px]">
			<div class="w-full flex items-center justify-between gap-x-6">
				<?php echo $__env->make('global.header.logotype',['options'=>$options], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				<?php echo $__env->make('global.header.top-menu',['options'=>$options], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				<?php echo $__env->make('global.header.cta',['options'=>$options,'location'=>'top_header','text'=>'507 015 027'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			</div>

			<div class="hidden lgxm:flex hamburger relative hamburger-js cursor-pointer w-[40px] h-[40px]">
				<span class="hamburger-line hamburger-top"></span>
				<span class="hamburger-line hamburger-middle"></span>
				<span class="hamburger-line hamburger-bottom"></span>
			</div>

		</div>
	</div>
</header>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/header/total-header.blade.php ENDPATH**/ ?>