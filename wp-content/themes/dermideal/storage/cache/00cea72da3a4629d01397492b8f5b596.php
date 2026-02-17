
<div class="w-full flex flex-col gap-8 smx:flex-row justify-between items-center pb-[40px] md:pb-[1px] ">
	<div class="flex flex-row gap-3">
		<a rel="noopener noreferrer" target="_blank" href="<?php echo e($options['admin_facebook']); ?>" class="social-link"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#009CFF"/>
				<g clip-path="url(#clip0_2030_1584)">
					<path d="M29.1842 22.1545C29.1842 22.3833 29.1842 23.1293 29.1842 24.1892H32.8281L32.433 27.4374H29.1842C29.1842 32.4469 29.1842 39.1598 29.1842 39.1598H24.872C24.872 39.1598 24.872 32.5357 24.872 27.4374H22.625V24.1892H24.872C24.872 22.901 24.872 21.985 24.872 21.7299C24.872 20.5148 24.7804 19.9382 25.2968 18.9966C25.8134 18.055 27.2705 16.8104 29.7907 16.8404C32.3116 16.8714 33.3741 17.1139 33.3741 17.1139L32.8281 20.5758C32.8281 20.5758 31.2184 20.1508 30.4283 20.3022C29.6392 20.4538 29.1842 20.9398 29.1842 22.1545Z" fill="#009CFF"/>
				</g>
				<defs>
					<clipPath id="clip0_2030_1584">
						<rect width="24" height="24" fill="white" transform="translate(16 16)"/>
					</clipPath>
				</defs>
			</svg>
		</a>
		<a rel="noopener noreferrer" target="_blank" href="<?php echo e($options['admin_tiktok']); ?>" class="social-link"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#009CFF"/>
				<path d="M38.5 21.8112V25.9478C37.7699 25.8772 36.8212 25.713 35.7717 25.3323C34.4014 24.835 33.3814 24.155 32.7133 23.6285V31.9893L32.6962 31.9632C32.7071 32.1289 32.7133 32.2978 32.7133 32.4682C32.7133 36.6201 29.3014 40 25.1066 40C20.9119 40 17.5 36.6201 17.5 32.4682C17.5 28.3162 20.9119 24.9348 25.1066 24.9348C25.5174 24.9348 25.9205 24.967 26.3142 25.0299V29.1067C25.936 28.9731 25.5298 28.901 25.1066 28.901C23.1209 28.901 21.5041 30.5004 21.5041 32.4682C21.5041 34.4359 23.1209 36.0353 25.1066 36.0353C27.0924 36.0353 28.7092 34.4344 28.7092 32.4682C28.7092 32.3945 28.7076 32.3208 28.703 32.2471V16H32.8776C32.8931 16.35 32.907 16.703 32.9225 17.053C32.9504 17.7421 33.1985 18.4037 33.6309 18.9455C34.1378 19.5825 34.8866 20.3223 35.9376 20.9133C36.9219 21.4643 37.8458 21.7022 38.5 21.8143V21.8112Z" fill="#009CFF"/>
			</svg>
		</a>
	</div>
	<?php echo $__env->make('global.brand-btn',[
    'data'=>[
        'button_link'=>$data['cta_button_url'],
        'button_title'=>'Wezwij Fachowca Teraz',
        'tw_classes'=>'min-w-[315px] lgx:min-w-[375px] opacity-0 scale-50 animate-appearFromCenter delay-100'
                             ]
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/footer-socials.blade.php ENDPATH**/ ?>