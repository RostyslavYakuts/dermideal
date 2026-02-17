
<nav class="main-menu main-menu-js flex gap-8
lgxm:fixed lgxm:hidden lgxm:top-0 lgxm:left-0 lgxm:w-full
 lgxm:pl-[20px] lgxm:pr-[20px] lgxm:pb-[30px] lgxm:z-10">
	<div class="top-menu-wrapper flex flex-col justify-center lgx:block relative">
		<?php
			wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class' => 'top-menu relative z-100 text-base gap-x-8 flex flex-row items-center justify-start mb-0 lgxm:flex-col lgxm:gap-y-3 text-white',
                'container' => false,
            ]);
		?>
		<div class="flex justify-center items-center w-full absolute bottom-[80px]">
			<?php echo $__env->make('global.brand-btn',[
               'data'=>[
                'button_link'=>$options['mobile_cta']['url'],
                'button_title'=>$options['mobile_cta']['text'],
                'tw_classes'=>'lgx:hidden anchor-link-js hero-first-cta w-[236px] py-[15.5px] text-lg text-brand-dark-text bg-white'
            ]
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		</div>
	</div>
</nav>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/top-menu.blade.php ENDPATH**/ ?>