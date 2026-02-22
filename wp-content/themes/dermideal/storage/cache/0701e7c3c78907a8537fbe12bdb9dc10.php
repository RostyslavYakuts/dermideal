
<section class="container mx-auto mt-5 flex items-start gap-10">
    <img class="w-full h-auto max-w-[500px]"
         src="<?php echo e($data['image_url']); ?>"
         alt="Категорія: <?php echo e($data['name']); ?>"
         loading="lazy"
         decoding="async" width="500" height="300">
    <div class="w-full">
        <h1 class="text-4xl uppercase"><?php echo e($data['name']); ?></h1>
        <div class="mt-4"><?php echo $data['description']; ?></div>
    </div>
</section><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/taxonomy/product-category/top-info.blade.php ENDPATH**/ ?>