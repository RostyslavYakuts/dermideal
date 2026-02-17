
<?php
    /**
    * @var array $data
    */
    $bg = $data['background_image'] ?? [];
?>
<section id="hero_section"  class="relative pt-[138px] lgx:pt-[108px] w-full hero-section home-hero-section flex flex-col ">
    <div class="absolute top-0 left-0 w-full h-full">
        <?php if($bg): ?>
            <img fetchpriority="high" decoding="async" width="1440" height="860" class="object-cover absolute w-full h-full" src="<?php echo e($bg['url']); ?>" alt="ids hero image">
        <?php endif; ?>
    </div>
    <div class="flex flex-col gap-6 pb-[200px] lgx:pb-[220px] h-auto">
        <div class="hero-content lgx:py-[80px] rounded-[20px] flex flex-col items-center gap-6">

           <div class="min-h-[86px] lgx:min-h-[134px]">
               <h1 id="home_h1" class="z-10 uppercase text-[24px] text-center text-white lgx:text-[56px]  opacity-0 scale-50 animate-appearFromCenter delay-300"><?php echo $data['h1']; ?></h1>
           </div>

            <div class="px-[20px] lgx:px-0 text-white text-center text-sm lgx:text-lg max-w-[500px] lgx:max-w-[720px] mx-auto opacity-0 scale-50 animate-appearFromCenter delay-300">
                <?php echo $data['description']; ?>

            </div>

            <div class="mt-2 w-full flex flex-col gap-5">
               <div class="w-full flex flex-col lgx:flex-row justify-center items-center gap-3 flex-wrap">
                   <?php echo $__env->make('global.brand-btn',[
                      'data'=>[
                          'button_link'=>$data['first_cta_link'],
                          'button_title'=>$data['first_cta_text'],
                          'tw_classes'=>'hero-first-cta opacity-0 scale-50 animate-appearFromCenter w-[236px] py-[15.5px] text-lg text-brand-dark-text bg-white hover-bg-yellow-gradient'
                      ]
                   ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                   <?php echo $__env->make('global.brand-btn',[
                      'data'=>[
                          'button_link'=>$data['second_cta_link'],
                          'button_title'=>$data['second_cta_text'],
                          'tw_classes'=>'hidden lgx:block hero-second-cta opacity-0 scale-50 animate-appearFromCenter w-[236px] py-[15.5px] text-lg text-white hover:text-brand-dark-text bg-blur hover-bg-yellow-gradient'
                      ]
                   ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
               </div>
                <div class="under-cta-text-wrapper relative text-white text-center lgx:pt-4">
                    <span class="under-cta-text block ">
                            <?php echo e($data['under_cta_text']); ?>

                    </span>
                    <span class="under-cta-text-hover hidden">
                             <?php echo e($data['under_cta_text_hover']); ?>

                    </span>
                </div>

                <?php echo $__env->make('global.brand-btn',[
                     'data'=>[
                         'button_link'=>$data['second_cta_link'],
                         'button_title'=>'<svg width="41" height="36" viewBox="0 0 41 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.81016 18.439C5.81016 17.7116 6.39913 17.122 7.12567 17.122H8.87968C9.60621 17.122 10.1952 17.7116 10.1952 18.439V34.6829C10.1952 35.4103 9.60621 36 8.87968 36H7.12567C6.39913 36 5.81016 35.4103 5.81016 34.6829V18.439Z" fill="white"/>
<path d="M5.37166 18.878H4.49465C3.76812 18.878 3.17914 19.4677 3.17914 20.1951V32.4878C3.17914 33.2152 3.76812 33.8049 4.49465 33.8049H5.37166V18.878Z" fill="white"/>
<path d="M35.6283 18.878H36.5053C37.2319 18.878 37.8209 19.4677 37.8209 20.1951V32.4878C37.8209 33.2152 37.2319 33.8049 36.5053 33.8049H35.6283V18.878Z" fill="white"/>
<path d="M30.8048 18.439C30.8048 17.7116 31.3938 17.122 32.1203 17.122H33.8743C34.6009 17.122 35.1898 17.7116 35.1898 18.439V34.6829C35.1898 35.4103 34.6009 36 33.8743 36H32.1203C31.3938 36 30.8048 35.4103 30.8048 34.6829V18.439Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.64438 17.561C2.00765 17.561 2.30214 17.8558 2.30214 18.2195V25.6829C2.30214 26.0466 2.00765 26.3415 1.64438 26.3415C1.28112 26.3415 0.986631 26.0466 0.986631 25.6829V18.2195C0.986631 17.8558 1.28112 17.561 1.64438 17.561ZM1.64438 25.0244C1.40221 25.0244 1.20588 25.2209 1.20588 25.4634C1.20588 25.7059 1.40221 25.9024 1.64438 25.9024C1.88656 25.9024 2.08289 25.7059 2.08289 25.4634C2.08289 25.2209 1.88656 25.0244 1.64438 25.0244ZM1.64438 18C1.40221 18 1.20588 18.1966 1.20588 18.439C1.20588 18.6815 1.40221 18.878 1.64438 18.878C1.88656 18.878 2.08289 18.6815 2.08289 18.439C2.08289 18.1966 1.88656 18 1.64438 18Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M39.3556 17.561C39.7189 17.561 40.0134 17.8558 40.0134 18.2195V25.6829C40.0134 26.0466 39.7189 26.3415 39.3556 26.3415C38.9923 26.3415 38.6979 26.0466 38.6979 25.6829V18.2195C38.6979 17.8558 38.9923 17.561 39.3556 17.561ZM39.3556 25.0244C39.1134 25.0244 38.9171 25.2209 38.9171 25.4634C38.9171 25.7059 39.1134 25.9024 39.3556 25.9024C39.5978 25.9024 39.7941 25.7059 39.7941 25.4634C39.7941 25.2209 39.5978 25.0244 39.3556 25.0244ZM39.3556 18C39.1134 18 38.9171 18.1966 38.9171 18.439C38.9171 18.6815 39.1134 18.878 39.3556 18.878C39.5978 18.878 39.7941 18.6815 39.7941 18.439C39.7941 18.1966 39.5978 18 39.3556 18Z" fill="white"/>
<path d="M2.41176 26.0122C2.41176 26.4365 2.0682 26.7805 1.64438 26.7805C1.22057 26.7805 0.877005 26.4365 0.877005 26.0122V22.0275C0.36629 22.2085 2.22662e-08 22.695 0 23.2683V29.4146C0 30.142 0.588973 30.7317 1.31551 30.7317H2.63102V21.9512H2.41176V26.0122Z" fill="white"/>
<path d="M38.5882 26.0122C38.5882 26.4365 38.9318 26.7805 39.3556 26.7805C39.7794 26.7805 40.123 26.4365 40.123 26.0122V22.0275C40.6337 22.2085 41 22.695 41 23.2683V29.4146C41 30.142 40.411 30.7317 39.6845 30.7317H38.369V21.9512H38.5882V26.0122Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7193 0C23.1954 -9.9543e-08 25.6472 0.448611 27.9348 1.32007C30.2225 2.19156 32.1234 3.43848 33.8743 5.04878C35.6252 6.65908 37.0925 8.87165 38.0401 10.9756C38.9877 13.0796 39.7941 15.0641 39.7941 17.3415H38.6979C38.5421 16.7903 38.3939 16.2564 38.2315 15.7251C35.9067 11.1688 32.7989 8.22513 29.3904 6.51977C25.6226 4.63465 21.4711 4.25461 17.5744 4.90215C13.6764 5.54994 10.0421 7.22479 7.31666 9.43645C5.07185 11.2581 3.45896 13.4314 2.80616 15.681C2.68222 16.2084 2.58933 16.7557 2.52139 17.3415H1.20588C1.64438 14.9268 2.35146 12.809 3.29905 10.7051C4.24663 8.60116 5.63559 6.68949 7.38646 5.07922C9.13735 3.46895 11.216 2.19155 13.5037 1.32007C15.7913 0.448611 18.2431 9.9543e-08 20.7193 0ZM20.7193 2.62471C18.5552 2.62471 16.4121 3.01678 14.4128 3.77844C12.4135 4.54006 10.4099 5.17806 8.87968 6.58537C7.403 7.94347 6.116 9.29983 4.85179 11.2054C5.49355 10.4615 6.22891 9.75418 7.04045 9.09561C9.82625 6.83495 13.5313 5.12908 17.5024 4.46913C21.4747 3.80901 25.7226 4.1938 29.5865 6.12705C32.4499 7.55968 35.0926 9.83919 37.2539 13.157C36.9886 12.6009 36.6745 12.0243 36.2861 11.4146C35.0578 9.48669 33.9019 8.47118 32.3717 7.06383C30.8415 5.65652 29.025 4.54009 27.0257 3.77844C25.0264 3.01679 22.8833 2.62471 20.7193 2.62471Z" fill="white"/>
<path d="M24.875 24.8333L20.5 29M20.5 29L16.125 24.8333M20.5 29L20.5 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
',
                         'tw_classes'=>'mx-auto lgx:hidden hero-second-cta-mobile opacity-0 scale-50 animate-appearFromCenter w-[60px] h-[60px] p-4 text-lg text-white hover:text-brand-dark-text bg-blur hover-bg-yellow-gradient'
                     ]
                  ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            </div>

        </div>

        <div id="mp3-player-popup" class="mp3-player-popup py-[16px] px-[24px]
         fixed bottom-[90px] lgx:bottom-[115px] bg-[#FDB931CC] sm:h-[326px] border-2 border-yellow rounded-2xl ">

            <button id="close-mp3-player-popup" class="absolute top-[20px] right-[20px] ">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1501 0.75L0.75 11.1501M0.75 0.75L11.1501 11.1501" stroke="#0B0F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <span class="block max-w-[284px] font-bold text-lg lgx:text-[24px] leading-5 lgx:leading-7 "><?php echo e($data['headphones_popup_text']); ?></span>

            <?php echo $__env->make('page.home.mp3-popup', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <button  title="Open player"
                 aria-label="Open player"
                 id="popup-toggle"
                 class="popup-toggle w-[54px] h-[54px] md:w-[70px] md:h-[70px]
                  bg-[#00102266] fixed bottom-4 right-4 cursor-pointer
                   rounded-full border-2 border-yellow flex justify-center items-center">
            <svg class="popup-toggle-icon popup-toggle-icon-play" width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.43298 0.417057C2.01611 0.000806868 1.40157 -0.115443 0.873296 0.120807C0.34502 0.357057 1.52588e-05 0.900807 1.52588e-05 1.50081V6.61206V10.1896V15.3008C1.52588e-05 15.9008 0.34502 16.4446 0.873296 16.6808C1.40157 16.9171 2.01611 16.8008 2.43298 16.3846L13.0651 10.0758C13.3454 9.79081 13.5071 9.40081 13.5071 8.99206C13.5071 8.58331 13.3454 8.19331 13.0651 7.90831L2.43298 0.417057Z" fill="url(#paint0_linear_8110_469)"/>
                <defs>
                    <linearGradient id="paint0_linear_8110_469" x1="13.5071" y1="8.40081" x2="1.52588e-05" y2="8.40081" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-color="#C3CFDD"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg class="popup-toggle-icon popup-toggle-icon-pause" width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.7 0C1.20938 0 0 1.20937 0 2.7V22.5C0 23.9906 1.20938 25.2 2.7 25.2H6.3C7.79063 25.2 9 23.9906 9 22.5V2.7C9 1.20937 7.79063 0 6.3 0H2.7ZM15.3 0C13.8094 0 12.6 1.20937 12.6 2.7V22.5C12.6 23.9906 13.8094 25.2 15.3 25.2H18.9C20.3906 25.2 21.6 23.9906 21.6 22.5V2.7C21.6 1.20937 20.3906 0 18.9 0H15.3Z" fill="white"/>
            </svg>
        </button>
    </div>
</section>


<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/hero-section.blade.php ENDPATH**/ ?>