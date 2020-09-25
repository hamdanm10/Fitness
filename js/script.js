$(window).bind("resize", function () {
	console.log($(this).width())
	if ($(this).width() <= 991.98) {
		$('nav').removeClass('text-white').addClass('navbar-light bg-light')
	} else {
		$('nav').removeClass('navbar-light bg-light').addClass('text-white')
	}
}).trigger('resize');