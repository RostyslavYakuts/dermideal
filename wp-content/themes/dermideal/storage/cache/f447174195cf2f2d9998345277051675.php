
<div class="w-full flex flex-col-reverse gap-6 smx:flex-row justify-between items-center">
	<div class="copyright text-sm text-light-gray">
		© <?php echo e(date("Y")); ?>, IT Dev Staff. All rights reserved.
	</div>

	<?php
            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'menu_class' => 'flex items-center text-sm text-[#ACACAC]',
                'container' => false,
            ]);
	?>
</div>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/global/footer/copyright.blade.php ENDPATH**/ ?>