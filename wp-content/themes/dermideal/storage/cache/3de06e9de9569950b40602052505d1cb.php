
<?php
    /**
     * @var array $data
     */
?>

<div class="music-bg-layer">
<section id="music" class="music relative container mx-auto w-full">
        <div class="flex flex-col-reverse l:flex-row l:justify-between gap-6 py-[50px] l:py-[96px]">

            <div class="left-part music-left-part l:max-w-[534px]">
                <div class="hidden l:block ">
                    <h2 id="music_h2" class="w-full lgx:min-w-[421px] music-h2 min-h-[86px] lgx:min-h-[134px] uppercase text-[28px] lgx:text-[48px] text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                        <?php echo $data['music_section_title']; ?>

                    </h2>
                    <p class="text-lg text-brand-text w-full">
                        <?php echo $data['music_section_description']; ?>

                    </p>
                </div>

                <div class="mt-5 hidden l:block ">
                    <?php if($data['music_section_headphones']): ?>
                        <img width="93" height="82" src="<?php echo e($data['music_section_headphones']['url']); ?>" alt="<?php echo e($data['music_section_headphones']['alt']); ?>">
                    <?php endif; ?>
                    <div class="w-[359px] font-bold text-lg text-brand-text mt-5">
                        <?php echo $data['music_section_headphones_text']; ?>

                    </div>
                </div>

                <div class="mp3-player w-full l:max-w-[733px] h-[205px] relative mt-6 l:mt-[47px]">
                   <div class="mp3-player-body absolute top-0 left-0 w-full l:w-[733px] z-20 p-[24px] border-2 border-[#FFFFFF33] rounded-[20px] bg-[#FFFFFFB2]">
                       <div id="waveform" class="w-full relative waveform waveform-js">
                           <?php $wave_src = IMAGES_PATH.'wave.svg'; ?>
                          <img src="<?php echo e($wave_src); ?>" alt="wave" class="default-wave-image absolute top-0 left-0">
                       </div>
                       <div class="time mt-2.5 w-full flex justify-between items-center">
                           <span class="current">0:00</span>
                           <span class="total">0:00</span>
                       </div>
                       <div class="controls px-[15px] mt-[24px] mx-auto w-[166px] h-[48px] flex justify-between items-center">
                           <button aria-label="Rewind" class="mp3-player-prev-js">
                               <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M6.38438 0.369269C6.74688 0.000714425 7.28125 -0.102215 7.74063 0.106964C8.2 0.316144 8.5 0.797589 8.5 1.32884V5.85442L13.8844 0.372589C14.2469 0.000714393 14.7812 -0.102215 15.2406 0.106964C15.7 0.316144 16 0.797589 16 1.32884V13.5476C16 14.0788 15.7 14.5603 15.2406 14.7695C14.7812 14.9786 14.2469 14.8757 13.8844 14.5072L8.5 9.022V13.5476C8.5 14.0788 8.2 14.5603 7.74063 14.7695C7.28125 14.9786 6.74688 14.8757 6.38438 14.5072L0.384375 8.39778C0.140625 8.14544 0 7.80013 0 7.43821C0 7.0763 0.140625 6.73099 0.384375 6.47864L6.38438 0.369269Z" fill="black"/>
                               </svg>
                           </button>
                           <button aria-label="Play / pause" class="mp3-player-play-btn btn-brand mp3-player-play-js rounded-full w-[48px] h-[48px] relative flex justify-center items-center">
                               <svg class="mp3-player-play ml-[3px]" width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M2.43274 0.417057C2.01587 0.000806868 1.40133 -0.115443 0.873052 0.120807C0.344776 0.357057 -0.000228882 0.900807 -0.000228882 1.50081V6.61206V10.1896V15.3008C-0.000228882 15.9008 0.344776 16.4446 0.873052 16.6808C1.40133 16.9171 2.01587 16.8008 2.43274 16.3846L13.0648 10.0758C13.3451 9.79081 13.5068 9.40081 13.5068 8.99206C13.5068 8.58331 13.3451 8.19331 13.0648 7.90831L2.43274 0.417057Z" fill="white"/>
                               </svg>
                               <svg class="mp3-player-pause" width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M1.5 0C0.671875 0 0 0.671875 0 1.5V12.5C0 13.3281 0.671875 14 1.5 14H3.5C4.32812 14 5 13.3281 5 12.5V1.5C5 0.671875 4.32812 0 3.5 0H1.5ZM8.5 0C7.67188 0 7 0.671875 7 1.5V12.5C7 13.3281 7.67188 14 8.5 14H10.5C11.3281 14 12 13.3281 12 12.5V1.5C12 0.671875 11.3281 0 10.5 0H8.5Z" fill="white"/>
                               </svg>
                           </button>
                           <button   aria-label="Fast forward" class="mp3-player-next-js">
                               <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M9.61562 0.327103C9.25313 0.000632847 8.71875 -0.0905437 8.25937 0.0947505C7.8 0.280045 7.5 0.706515 7.5 1.1771V5.18593L2.11562 0.330045C1.75312 0.000632819 1.21875 -0.0905437 0.759375 0.0947505C0.3 0.280045 0 0.706515 0 1.1771V12.0006C0 12.4712 0.3 12.8977 0.759375 13.083C1.21875 13.2683 1.75312 13.1771 2.11562 12.8506L7.5 7.99181V12.0006C7.5 12.4712 7.8 12.8977 8.25937 13.083C8.71875 13.2683 9.25313 13.1771 9.61562 12.8506L15.6156 7.43887C15.8625 7.21828 16 6.90946 16 6.58887C16 6.26828 15.8594 5.9624 15.6156 5.73887L9.61562 0.327103Z" fill="black"/>
                               </svg>
                           </button>
                       </div>
                   </div>
                </div>

                <div class="mp3-tracks mt-5">
                    <?php if($data['music_section_tracks']): ?>
                        <div class="w-full flex justify-between l:justify-start gap-3 items-center mt-5">
                            <?php $__currentLoopData = $data['music_section_tracks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $track): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <span data-thumbnail-src="<?php echo e($track['track_thumbnail']['url'] ?? ''); ?>"
                                      data-src="<?php echo e($track['mp3_file']['url'] ?? ''); ?>"
                                      class="<?php echo e($key === 0 ? 'active' : ''); ?> mp3-btn rounded-full bg-white text-[#0B0F1E] border-2 border-black cursor-pointer  text-xs w-[143px] h-[32px] flex justify-center items-center gap-2">
                                    <span><?php echo e($track['track_title']); ?></span>
                                    <svg class="mp3-icon" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 1.2C0 0.538125 0.538125 0 1.2 0H4.00312C4.32187 0 4.6275 0.125625 4.8525 0.350625L6.84937 2.34938C7.07437 2.57438 7.2 2.88 7.2 3.19875V8.4C7.2 9.06188 6.66187 9.6 6 9.6H1.2C0.538125 9.6 0 9.06188 0 8.4V1.2ZM3.9 1.09688V2.85C3.9 3.09938 4.10062 3.3 4.35 3.3H6.10312L3.9 1.09688ZM4.90875 4.56938C4.73812 4.45125 4.50562 4.4925 4.3875 4.66313C4.26937 4.83375 4.31062 5.06625 4.48125 5.18438C4.92937 5.4975 5.22 6.015 5.22 6.6C5.22 7.185 4.9275 7.70438 4.48125 8.01562C4.31062 8.13375 4.26937 8.36812 4.3875 8.53687C4.50562 8.70563 4.74 8.74875 4.90875 8.63062C5.54812 8.18437 5.97 7.44 5.97 6.6C5.97 5.76 5.55 5.01563 4.90875 4.56938ZM1.5 5.85C1.335 5.85 1.2 5.985 1.2 6.15V7.05C1.2 7.215 1.335 7.35 1.5 7.35H1.95L2.46 7.9875C2.51625 8.05875 2.6025 8.1 2.69438 8.1H2.7C2.865 8.1 3 7.965 3 7.8V5.4C3 5.235 2.865 5.1 2.7 5.1H2.69438C2.6025 5.1 2.51625 5.14125 2.46 5.2125L1.95 5.85H1.5ZM3.9 7.20375C3.9 7.40438 4.09687 7.545 4.25437 7.42125C4.49625 7.22813 4.65 6.93188 4.65 6.6C4.65 6.26813 4.49625 5.97188 4.25437 5.77875C4.09687 5.65313 3.9 5.79563 3.9 5.99625V7.20563V7.20375Z" fill="black"/>
                                    </svg>
                                    <svg class="mp3-icon-active" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 1.2C0 0.538125 0.538125 0 1.2 0H4.00312C4.32187 0 4.6275 0.125625 4.8525 0.350625L6.84937 2.34938C7.07437 2.57438 7.2 2.88 7.2 3.19875V8.4C7.2 9.06188 6.66187 9.6 6 9.6H1.2C0.538125 9.6 0 9.06188 0 8.4V1.2ZM3.9 1.09688V2.85C3.9 3.09938 4.10062 3.3 4.35 3.3H6.10312L3.9 1.09688ZM4.90875 4.56938C4.73812 4.45125 4.50562 4.4925 4.3875 4.66313C4.26937 4.83375 4.31062 5.06625 4.48125 5.18438C4.92937 5.4975 5.22 6.015 5.22 6.6C5.22 7.185 4.9275 7.70438 4.48125 8.01562C4.31062 8.13375 4.26937 8.36812 4.3875 8.53687C4.50562 8.70563 4.74 8.74875 4.90875 8.63062C5.54812 8.18437 5.97 7.44 5.97 6.6C5.97 5.76 5.55 5.01563 4.90875 4.56938ZM1.5 5.85C1.335 5.85 1.2 5.985 1.2 6.15V7.05C1.2 7.215 1.335 7.35 1.5 7.35H1.95L2.46 7.9875C2.51625 8.05875 2.6025 8.1 2.69438 8.1H2.7C2.865 8.1 3 7.965 3 7.8V5.4C3 5.235 2.865 5.1 2.7 5.1H2.69438C2.6025 5.1 2.51625 5.14125 2.46 5.2125L1.95 5.85H1.5ZM3.9 7.20375C3.9 7.40438 4.09687 7.545 4.25437 7.42125C4.49625 7.22813 4.65 6.93188 4.65 6.6C4.65 6.26813 4.49625 5.97188 4.25437 5.77875C4.09687 5.65313 3.9 5.79563 3.9 5.99625V7.20563V7.20375Z" fill="white"/>
                                    </svg>
                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <p class="mx-auto max-w-[320px] l:max-w-full text-center l:text-left text-brand-text text-sm mt-4"><?php echo e($data['music_section_track_list_description']); ?></p>
                </div>

            </div>
            <div class="right-part music-right-part">
                <span id="mp3_h2" class="mp3-h2 block l:hidden mb-[33px] uppercase text-[28px] lgx:text-[48px] text-transparent bg-clip-text bg-gradient-to-r from-[#00000069] via-black to-[#00000087]">
                    <?php echo $data['music_section_title']; ?>

                </span>
                <p class="text-lg text-brand-text w-full block l:hidden">
                    <?php echo $data['music_section_description']; ?>

                </p>
                <div class="mt-5 block l:hidden pb-[33px]">
                    <?php if($data['music_section_headphones']): ?>
                        <img width="93" height="82" src="<?php echo e($data['music_section_headphones']['url']); ?>" alt="<?php echo e($data['music_section_headphones']['alt']); ?>">
                    <?php endif; ?>
                    <div class="font-bold text-lg text-brand-text mt-5">
                        <?php echo $data['music_section_headphones_text']; ?>

                    </div>
                </div>

                <?php if($data['music_section_image']): ?>
                    <img class="track-thumbnail-js rounded-[20px] w-full h-full object-cover lgx:max-w-[730px] lgx:max-h-[855px]" width="730" height="855" loading="lazy" decoding="async"
                         src="<?php echo e($data['music_section_image']['url'] ?? ''); ?>"
                         alt="<?php echo e($data['music_section_image']['alt']); ?>">
                <?php endif; ?>
            </div>

        </div>
        <div class="music-section-cta">
            <a href="<?php echo e($data['music_section_cta_link']); ?>" class="relative no-underline max-w-[330px] h-[56px] mx-auto rounded-full text-white btn-brand flex justify-center items-center gap-2 ">
                <?php echo e($data['music_section_cta_title']); ?>

                <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.8475 8.05031C19.3162 7.58156 19.3162 6.82031 18.8475 6.35156L12.8475 0.351562C12.3788 -0.117188 11.6175 -0.117188 11.1488 0.351562C10.68 0.820313 10.68 1.58156 11.1488 2.05031L15.1013 6.00281H1.2C0.53625 6.00281 0 6.53906 0 7.20281C0 7.86656 0.53625 8.40281 1.2 8.40281H15.1013L11.1488 12.3553C10.68 12.8241 10.68 13.5853 11.1488 14.0541C11.6175 14.5228 12.3788 14.5228 12.8475 14.0541L18.8475 8.05406V8.05031Z" fill="white"/>
                </svg>
            </a>
            <p class="mt-5 l:mt-3 text-sm text-[#0B0F1E] text-center "><?php echo e($data['music_section_under_cta_text']); ?></p>
        </div>
</section>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/home/music-section.blade.php ENDPATH**/ ?>