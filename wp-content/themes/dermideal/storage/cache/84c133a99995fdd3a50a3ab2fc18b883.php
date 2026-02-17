
<div class="w-full l:w-auto flex flex-col l:flex-row gap-[59px] l:pr-[59px]">
	<nav class="footer-second-menu-wrapper flex flex-col gap-2">
		<span class="text-[#F9F9FB] font-bold text-lg">Discover <span class="uppercase font-bold  md:capitalize">ids</span> <span class="font-bold hidden md:inline">Dimension</span></span>
		<?php wp_nav_menu(
     array(
        'theme_location' => 'footer_second_menu',
		'container' => false,
		'menu_class' => 'footer-second-menu flex flex-col text-lg text-[#EFF1F5] gap-2 text-sm',
		'before' => '',
		'after' => ''
		)
	);
		?>
	</nav>
	<nav class="footer-second-menu-wrapper flex flex-col gap-2">
		<span class="text-[#F9F9FB] font-bold text-lg">Here to Help</span>
		<?php wp_nav_menu(
     array(
        'theme_location' => 'footer_third_menu',
		'container' => false,
		'menu_class' => 'footer-second-menu flex flex-col text-lg text-[#EFF1F5] gap-2 text-sm',
		'before' => '',
		'after' => ''
		)
	);
		?>
	</nav>
</div>

<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/footer-menu.blade.php ENDPATH**/ ?>