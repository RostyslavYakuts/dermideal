
<?php
    /**
     * @var array $data
     */
?>
<div class="contact-us-total-wrapper w-full min-h-[100vh] ">
    <section class="contacts-wrapper container w-full mx-auto pt-[110px] lgx:pt-[263px] pb-[223px] ">
        <div class="contact-us-gradient mx-auto py-[15px] xs:py-[25px] md:py-[54px] px-[10px] xs:px-[20px] md:px-[38px] rounded-[40px] w-full max-w-[700px]">
            <div class="flex flex-col gap-6 relative">

                <?php echo $__env->make('global.form-modal',['data'=>['id'=>'contact_us_modal']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <h1 class="text-center text-[28px] uppercase text-white font-bold lgx:text-[48px]"><?php echo $data['h1']; ?></h1>

                <form autocomplete="off" id="contact_us_form" class="contact-us-form text-white flex flex-col gap-6 w-full max-w-[624px]" method="post">

                    <div class="relative flex flex-col gap-1">
                        <label for="user_name">Full Name*</label>
                        <input class="bg-transparent active:border-brand h-[50px] py-[13px] px-[22px] rounded-[50px] border border-white" type="text" name="user_name" id="user_name">
                        <span class="text-error font-semibold text-xs xs:text-sm hidden contacts-error-js" id="user_name_error"></span>
                    </div>
                    <div class="relative flex flex-col gap-1">
                        <label for="user_email">Email Address*</label>
                        <input class="bg-transparent form-input active:border-brand h-[50px] py-[13px] px-[22px] rounded-[50px] border border-white" type="email" name="user_email" id="user_email">
                        <span class="text-error font-semibold text-xs xs:text-sm hidden contacts-error-js" id="user_email_error"></span>
                    </div>
                    <div class="relative flex flex-col gap-1">
                        <label for="user_message">Message</label>
                        <textarea class="bg-white form-input active:border-brand resize-none h-[104px] rounded-[20px] py-[13px] px-[22px] border border-white" name="user_message" id="user_message" placeholder="Please type your message here..."></textarea>
                        <span class="text-error font-semibold text-xs xs:text-sm hidden contacts-error-js" id="user_message_error"></span>
                    </div>
                    <div class="relative flex flex-col gap-1">
                        <p class="pb-2 text-center">Share whatever feels right for you</p>
                        <span class="pseudo-label">Upload File</span>
                        <label for="user_file" class="relative pseudo-placeholder cursor-pointer bg-transparent form-input h-[50px] py-[13px] px-[22px] rounded-[50px] border border-white flex items-center justify-between">
                            <span class="file-placeholder-js cursor-pointer">Choose file to upload</span>
                            <input class="opacity-0 absolute max-w-full w-full h-full left-0 top-0 z-10 cursor-pointer" type="file" name="user_file" id="user_file">
                        </label>
                        <span class="text-error font-semibold text-xs xs:text-sm hidden file-error-js" id="user_file_error"></span>


                    </div>



                    <button type="submit" class="mt-[80px] w-full relative no-underline h-[56px] mx-auto rounded-full text-white btn-brand-yellow-animated flex justify-center items-center gap-2">
                        Connect with ids Dimension
                    </button>
                    <p class="text-center">We’ll read this with presence and respect.</p>
                </form>
            </div>
        </div>
    </section>
</div>
<?php if($data['content']): ?>
    <section class="flex flex-col prose prose-base w-full max-w-[100%]">
        <?php echo $data['content']; ?>

    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/contacts/form.blade.php ENDPATH**/ ?>