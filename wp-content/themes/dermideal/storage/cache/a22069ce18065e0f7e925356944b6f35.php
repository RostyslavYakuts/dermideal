
<nav class="footer-menu-wrapper hidden mdx:flex flex-col gap-2">
	<?php echo $__env->make('global.section-title',['data'=>[
                 'section_title'=>'Szybkie linki',
                 'tw_classes'=>'']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php wp_nav_menu(
     array(
        'theme_location' => 'footer_menu',
		'container' => false,
		'menu_class' => 'footer-menu flex flex-row flex-wrap text-white  gap-x-9 text-sm',
		'before' => '',
		'after' => ''
		)
	);
	?>
</nav>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/footer-menu.blade.php ENDPATH**/ ?>