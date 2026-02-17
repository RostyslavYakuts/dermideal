

<div class="w-full min-h-[100vh] pt-[110px] lgx:pt-[136px]">
    <section  class="contacts-wrapper container w-full mx-auto ">

        <div class="flex flex-col justify-center items-center gap-6 relative">

            <h1 class="text-center max-w-[655px] font-bold text-[28px] lgx:text-[48px] uppercase text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]"><?php echo $data['faq_title']; ?></h1>
            <p class="text-brand-text max-w-[536px]"><?php echo $data['description']; ?></p>
            <?php if($data['faq']): ?>
                <div class="faq-wrapper w-full max-w-[840px] flex flex-col items-center justify-center gap-6">
                    <?php $__currentLoopData = $data['faq']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="faq-section w-full flex flex-col gap-6">
                            <span class="faq-category py-[18px] px-[20px] block bg-black rounded-full text-white font-bold"><?php echo e($faq_item['question_category']); ?></span>
                            <?php if($faq_item['questions']): ?>
                                <?php $__currentLoopData = $faq_item['questions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question_index => $question_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $css_active = '';
                                        if($index === 0 && $question_index === 0){
                                            $css_active = 'active';
                                        }
                                    ?>
                                    <div class="<?php echo e($css_active); ?> faq-block py-[16px] px-[20px] rounded-[24px] border border-[#B9C0D4] flex flex-col gap-[16px]">
                                        <span class="question question-js font-bold text-[#30374E] block relative">
                                            <?php echo e($question_item['question']); ?>

                                        </span>
                                        <div class="answer prose-base prose w-full">
                                            <?php echo $question_item['answer']; ?>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            <?php endif; ?>

        </div>
    </section>
    <?php if($data['content']): ?>
    <section class="flex flex-col prose prose-base w-full max-w-[100%]">
        <?php echo $data['content']; ?>

    </section>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/faq/content.blade.php ENDPATH**/ ?>