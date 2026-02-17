import * as $ from 'jquery';

export const hamburger = () => {
	const $hamburger = $('.hamburger-js');
	const $menu = $('.main-menu-js');
	const $body = $('body');

	// Toggle menu on hamburger click
	$hamburger.on('click', function (e) {
		e.stopPropagation();
		const isClosing = $menu.is(':visible');
		$(this).toggleClass('opened');
		if (isClosing) {
			$menu.slideUp(200, () => {
				$body.removeClass('shadow');
			});
		} else {
			$menu.slideDown(200);
			$body.addClass('shadow');
		}
	});
};
