
<div id="warning_popup" class="w-full hidden fixed left-0 bottom-[40px] z-20">
	<div class="container w-full mx-auto">

		<div class="warning-popup relative p-[32px] rounded-2xl w-full  bg-white">
			<input type="hidden" name="ip" value="<?php echo e($_SERVER['REMOTE_ADDR']); ?>">
			<button class="close-popup-js absolute top-6 right-6">
				<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11.1501 0.75L0.75 11.1501M0.75 0.75L11.1501 11.1501" stroke="#010D21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
			<div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4">
				<div class="flex flex-col gap-4 max-w-[730px]">
					<div class="flex flex-row gap-2 items-center">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_287_2166)">
								<path d="M15.208 18.4166C15.9674 18.4166 16.583 17.801 16.583 17.0416C16.583 16.2822 15.9674 15.6666 15.208 15.6666C14.4486 15.6666 13.833 16.2822 13.833 17.0416C13.833 17.801 14.4486 18.4166 15.208 18.4166Z" fill="#0B57D8"/>
								<path d="M7.875 17.4999C8.63439 17.4999 9.25 16.8843 9.25 16.1249C9.25 15.3655 8.63439 14.7499 7.875 14.7499C7.11561 14.7499 6.5 15.3655 6.5 16.1249C6.5 16.8843 7.11561 17.4999 7.875 17.4999Z" fill="#0B57D8"/>
								<path d="M6.95801 11.0834C7.7174 11.0834 8.33301 10.4678 8.33301 9.70837C8.33301 8.94898 7.7174 8.33337 6.95801 8.33337C6.19862 8.33337 5.58301 8.94898 5.58301 9.70837C5.58301 10.4678 6.19862 11.0834 6.95801 11.0834Z" fill="#0B57D8"/>
								<path d="M12.459 12.9166C13.2184 12.9166 13.834 12.301 13.834 11.5416C13.834 10.7822 13.2184 10.1666 12.459 10.1666C11.6996 10.1666 11.084 10.7822 11.084 11.5416C11.084 12.301 11.6996 12.9166 12.459 12.9166Z" fill="#0B57D8"/>
								<path d="M23 12.0001C21.5413 12.0001 20.1424 11.4206 19.1109 10.3891C18.0795 9.3577 17.5 7.95875 17.5 6.50006C16.0413 6.50006 14.6424 5.9206 13.6109 4.88915C12.5795 3.8577 12 2.45875 12 1.00006C9.82441 1.00006 7.69767 1.6452 5.88873 2.8539C4.07979 4.06259 2.66989 5.78056 1.83733 7.79054C1.00477 9.80053 0.786929 12.0123 1.21137 14.1461C1.6358 16.2798 2.68345 18.2399 4.22183 19.7782C5.76021 21.3166 7.72022 22.3643 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3302 19.9375 19.9203 21.1462 18.1113C22.3549 16.3024 23 14.1757 23 12.0001Z" stroke="#0B57D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</g>
							<defs>
								<clipPath id="clip0_287_2166">
									<rect width="24" height="24" fill="white"/>
								</clipPath>
							</defs>
						</svg>

						<span class="text-lg lgx:text-[24px] font-semibold text-brand-header "><?php echo $options['cookies']['cookies_title']; ?></span>
					</div>
					<div class="flex items-center justify-between gap-2">
						<p><?php echo $options['cookies']['cookies_description']; ?></p>

					</div>
				</div>
				<div class="flex flex-col xs:flex-row xs:items-center gap-2">
					<button class="bg-brand-brand text-white hover:bg-white hover:text-brand flex flex-row gap-2 justify-center items-center btn no-underline py-[14px] px-[40px] text-center font-semibold
    cursor-pointer transition rounded-full border-2 border-brand btn-brand max-w-[244px] accept-cookies-js">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.533 16.7403C18.533 16.7403 17.3743 17.8783 17.0904 18.2119C16.6278 18.7055 16.0828 18.9386 15.3684 18.9386C15.2997 18.9386 15.2264 18.9386 15.1577 18.934C13.7975 18.8472 12.5336 18.317 11.5856 17.8646C8.99345 16.6123 6.71734 14.8344 4.82592 12.5812C3.26424 10.7028 2.22007 8.9661 1.52854 7.1014C1.10263 5.96339 0.946916 5.07674 1.01561 4.24037C1.06141 3.70564 1.26749 3.26232 1.64761 2.88298L3.20929 1.32449C3.43369 1.11426 3.67184 1 3.9054 1C4.19392 1 4.42749 1.17367 4.57404 1.31992C4.57862 1.32449 4.5832 1.32906 4.58778 1.33364C4.86714 1.59414 5.13276 1.86379 5.41212 2.15173C5.55409 2.29798 5.70064 2.44423 5.84719 2.59505L7.09745 3.84275C7.5829 4.32721 7.5829 4.7751 7.09745 5.25956C6.96464 5.3921 6.83641 5.52464 6.7036 5.65261C6.3189 6.04565 6.6211 5.74407 6.22267 6.10056C6.21351 6.1097 6.20435 6.11427 6.19977 6.12341C5.80591 6.51646 5.87919 6.90037 5.96162 7.16088C5.9662 7.17459 5.97078 7.1883 5.97536 7.20201C6.30052 7.98811 6.75849 8.7285 7.45461 9.61058L7.45919 9.61515C8.72318 11.1691 10.0559 12.3802 11.526 13.308C11.7137 13.4268 11.9061 13.5228 12.0893 13.6142C12.2541 13.6965 12.4098 13.7742 12.5426 13.8564C12.561 13.8656 12.5793 13.8793 12.5976 13.8884C12.7533 13.9661 12.8999 14.0027 13.051 14.0027C13.4311 14.0027 13.6693 13.765 13.7471 13.6873L14.6448 12.7915C14.8005 12.6361 15.0478 12.4487 15.3363 12.4487C15.6203 12.4487 15.8538 12.6269 15.9958 12.7823C16.0004 12.7869 16.0004 12.7869 16.005 12.7915L18.5284 15.3097C19.0001 15.7759 18.533 16.7403 18.533 16.7403Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg> Accept cookies
					</button>
				</div>
			</div>
		</div>

		</div>

</div>
<?php /**PATH /var/www/html/wp-content/themes/zloty-hidraulik/App/Views/global/footer/cookies-warning.blade.php ENDPATH**/ ?>