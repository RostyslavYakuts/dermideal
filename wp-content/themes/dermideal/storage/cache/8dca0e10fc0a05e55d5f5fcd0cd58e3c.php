
<?php
    /**
    * @var array $data
    */
    $bg = $data['background_image'] ?? [];
    $style = '';
    if(isset($bg['url'])){
        $style = 'style="background-image:url('. $bg['url'] .'); background-repeat: no-repeat; background-size: cover;" ';
    }
?>
<section <?php echo $style; ?> class="container mx-auto w-full md:rounded-[30px] hero-section home-hero-section mt-[100px] lgx:mt-[110px] flex justify-end flex-col">
    <div class="px-0 py-[20px] md:p-[40px]">
        <div class="p-[30px] hero-content rounded-[20px] flex flex-col gap-4">

        <h1 class="max-w-[600px] text-4xl text-white lgx:text-[56px] opacity-0 scale-50 animate-appearFromCenter delay-100">
            <?php echo $data['h1']; ?>

        </h1>

        <p class="hidden xm:block text-white text-lg max-w-[930px] opacity-0 scale-50 animate-appearFromCenter delay-300">
            <?php echo $data['description']; ?>

        </p>

        <?php echo $__env->make('global.brand-btn',[
            'data'=>[
                'button_link'=>$data['cta_button_url'],
                'button_title'=>'',
                'tw_classes'=>'opacity-0 scale-50 animate-appearFromCenter delay-100'
            ]
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    </div>
</section>

<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/page/home/hero-section.blade.php ENDPATH**/ ?>