(function($) {
	var methods = {
		init: function(settings) {
			return this.each(function() {
				var config = {
					slideDur: 5000,
					fadeDur: 800
				};

				if(settings) {
					$.extend(config, settings);
				}

				this.config = config;

				var flag = false,
					$container = $(this),
					slideSelector = '.slide',
					totalSlides,
					activeSlide,
					newSlide,
					$slides = $container.find(slideSelector),
					$slideControls = $container.find('.ctrl');

				function changeSlides(target) {
					if(target == 'next') {
						newSlide = activeSlide + 1;

						if(newSlide > totalSlides - 1) {
							newSlide = 0
						}
					}

					else if(target == 'prev') {
						newSlide = activeSlide - 1;

						if(newSlide < 0) {
							newSlide = totalSlides - 1;
						}
					}

					else {
						newSlide = target;
					}

					animateSlides(activeSlide, newSlide);
				};

				function animateSlides(activeNdx, newNdx) {
					if(flag) {
						return false;
					}

					flag = true;

					$slides.eq(activeNdx).css('z-index', 5);
					$slides.eq(newNdx).css({
						'z-index': 4,
						'opacity': 1
					});

					$slides.eq(activeNdx).animate(
						{
							'opacity': 0
						},
						config.fadeDur,
						function() {
							$slides.eq(activeNdx).removeAttr('style');
							activeSlide = newNdx;
							flag = false;
						}
					);
				};

				totalSlides = $slides.length;

				$slideControls.on('click', function() {
					target = $(this).data('target');

					if(flag) {
						return;
					}

					changeSlides(target);
				});

				$slides.eq(0).css({
					'opacity': 1,
					'z-index': 4
				});
				activeSlide = 0;
			});
		}
	};

	$.fn.fader = function(settings) {
		return methods.init.apply(this, arguments);
	}
})(jQuery);