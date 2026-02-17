
<?php
	/**
	 * @var array $data
	 */
	$title = $data['title'] ?? '';
	$content = $data['content'] ?? '';
?>

<article class="w-full max-w-full prose prose-base">
	<h1 class="text-3xl mb-4 font-bold"><?php echo e($title); ?></h1>
	<?php echo $content; ?>

</article>

<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/single/post/details.blade.php ENDPATH**/ ?>