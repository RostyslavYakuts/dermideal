
<nav class="main-menu main-menu-js hidden h-[84px] fixed px-5 l:px-[57px] z-10 l:border-r l:border-r-white
l:relative l:flex l:items-center top-0 left-0 w-full l:w-auto l:top-inherit l:left:inherit">
	<div class="top-menu-wrapper flex flex-col justify-between l:block relative">
		<?php
			wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class' => 'top-menu relative z-100 l:gap-x-5 flex flex-col items-center justify-start mb-0 l:flex-row gap-y-5 l:gap-y-0',
                'container' => false,
            ]);
		?>
		<div class="pb-[55px] flex l:hidden flex-row justify-center gap-4 text-white">
			<div class="w-full flex justify-between items-center ">
				<a href="tel:<?php echo e($options['admin_phone']); ?>"><?php echo e($options['admin_phone']); ?></a>
				<a href="mailto:<?php echo e($options['admin_email']); ?>"><?php echo e($options['admin_email']); ?></a>
			</div>
		</div>
	</div>
</nav>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/top-menu.blade.php ENDPATH**/ ?>