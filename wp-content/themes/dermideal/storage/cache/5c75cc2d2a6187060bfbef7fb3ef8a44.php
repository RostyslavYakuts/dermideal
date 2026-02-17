
<div class="relative z-50 w-full flex flex-col l:flex-row justify-between l:items-center border-t border-[#EEEEEE] pt-[32px] pb-[80px]">
	<div class="copyright text-sm text-white">
		© <?php echo e(date("Y")); ?> <?php echo e($options['copyright'] ?? ''); ?>

	</div>

	<nav class="footer-menu-wrapper mt-[24px] l:mt-0 flex gap-2">

			<?php wp_nav_menu(
     array(
        'theme_location' => 'footer_menu',
		'container' => false,
		'menu_class' => 'footer-menu flex flex-col l:flex-row flex-wrap text-white gap-[24px] l:gap-9 l:gap-x-9 text-sm',
		'before' => '',
		'after' => ''
		)
	);
			?>
	</nav>


</div>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/copyright.blade.php ENDPATH**/ ?>