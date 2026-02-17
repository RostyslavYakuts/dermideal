

<?php if(!empty($data['faq'])): ?>
    <div itemscope itemtype="https://schema.org/FAQPage" class="faq">
        <meta itemprop="mainEntityOfPage" content="<?php echo e(get_site_url()); ?>">
        <?php echo $__env->make('global.section-title',['data'=>[
            'section_title'=>'Questions? We Have Answers',
            'tw_classes'=>'m-auto min-w-[242px]']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="mt-4 flex flex-col justify-center items-center gap-6">
            <h2 itemprop="name" class="text-center text-brand-header text-3xl lgx:text-5xl font-semibold"><?php echo $data['faq_title'] ?? 'Frequently Asked Questions'; ?></h2>
            <p class="text-brand-text text-center"><?php echo $data['faq_description'] ?? 'Find quick answers to some of the most common questions about Increasy.'; ?></p>
        </div>

        <div class="faq-items max-w-[800px] mt-10 mx-auto">
            <?php $__currentLoopData = $data['faq']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $active = $loop->first ? 'active' : '';
                    $hidden = $loop->iteration > 4 ? 'hidden' : '';
                ?>

                <dl data-iterator="<?php echo e($loop->iteration); ?>" class="faq-item border border-light-blue js-faq-block <?php echo e($active); ?> <?php echo e($hidden); ?>">
                    <i class="faq-item__icon"></i>
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="js-faq-question">
                        <dt itemprop="name" class="faq-item__question text-brand-header font-semibold text-[24px]"><?php echo $item['question']; ?></dt>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <dd itemprop="text" class="faq-item__answer js-faq-answer <?php echo e($active); ?>">
                                <?php echo $item['answer']; ?>

                            </dd>
                        </div>
                    </div>
                </dl>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($data['faq']) > 4): ?>
                <?php echo $__env->make('global.brand-btn',['data'=>[
                'button_tag'=>'button',
                'button_title'=>'Show All Questions',
                'tw_classes'=>'w-full md:max-w-[196px] faq-show-more-js mt-10 mx-auto']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </div>

    </div>
<?php endif; ?><?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/global-faq.blade.php ENDPATH**/ ?>