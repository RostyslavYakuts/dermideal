
<?php
    /**
     * @var array $data
     */

?>
<div class="vision-bg-layer">
    <section class="w-full container mx-auto min-h-[100vh] pt-[110px] lgx:pt-[160px]">
        <div class="w-full flex  flex-col">
            <h1 id="page_h1" class="opacity-0 scale-50 animate-appearFromCenter delay-300 page-h1 uppercase text-[48px] lgx:text-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]"><?php echo $data['h1']; ?></h1>
            <div class="page-vertical-animated mt-[60px] lgx:mt-[80px] flex flex-col gap-[60px] w-full">
                <?php echo $data['description']; ?>

            </div>
            <div class="overflow-x-hidden mt-[60px] lgx:mt-[80px] flex flex-col lgx:flex-row justify-between gap-[60px] w-full">
                <div class="page-animated-block-1 transform transition-all duration-700 -translate-x-20 opacity-0 w-full flex flex-col gap-[20px] min-w-[50%] lgx:w-[50%]">
                    <?php echo $data['first_block_text']; ?>

                </div>
                <img loading="lazy" decoding="async" class="page-animated-block-2 transform translate-x-20 opacity-0 transition-all duration-700 w-full lgx:w-[50%] h-auto" src="<?php echo e($data['first_block_image']['url']); ?>" alt="<?php echo e($data['first_block_image']['alt']); ?>">
            </div>
            <div class="page-vertical-animated mt-[60px] lgx:mt-[80px] flex flex-col gap-[60px] w-full">
                <?php echo $data['second_block_text']; ?>

            </div>
        </div>
        <div class="flex flex-col prose prose-base w-full max-w-[100%]">
            <?php echo $data['content']; ?>

        </div>
    </section>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/vision/content.blade.php ENDPATH**/ ?>