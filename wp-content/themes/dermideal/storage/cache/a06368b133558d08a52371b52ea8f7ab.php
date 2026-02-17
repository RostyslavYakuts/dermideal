
<div id="certificates" class="pt-[100px]"></div>

    <section class="bg-white container mx-auto w-full">
        <div class="p-[10px] md:p-[40] certificates">
            <div class="flex flex-col gap-3 justify-center items-center certificates-info">
                <?php echo $__env->make('global.section-title',['data'=>[
                 'section_title'=>'Certyfikaty',
                 'tw_classes'=>'']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <h2 class="text-2xl xs:text-3xl lgx:text-[42px]"><?php echo e($data['certificates_title']); ?></h2>
                <p class="md:text-center text-lg max-w-[1000px]"><?php echo e($data['certificates_description']); ?></p>
            </div>
        </div>
        <?php if($data['certificates_gallery']): ?>
            <div class="relative mt-4">
                <!-- Swiper -->
                <div class="swiper certificates-swiper">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $data['certificates_gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide p-2">
                                <img
                                        src="<?php echo e($item['url'] ?? ''); ?>"
                                        alt="<?php echo e($item['alt'] ?? ''); ?>"
                                        loading="lazy"
                                        decoding="async"
                                        class="w-full rounded-xl block object-contain h-[479px]"
                                />
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Arrows -->
                <button class="cert-prev absolute -left-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 rounded-full shadow">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="45" rx="22.5" transform="matrix(-1 0 0 1 45 0)" fill="#009CFF"/>
                        <path d="M20.9167 14.5L13 22.5M13 22.5L20.9167 30.5M13 22.5L32 22.5" stroke="#F6F6F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="cert-next absolute -right-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 rounded-full shadow">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="45" rx="22.5" fill="#009CFF"/>
                        <path d="M24.0833 14.5L32 22.5M32 22.5L24.0833 30.5M32 22.5L13 22.5" stroke="#F6F6F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        <?php endif; ?>

    </section>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/certificates.blade.php ENDPATH**/ ?>