import * as $ from 'jquery'

export const AnimateNumbers = () => {
	const $animateNumber = $(".animate-number-js");
	let animationTriggered = false;

	const animateNumber = function(t, e) {
		setTimeout(function() {
			$($animateNumber[t]).text(e);
		}, 100 + 20 * e);
	};

	if ($animateNumber.length) {
		$(window).scroll(function() {
			if (animationTriggered) return;

			const sectionOffset = $animateNumber.offset().top;
			if ($(window).scrollTop() + $(window).height() > sectionOffset + 100) {
				for (let y = 0; y < $animateNumber.length; y++) {
					const statistic = parseInt($($animateNumber[y]).data("statistic"));
					for (let i = 0; i < statistic + 1; i++) {
						animateNumber(y, i);
					}
				}

				$($animateNumber).removeClass("animate-number-js");
				animationTriggered = true;
			}
		});
	}
};
