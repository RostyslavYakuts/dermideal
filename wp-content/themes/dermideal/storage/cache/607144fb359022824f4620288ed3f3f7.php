
<?php if($options): ?>
	<div class="flex justify-between items-center">
		<div class="max-w-[170px]">
			<img decoding="async" loading="lazy" width="184" height="46" src="<?php echo e($options['logo']['url'] ?? ''); ?>" alt="<?php echo e($options['logo']['alt'] ?? ''); ?>">
		</div>
		<button type="button" class="scroll-to-top-js">
			<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_154_1584)">
					<path d="M13.6687 27.8495L14.6912 27.8503L14.6912 1.96114L22.5624 9.83227L23.2864 9.10821L14.1804 0.0021274L5.07329 9.10724L5.79728 9.83123L13.6674 1.96114L13.6687 27.8495Z" fill="#325956"/>
				</g>
				<defs>
					<clipPath id="clip0_154_1584">
						<rect width="20.0542" height="20.0542" fill="#325956" transform="translate(28.3611 14.1807) rotate(135)"/>
					</clipPath>
				</defs>
			</svg>
		</button>

	</div>


<?php endif; ?>
<?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/global/footer/logotype.blade.php ENDPATH**/ ?>