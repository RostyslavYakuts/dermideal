

<section id="contacts_form" class=" container mx-auto form w-full py-[80px] l:py-[120px] relative">
    <div class="mx-auto w-full sm:w-[392px] text-center">
        <h2 class="font-semibold text-[36px] l:text-[48px]"><?php echo e($data['form_title']); ?></h2>
        <p class="mt-5 text-sm md:text-base text-brand-text"><?php echo e($data['form_description']); ?></p>
    </div>
    <?php echo $__env->make('global.form-modal',['data'=>['id'=>'contacts_modal']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form method="post" id="home_contacts_form" class="home-form flex flex-col gap-[40px] l:gap-[60px] mt-[40px] l:mt-[60px] mx-auto w-full l:w-[771px]">
        <div class="flex flex-col gap-5">
            <div class="form-group">
                <label for="user_name">Name<sup class="text-brand">*</sup></label>
                <input required type="text" name="user_name" id="user_name" placeholder="Name">
                <span class="error-msg name-error-msg"></span>
            </div>
            <div class="form-group">
                <label for="user_phone">Phone<sup class="text-brand">*</sup></label>
                <input required type="tel" name="user_phone" id="user_phone" placeholder="Phone">
                <span class="error-msg phone-error-msg"></span>
            </div>
            <div class="form-group">
                <label for="user_email">Email<sup class="text-brand">*</sup></label>
                <input required type="email" name="user_email" id="user_email" placeholder="Email">
                <span class="error-msg email-error-msg"></span>
            </div>
            <div class="form-group">
                <label for="user_message">Project details</label>
                <textarea name="user_message" id="user_message" placeholder="Project details..."></textarea>
                <span class="error-msg message-error-msg"></span>
            </div>

        </div>

        <div class="flex justify-between items-center">
            <div class="form-group">
                <label for="file_input" class="flex items-center flex-row flex-wrap gap-4">
                    <input type="file" hidden id="file_input" multiple="multiple">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#040304"/>
                        <path d="M28.6082 11.9433C28.2679 11.6077 27.8583 11.3507 27.4081 11.1902C26.9579 11.0297 26.478 10.9697 26.0022 11.0143C24.9903 11.0976 24.0424 11.5428 23.3322 12.2683L13.9502 21.6513C13.534 22.0276 13.2834 22.553 13.2529 23.1132C13.2224 23.6735 13.4144 24.223 13.7872 24.6423C14.2064 25.0145 14.7555 25.2061 15.3152 25.1756C15.8749 25.1451 16.4 24.8949 16.7762 24.4793L26.1572 15.0973C26.2483 15.003 26.2987 14.8767 26.2975 14.7456C26.2964 14.6145 26.2438 14.4891 26.1511 14.3964C26.0584 14.3037 25.933 14.2511 25.8019 14.25C25.6708 14.2488 25.5445 14.2992 25.4502 14.3903L16.0762 23.7723C15.8864 24 15.6152 24.1444 15.3204 24.1749C15.0255 24.2053 14.7305 24.1194 14.4982 23.9353C14.3144 23.7031 14.2287 23.4082 14.2591 23.1137C14.2896 22.8191 14.4338 22.5481 14.6612 22.3583L24.0432 12.9763C24.5834 12.4219 25.305 12.0805 26.0762 12.0143C26.4093 11.9761 26.7467 12.0137 27.0632 12.1241C27.3798 12.2346 27.6673 12.415 27.9044 12.6521C28.1415 12.8892 28.3219 13.1767 28.4324 13.4933C28.5428 13.8098 28.5803 14.1472 28.5422 14.4803C28.4746 15.2522 28.1317 15.9741 27.5762 16.5143L18.1942 25.8953C16.3642 27.7253 13.6072 27.9443 12.0482 26.3843C11.6736 25.9991 11.3874 25.5369 11.2096 25.0298C11.0317 24.5228 10.9664 23.9831 11.0182 23.4483C11.1229 22.2307 11.6621 21.0914 12.5372 20.2383L17.0232 15.7503C17.0709 15.7042 17.109 15.649 17.1352 15.588C17.1614 15.527 17.1752 15.4614 17.1758 15.395C17.1764 15.3286 17.1637 15.2628 17.1386 15.2013C17.1135 15.1399 17.0763 15.0841 17.0294 15.0371C16.9824 14.9902 16.9266 14.953 16.8652 14.9279C16.8037 14.9028 16.7379 14.8901 16.6715 14.8907C16.6051 14.8913 16.5395 14.9051 16.4785 14.9313C16.4175 14.9575 16.3623 14.9956 16.3162 15.0433L11.8292 19.5293C10.7835 20.5522 10.1413 21.9175 10.0202 23.3753C9.95705 24.0531 10.0424 24.7365 10.2704 25.3779C10.4984 26.0194 10.8634 26.6034 11.3402 27.0893C11.7801 27.5214 12.3017 27.8616 12.8744 28.0901C13.4471 28.3187 14.0596 28.4309 14.6762 28.4203C16.2708 28.3957 17.791 27.7414 18.9052 26.6003L28.2872 17.2193C29.0125 16.5089 29.4576 15.5611 29.5412 14.5493C29.5844 14.0732 29.5233 13.5934 29.3622 13.1434C29.201 12.6933 28.9437 12.2838 28.6082 11.9433Z" fill="#040304"/>
                    </svg>
                    Add file <span class="hidden xs:inline">(.pdf, .doc, .docx, .txt, Max size: 2MB)</span>
                </label>
                <div class="file-list text-sm"></div>
            </div>
            <button type="submit" class="form-submit flex flex-row gap-4 text-brand font-bold text-[24px]">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#03CE77"/>
                    <path d="M12.1023 10.0006C11.9124 10.0077 11.7361 10.1006 11.6229 10.2534C11.5099 10.406 11.4724 10.6019 11.5212 10.7855L13.6036 18.5912L22.799 19.9987L13.6051 21.4051L11.5214 29.2129C11.4794 29.369 11.4997 29.5355 11.5778 29.6769C11.656 29.8185 11.7859 29.9244 11.9405 29.9721C12.0949 30.0199 12.2619 30.0059 12.4063 29.9331L31.1556 20.5577C31.2944 20.4879 31.4021 20.3692 31.458 20.2242C31.514 20.0794 31.514 19.919 31.458 19.7741C31.4021 19.6293 31.2944 19.5104 31.1556 19.4407L12.4063 10.0653C12.3121 10.0184 12.2073 9.99626 12.1023 10.0006Z" fill="#03CE77"/>
                </svg>
                Send request
            </button>
        </div>
    </form>
</section>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/form.blade.php ENDPATH**/ ?>