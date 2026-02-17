
<div class="faq-popup-container w-full relative">
    <div class="faq-popup-cta flex justify-center items-center cursor-pointer bg-[#fff1d6] rounded-full border-2 border-yellow fixed bottom-[16px] right-[10px] l:right-[21px] popup-tray w-[72px] h-[72px]">
        <svg width="35" height="27" viewBox="0 0 35 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.5 3.5L17.5 14.5L32.5 3.5M14.0857 12.8381L3.5 23.5M31.5 22.6667L20.4272 12.8381M5.5 25.1522C3.29086 25.1522 1.5 23.3613 1.5 21.1522V5.5C1.5 3.29086 3.29086 1.5 5.5 1.5H29.5C31.7091 1.5 33.5 3.29086 33.5 5.5V21.1522C33.5 23.3613 31.7091 25.1522 29.5 25.1522H5.5Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div id="faq-popup" class="faq-popup bg-[#fff1d6] w-[346px] xmm:w-[360px] sm:w-[510] rounded-[20px] border-2 border-yellow  fixed bottom-[16px] right-[0px] xm:right-[10px] l:right-[21px] py-[16px] px-[24px]">
        <button id="faq-popup-close" class="w-[10px] h-[10px] absolute right-[24px] top-[16px]">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.1501 0.75L0.75 11.1501M0.75 0.75L11.1501 11.1501" stroke="#0B0F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <div class="flex flex-col gap-4 justify-start">
            <span class="font-bold text-[18px] l:text-[24px] text-brand-dark-text">
                <?php echo e($data['popup_header']); ?>

            </span>
            <span class="text-sm l:text-base">
             <?php echo e($data['popup_text']); ?>

            </span>
            <a target="_blank" href="<?php echo e($data['popup_link']); ?>" class="relative no-underline w-full l:w-[188px] h-[56px] rounded-full text-white btn-brand flex justify-center items-center gap-2 ">
                Send email
            </a>
        </div>
    </div>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/faq/popup.blade.php ENDPATH**/ ?>