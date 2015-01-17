$(function() {
	var mainMenu = $(".sf-menu");

	mainMenu.clone().removeClass().addClass('rwd-menu').prependTo('.navbar-container nav')

	mainMenu.superfish();

	$("#rwd-trigger").on('click', function(event) {
		event.preventDefault();
		
		$(".rwd-menu").slideToggle();
	});

	$("#demo-animations").find(".demo-col").on('click', function(event) {
		// event.preventDefault();
		var $this = $(this);

		$this.addClass("animated " + $this.text());
	});

	$(".tabs-links a").on('click', function(event) {
		event.preventDefault();
		
		var newTab = $(this).attr("href");

		$(newTab).show().siblings().hide();

		$(this).parent('li').addClass('active').siblings().removeClass('active');
	});


	$(".accordion-element-title").on('click', function(event) {
		event.preventDefault();
		
		var targetAccordion = $(this).attr("href");

		$(".accordion-element-title").removeClass('active');
		$(".accordion-element-content").hide();

		$(this).addClass('active');
		$( targetAccordion ).show();
	});
});