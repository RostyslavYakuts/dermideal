
<div id="footer_contacts" class="relative z-50 flex flex-col gap-2 mx-auto max-w-[900px] pt-[80px] pb-[35px]">
    <span class="footer-title text-center uppercase block text-[28px] lgx:text-[48px] text-transparent bg-clip-text bg-gradient-to-r from-[#FFFFFF69] via-white to-[#FFFFFF87]">
        <?php echo $options['footer_title']; ?>

    </span>
    <p class="footer-description text-[20px] mt-[24px] max-w-[700px] mx-auto text-center text-[#EFF1F5]">
        <?php echo $options['footer_description']; ?>

    </p>
    <?php echo $__env->make('global.form-modal',['data'=>['id'=>'contacts_modal']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form autocomplete="off" id="contacts_form" class="footer-form text-lg text-[#EFF1F5] mt-[60px] max-w-[624px] mx-auto flex flex-col gap-[20px] ">
        <div class="flex flex-col gap-2">
            <label class="font-bold bold" for="name">Full Name*</label>
            <input required class="bg-transparent w-full py-[12px] px-[20px] rounded-full border border-white"
                   type="text" id="name" name="name">
            <span data-id="name" class="hidden input-error text-red"></span>
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold bold" for="age">Age Group*</label>
            <div class="pseudo-select" data-name="age">
                <button type="button" class="pseudo-trigger">
                    <span class="pseudo-value">Select your age group</span>
                </button>

                <ul class="pseudo-options">
                    <li data-value="15-24">15-24</li>
                    <li data-value="25-34">25-34</li>
                    <li data-value="35-44">35-44</li>
                    <li data-value="45-54">45-54</li>
                    <li data-value="55-64">55-64</li>
                </ul>

                <select id="age" name="age" hidden>
                    <option value="">Select your age group</option>
                    <option value="15-24" >15-24</option>
                    <option value="25-34" >25-34</option>
                    <option value="35-44" >35-44</option>
                    <option value="45-54" >45-54</option>
                    <option value="55-64" >55-64</option>
                </select>
            </div>
            <span data-id="age" class="hidden input-error text-red pt-1"></span>
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold bold" for="email">Email Address*</label>
            <input required class="bg-transparent w-full py-[12px] px-[20px] rounded-full border border-white" type="email" id="email" name="email">
            <span data-id="email" class="hidden input-error text-red pt-1"></span>
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold bold" for="country">Country of Residence*</label>
            <input required class="bg-transparent w-full py-[12px] px-[20px] rounded-full border border-white" type="text" id="country" name="country">
            <span data-id="country" class="hidden input-error text-red pt-1"></span>
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold bold" for="intention">Healing Intention</label>
            <div class="pseudo-select" data-name="intention">
                <?php if($options['footer_form_intention_options']): ?>
                    <?php $__currentLoopData = $options['footer_form_intention_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $intention): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key === 0): ?>
                            <button type="button" class="pseudo-trigger">
                                <span class="pseudo-value">What are you hoping to experience with ids?</span>
                            </button>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <ul class="pseudo-options">
                        <?php $__currentLoopData = $options['footer_form_intention_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $intention): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-value="<?php echo e($intention['intention']); ?>"><?php echo e($intention['intention']); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <select id="intention" name="intention" hidden>
                        <option value="">What are you hoping to experience with ids?</option>
                        <?php $__currentLoopData = $options['footer_form_intention_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $intention): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key === 0): ?>
                                <option value="<?php echo e($intention['intention']); ?>"><?php echo e($intention['intention']); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($intention['intention']); ?>"><?php echo e($intention['intention']); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php endif; ?>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold bold" for="referral">How did you hear about ids Dimension?</label>
            <div class="pseudo-select" data-name="referral">
                <?php if($options['footer_form_info_source_options']): ?>
                    <?php $__currentLoopData = $options['footer_form_info_source_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key === 0): ?>
                            <button type="button" class="pseudo-trigger">
                                <span class="pseudo-value">Select option</span>
                            </button>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <ul class="pseudo-options">
                        <?php $__currentLoopData = $options['footer_form_info_source_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-value="<?php echo e($source['source']); ?>"><?php echo e($source['source']); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <select id="referral" name="referral" hidden>
                        <option value="">How did you hear about ids Dimension?</option>
                        <?php $__currentLoopData = $options['footer_form_info_source_options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key === 0): ?>
                                <option value="<?php echo e($source['source']); ?>"><?php echo e($source['source']); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($source['source']); ?>"><?php echo e($source['source']); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php endif; ?>
            </div>
        </div>
        <div class="flex flex-row-reverse items-center gap-2">
            <label class="pseudo-checkbox flex items-center gap-2" for="confirm_legal">
                <input class="opacity-0" type="checkbox" id="confirm_legal" name="confirm_legal">
                <span class="box block border border-white rounded"></span>
                <span class="confirm-text"><?php echo $options['footer_form_confirm_text']; ?></span>
            </label>

            <span data-id="confirm_legal" class="input-error text-red pt-1"></span>
        </div>
        <div class="flex flex-row-reverse items-center gap-2">
            <label class="pseudo-checkbox flex items-center gap-2"  for="confirm_subscription">
                <input class="opacity-0" type="checkbox" id="confirm_subscription" name="confirm_subscription">
                <span class="block box border border-white rounded"></span>
                <span class="confirm-text"><?php echo $options['footer_form_subscribe_text']; ?></span>
            </label>

            <span data-id="confirm_subscription" class="input-error text-red pt-1"></span>
        </div>

        <button type="submit" class="w-full relative no-underline h-[56px] mx-auto rounded-full text-white btn-brand flex justify-center items-center gap-2">
            Join the Waitlist
        </button>

    </form>

</div>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/footer-contacts.blade.php ENDPATH**/ ?>