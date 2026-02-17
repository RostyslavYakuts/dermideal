
<nav class="footer-menu-wrapper">
	<span class="text-brand-header font-semibold block pt-4 lgx:pt-0 pb-3">Quick Links</span>
	<?php wp_nav_menu(
			array(
                'theme_location' => 'footer_secondary_menu',
				'container' => false,
				'menu_class' => 'footer-secondary-menu flex flex-row flex-wrap text-brand-text  gap-x-9 text-sm',
				'before' => '',
				'after' => ''
			)
	);
	?>
</nav>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/footer-secondary-menu.blade.php ENDPATH**/ ?>