
<div id="cases" class="pt-[80px] l:pt-[120px] "></div>
<section class="cases w-full pt-[40px] l:pt-[60px] bg-black py-[40px] l:py-[60px]">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <h2 class="text-white text-[36px] l:text-[48px] "><?php echo e($data['cases_section_title']); ?></h2>
                <a class="hidden md:flex justify-center items-center w-[220px] h-[40px] l:h-[60px] bg-brand hover:bg-brand-hover rounded-full text-lg text-white" href="<?php echo e($data['cases_section_cta_link']); ?>"><?php echo e($data['cases_section_cta_text']); ?></a>
            </div>
        </div>
        <div class="w-full px-[20px]">
            <div class="swiper overflow-hidden cases-container-js mt-[60px] relative">
                <div class="swiper-wrapper relative">
                    <?php if($data['cases_section_slider']): ?>
                        <?php $__currentLoopData = $data['cases_section_slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">

                                <div class="case-flip-container">
                                    <div class="flip-card flip-card-js">
                                        <div class="side front relative">
                                            <?php
                                                $tags_arr = explode(',',$slide['tags']);
                                            ?>
                                            <div class="z-10 absolute top-[20px] left-[20px] tags flex flex-wrap flex-row gap-2">
                                                <?php $__currentLoopData = $tags_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="bg-blur text-white rounded-full py-[8px] px-[16px]">
                                                        <?php echo e($tag); ?>

                                                    </span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <span class="text-white text-[24px] z-10 absolute bottom-[20px] left-[20px]"><?php echo e($slide['title']); ?></span>
                                            <img loading="lazy" decoding="async"
                                                 width="570" height="400"
                                                 src="<?php echo e($slide['thumbnail']['url']); ?>"
                                                 alt="<?php echo e($slide['thumbnail']['alt']); ?>"
                                                 class="rounded-[20px] w-full h-full absolute top-0 left-0 object-cover"
                                            >

                                        </div>
                                        <div class="side back flex flex-col justify-between p-[20px] rounded-[20px]">
                                            <div class="flex flex-col gap-2">
                                                <span class="text-brand-header text-[24px] font-bold">Description</span>
                                                <p class="text-brand-text text-sm leading-none"><?php echo e($slide['description']); ?></p>
                                                <a class="text-brand max-w-[250px]" target="_blank" rel="noreferrer noopener" href="<?php echo e($slide['link']); ?>"><?php echo e($slide['link']); ?></a>
                                            </div>

                                            <div class="flex items-center">
                                                <div class="w-[50%] flex flex-col gap-1">
                                                    <span class="text-[#828282] flex flex-row gap-1 items-center">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.51943 2.99226C8.63736 3.11018 8.7995 3.16914 8.9469 3.16914C9.0943 3.16914 9.25644 3.11018 9.37436 2.99226C9.61021 2.75642 9.61021 2.37317 9.37436 2.12259L7.42866 0.176882C7.19282 -0.0589608 6.80957 -0.0589608 6.55899 0.176882L4.61328 2.12259C4.37744 2.35843 4.37744 2.74168 4.61328 2.99226C4.84913 3.24284 5.23237 3.2281 5.48295 2.99226L6.39685 2.07837V6.14666C6.61795 6.29406 6.80957 6.47094 7.00119 6.64783C7.19282 6.47094 7.39918 6.29406 7.60554 6.14666V2.07837L8.51943 2.99226Z" fill="#828282"/>
                                                            <path d="M13.8266 6.51517L11.8661 4.56946C11.6303 4.33362 11.2471 4.33362 10.9965 4.56946C10.7606 4.8053 10.7606 5.18855 10.9965 5.43913L11.9104 6.35302H10.8786C9.6846 6.35302 8.60856 6.80997 7.79785 7.57646C8.04843 7.93022 8.24006 8.29873 8.41694 8.69671C9.00655 8.00392 9.89096 7.57646 10.8786 7.57646H11.9104L10.9965 8.49035C10.7606 8.72619 10.7606 9.10944 10.9965 9.36002C11.1144 9.47794 11.2765 9.5369 11.4239 9.5369C11.5861 9.5369 11.7335 9.47794 11.8514 9.36002L13.7971 7.41432C14.0624 7.14899 14.0624 6.75101 13.8266 6.51517Z" fill="#828282"/>
                                                            <path d="M3.12492 6.33837H2.09311L3.007 5.42448C3.24284 5.18864 3.24284 4.8054 3.007 4.55481C2.77116 4.31897 2.38791 4.31897 2.13733 4.55481L0.176882 6.51526C-0.0589607 6.7511 -0.0589607 7.13434 0.176882 7.38493L2.13733 9.33063C2.25525 9.44855 2.41739 9.50751 2.56479 9.50751C2.71219 9.50751 2.87434 9.44855 2.99226 9.33063C3.2281 9.09479 3.2281 8.71154 2.99226 8.46096L2.07837 7.54707H3.11018C4.90848 7.54707 6.3825 9.02109 6.3825 10.8194V12.7061C6.3825 13.0452 6.66256 13.3105 6.98685 13.3105C7.31113 13.3105 7.5912 13.0304 7.5912 12.7061V10.8341C7.60594 8.35778 5.60127 6.33837 3.12492 6.33837Z" fill="#828282"/>
                                                        </svg> Direction
                                                    </span>
                                                    <span><?php echo e($slide['direction']); ?></span>
                                                </div>
                                                <div class="w-[50%] flex flex-col gap-1">
                                                    <span class="text-[#828282] flex flex-row gap-1 items-center">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.27784 2.2502C4.10221 2.2502 1.52784 4.82456 1.52784 8.00019C1.52784 11.1758 4.10221 13.7502 7.27784 13.7502C9.40534 13.7502 11.2638 12.5951 12.259 10.8747C12.4387 10.564 12.8364 10.4578 13.1471 10.6375C13.4578 10.8173 13.564 11.2149 13.3843 11.5257C12.1663 13.6312 9.88816 15.0502 7.27784 15.0502C3.38424 15.0502 0.227844 11.8938 0.227844 8.00019C0.227844 4.10659 3.38424 0.950195 7.27784 0.950195C10.9064 0.950195 13.8947 3.69148 14.2847 7.21605L14.6625 6.83824C14.9164 6.5844 15.3279 6.5844 15.5818 6.83824C15.8356 7.09208 15.8356 7.50364 15.5818 7.75748L13.9818 9.35748C13.7279 9.61132 13.3164 9.61132 13.0625 9.35748L11.4625 7.75748C11.2087 7.50364 11.2087 7.09208 11.4625 6.83824C11.7164 6.5844 12.1279 6.5844 12.3818 6.83824L13.0027 7.4592C12.7301 4.53726 10.271 2.2502 7.27784 2.2502ZM7.27784 4.80504C7.63683 4.80504 7.92784 5.09605 7.92784 5.45503V8.3317L9.88339 8.98355C10.224 9.09707 10.408 9.46518 10.2945 9.80574C10.181 10.1463 9.81286 10.3304 9.47229 10.2168L7.0723 9.41684C6.80687 9.32836 6.62784 9.07997 6.62784 8.80019V5.45503C6.62784 5.09605 6.91886 4.80504 7.27784 4.80504Z" fill="#828282"/>
                                                        </svg> Duration
                                                    </span>
                                                    <span><?php echo e($slide['duration']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                </div>
                <div class="cases-swiper-navigation h-0 container mx-auto absolute left-1/2  -translate-x-1/2 -translate-y-1/2 z-20 hidden md:flex justify-between items-center w-full">
                    <button type="button" aria-label="Prev" class="cases-swiper-button-prev">
                        <svg width="20" height="35" viewBox="0 0 20 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 33.4141L2 17.4141L18 1.41406" stroke="#19C37A" stroke-width="4" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button type="button" aria-label="Next" class="cases-swiper-button-next">
                        <svg width="20" height="35" viewBox="0 0 20 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41431 33.4141L17.4143 17.4141L1.41431 1.41406" stroke="#19C37A" stroke-width="4" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="swiper-pagination flex justify-center items-center gap-2 mt-[60px] relative"></div>
            </div>
            <a class="mt-[40px] flex md:hidden justify-center items-center w-full h-[48px] xs:w-[220px] xs:mx-auto xs:h-[40px] bg-brand rounded-full text-lg text-white" href="<?php echo e($data['cases_section_cta_link']); ?>"><?php echo e($data['cases_section_cta_text']); ?></a>


        </div>

    </section>

<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/page/home/cases.blade.php ENDPATH**/ ?>