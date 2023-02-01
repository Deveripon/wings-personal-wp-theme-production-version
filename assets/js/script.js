(function ($) {
	$(document).ready(function () {
		$(".slider").owlCarousel({
			items: 1,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			loop: true,
			autoWidh: true,
			/* smartSpeed: 700,
        fluidSpeed: 700, */
			autoplaySpeed: 1000,
			nav: false,
			animateOut: 'animate__fadeOut',
			animateIn: 'animate__fadeIn',
		});
	});
	$(document).ready(function () {
		$(".author-qoutes").owlCarousel({
			items: 1,
			autoplay: true,
			autoplayTimeout: 7000,
			autoplayHoverPause: true,
			loop: true,
			autoWidh: true,
			smartSpeed: 700,
			fluidSpeed: 700,
			autoplaySpeed: 2000,
		});
	});
	$(document).ready(function () {
		$(".award_slider").owlCarousel({
			items: 1,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true,
			loop: true,
			autoWidh: true,
			smartSpeed: 700,
			fluidSpeed: 700,
			autoplaySpeed: 1000,
			nav: true,
			animateOut: 'animate__fadeOut',
			animateIn: 'animate__fadeIn',
		});
	});
})(jQuery)


lightbox.option({
	resizeDuration: 200,
	wrapAround: true,
});