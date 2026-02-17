
<nav class="main-menu main-menu-js hidden h-[110px] fixed px-5 l:px-[57px] z-10
l:relative l:flex l:items-center top-0 left-0 w-full l:w-auto l:top-inherit l:left:inherit">
	<div class="top-menu-wrapper flex flex-col justify-between l:block relative">
		<?php
			wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class' => 'text-lg top-menu text-brand relative z-10 l:gap-x-5 flex flex-col items-center justify-center mb-0 l:flex-row gap-y-5 l:gap-y-0',
                'container' => false,
            ]);
		?>
	</div>
</nav>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/global/header/top-menu.blade.php ENDPATH**/ ?>