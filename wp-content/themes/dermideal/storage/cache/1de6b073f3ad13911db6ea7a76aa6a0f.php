
<?php
	/**
	 * @var array $data
	 */
	$id = $data['id'];
?>
<div class="w-full lgx:w-[65%] flex flex-col gap-6 product-identifier-js" data-id="<?php echo e($id); ?>">
	<?php echo $__env->make('single.post.details',['data'=>$data], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>

<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/single/post/right.blade.php ENDPATH**/ ?>