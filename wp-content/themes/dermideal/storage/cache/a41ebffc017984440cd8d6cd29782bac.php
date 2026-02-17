
<nav class="main-menu main-menu-js flex gap-8
lgxm:fixed lgxm:hidden lgxm:top-[100px] lgxm:left-0 lgxm:w-full
 lgxm:pl-[20px] lgxm:pr-[20px] lgxm:pb-[30px] lgxm:z-10 lgxm:bg-white">

	<?php
		wp_nav_menu([
			'theme_location' => 'main_menu',
			'menu_class' => 'relative z-100 text-base gap-x-8 flex flex-row items-center justify-start mb-0 lgxm:flex-col lgxm:gap-y-3 text-brand-header',
			'container' => false,
		]);
	?>
	<div class="flex justify-center items-center">
		<?php echo $__env->make('global.brand-btn',[
           'data'=>[
            'button_link'=>$options['cta']['url'],
            'button_title'=>$options['cta']['text'],
            'tw_classes'=>'lgx:hidden min-w[150px] inline-block btn-brand'
        ]
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	</div>

</nav>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/header/top-menu.blade.php ENDPATH**/ ?>