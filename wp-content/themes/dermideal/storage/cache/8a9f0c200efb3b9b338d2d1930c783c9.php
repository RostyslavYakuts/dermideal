

<header class="total-header border-b border-b-brand l:border-b-white total-header-js bg-black h-[84px] fixed top-0 right-0 w-full">
	<div class="container mx-auto w-full flex flex-row justify-between items-center text-white text-sm">
			<div class="header-desktop-data flex items-center">
				<?php echo $__env->make('global.header.logotype',['options'=>$options], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				<?php echo $__env->make('global.header.top-menu',['options'=>$options], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			</div>

			<div class="hidden l:flex header-contects flex-row gap-4 text-white">
				<a href="tel:<?php echo e($options['admin_phone']); ?>"><?php echo e($options['admin_phone']); ?></a>
				<a href="mailto:<?php echo e($options['admin_email']); ?>"><?php echo e($options['admin_email']); ?></a>
			</div>

		<div class="flex gap-x-5 items-center">
			<a aria-label="<?php echo e($options['header_cta_text']); ?>" href="<?php echo e($options['header_cta_link']); ?>" rel="noreferrer noopener" target="_blank"
			   class="top-menu-cta flex justify-center items-center gap-1 bg-brand hover:bg-brand-hover rounded-full w-[130px] xmm:w-[150px] h-[46px]">
				<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.3819 7.91404C14.6028 7.91404 14.8037 7.93413 15.0246 7.95421V3.6959C15.0246 2.35011 13.9199 1.24536 12.5741 1.24536H11.0073V0.642765C11.0073 0.28121 10.7261 0 10.3646 0C10.003 0 9.72182 0.28121 9.72182 0.642765V1.24536H5.30281V0.642765C5.30281 0.28121 5.0216 0 4.66004 0C4.29849 0 4.01728 0.28121 4.01728 0.642765V1.24536H2.47063C1.10475 1.24536 0 2.35011 0 3.6959V12.092C0 13.4378 1.10475 14.5426 2.45054 14.5426H8.4162C8.39612 14.3216 8.37603 14.1207 8.37603 13.8998C8.39611 10.6056 11.0877 7.91404 14.3819 7.91404ZM1.28553 4.96134V3.71598C1.28553 3.07322 1.80778 2.53089 2.47063 2.53089H4.01728V3.13348C4.01728 3.49503 4.29849 3.77624 4.66004 3.77624C5.0216 3.77624 5.30281 3.49503 5.30281 3.13348V2.53089H9.72182V3.13348C9.72182 3.49503 10.003 3.77624 10.3646 3.77624C10.7261 3.77624 11.0073 3.49503 11.0073 3.13348V2.53089H12.5741C13.2169 2.53089 13.7391 3.05313 13.7391 3.71598V4.96134H1.28553Z" fill="white"/>
					<path d="M14.3819 9.19971C11.7907 9.19971 9.68164 11.3088 9.68164 13.8999C9.68164 16.4911 11.7907 18.6001 14.3819 18.6001C16.973 18.6001 19.0821 16.4911 19.0821 13.8999C19.0821 11.3088 16.973 9.19971 14.3819 9.19971ZM16.1495 14.5427H14.3819C14.0203 14.5427 13.7391 14.2615 13.7391 13.8999V11.7105C13.7391 11.349 14.0203 11.0677 14.3819 11.0677C14.7434 11.0677 15.0246 11.349 15.0246 11.7105V13.2572H16.1495C16.511 13.2572 16.7922 13.5384 16.7922 13.8999C16.7922 14.2615 16.511 14.5427 16.1495 14.5427Z" fill="white"/>
				</svg>
				<?php echo e($options['header_cta_text']); ?>

			</a>

			<div class="flex l:hidden hamburger relative hamburger-js cursor-pointer w-[40px] h-[40px]">
				<span class="hamburger-line hamburger-top"></span>
				<span class="hamburger-line hamburger-middle"></span>
				<span class="hamburger-line hamburger-bottom"></span>
			</div>
		</div>



	</div>
</header>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/header/total-header.blade.php ENDPATH**/ ?>