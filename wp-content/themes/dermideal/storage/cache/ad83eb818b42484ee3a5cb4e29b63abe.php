

<section class="testimonials-wrapper overflow-hidden mt-[140px] lgx:mt-[172px] min-h-[800px] xs:min-h-[500px] container w-full mx-auto relative">
    <?php echo $__env->make('global.section-title',['data'=>[
             'section_title'=>'Testimonials',
             'tw_classes'=>'m-auto']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="mt-4 px-4 flex justify-center items-center">
        <h2 class="text-center text-brand-header text-3xl lgx:text-5xl font-semibold"><?php echo $data['testimonials_section_title']; ?></h2>
    </div>
    <div class="relative testimonials w-full grid grid-cols-1 md:grid-cols-2 gap-4 mt-[40px] md:mt-[60px]">
        <?php if($data['testimonials']): ?>
            <?php $__currentLoopData = $data['testimonials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $author = $testimonial['author'] ?? '';
                    $author_info = $testimonial['author_info'] ?? '';
                    $author_feedback = $testimonial['author_feedback'] ?? '';
                ?>
                <div class="testimonial bg-light-blue max-w-[650px] min-h-[515px] xs:min-h-[200px] xs:h-auto w-full rounded-[20px] flex flex-col gap-4 p-4">
                    <div class="flex flex-row items-center gap-2">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="28" cy="28" r="28" fill="white"/>
                            <rect opacity="0.01" x="20" y="20" width="16" height="16" fill="#7E838C"/>
                            <path d="M28 27.3333C29.4728 27.3333 30.6667 26.1394 30.6667 24.6667C30.6667 23.1939 29.4728 22 28 22C26.5273 22 25.3333 23.1939 25.3333 24.6667C25.3333 26.1394 26.5273 27.3333 28 27.3333Z" fill="#7E838C"/>
                            <path d="M32 34.0001C32.3682 34.0001 32.6667 33.7016 32.6667 33.3334C32.6667 30.7561 30.5773 28.6667 28 28.6667C25.4227 28.6667 23.3333 30.7561 23.3333 33.3334C23.3333 33.7016 23.6318 34.0001 24 34.0001H32Z" fill="#7E838C"/>
                        </svg>
                        <div class="flex flex-col">
                            <h4 class="text-brand-header text-xl font-semibold"><?php echo $author; ?></h4>
                            <p class="text-brand-text font-medium"><?php echo $author_info; ?></p>
                        </div>
                    </div>
                    <p class="border-t border-dark-border pt-4"><?php echo $author_feedback; ?></p>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>
    </div>
    <div class="swiper-pagination xs:hidden"></div>
</section><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/page/home/testimonials.blade.php ENDPATH**/ ?>