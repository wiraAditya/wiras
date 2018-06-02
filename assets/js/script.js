///////////////////////////
// On Scroll
$(window).on('scroll', function() {
	var wScroll = $(this).scrollTop();
	// Fixed nav
	wScroll > 1 ? $('nav').addClass('navbar-bg-dark') : $('nav').removeClass('navbar-bg-dark');
	// Back To Top Appear
	// wScroll > 700 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
});