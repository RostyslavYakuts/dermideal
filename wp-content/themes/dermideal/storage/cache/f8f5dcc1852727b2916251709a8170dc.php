
<div id="warning_popup" class="cookies-warning w-full hidden fixed left-0 bottom-[40px]">
	<div class="container w-full mx-auto">

		<div class="warning-popup relative p-[32px] rounded-3xl w-full  bg-white">
			<input type="hidden" name="ip" value="<?php echo e($_SERVER['REMOTE_ADDR']); ?>">
			<button  aria-label="Close popup" class="close-popup-js absolute top-6 right-6">
				<svg  aria-hidden="true" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11.1501 0.75L0.75 11.1501M0.75 0.75L11.1501 11.1501" stroke="#010D21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
			<div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4">
				<div class="flex flex-col gap-4 max-w-[730px]">
					<div class="flex flex-row gap-2 items-center">

						<span class="text-lg lgx:text-[24px] font-bold text-brand-header "><?php echo $options['cookies']['cookies_title']; ?></span>
					</div>
					<div class="flex items-center justify-between gap-2">
						<p class="text-[#7E838C] text-lg"><?php echo $options['cookies']['cookies_description']; ?></p>

					</div>
				</div>
				<div class="flex flex-col xs:flex-row xs:items-center gap-2">
					<button class="relative text-white flex flex-row gap-2 justify-center items-center btn no-underline py-[12px] px-[24px] text-center font-semibold
    cursor-pointer transition rounded-full btn-brand max-w-[291px] accept-cookies-js">
						 Accept cookies
					</button>
				</div>
			</div>
		</div>

		</div>

</div>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/footer/cookies-warning.blade.php ENDPATH**/ ?>