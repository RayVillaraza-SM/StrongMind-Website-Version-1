// NAV:SELECTED
$('#nav ul li').click(function () {
	$(this).addClass('selected').siblings().removeClass('selected');
});

// HOME | RESET
$('.show-about-us').click(function() {
	$('#list-of-services, #strongmind-portfolio').slideUp(500,'swing');
	$('#about-us').slideDown(500,'swing');
	$('html, body').animate({
		scrollTop: $('#nav').offset().top
	}, 750);
	$('#nav ul li:nth-child(3)').addClass('selected').siblings().removeClass('selected');
});

// LIST OF SERVICES
$('.show-list-of-services').click(function() {
	$('#about-us, #strongmind-portfolio').slideUp(500, 'swing');
	$('#list-of-services').slideDown(750,'swing');
	$('html, body').animate({
		scrollTop: $('#nav').offset().top
	}, 750,'swing');
	$('#nav ul li:nth-child(2)').addClass('selected').siblings().removeClass('selected');
});

// PORTFOLIO
$('.show-portfolio').click(function() {
	$('#list-of-services, #about-us').slideUp(500,'swing');
	$('#strongmind-portfolio').slideDown(750,'swing');
	$('html, body').animate({
		scrollTop: $('#nav').offset().top
	}, 750,'swing');
});

// CONTACT US
$('.show-contact-us').click(function() {
	$('html, body').animate({
		scrollTop: $('footer').offset().top
	}, 750,'swing');
});

// CAROUSEL
$('.carousel').carousel({interval:4000});

// COLOR SWITCHER
$(function(){ 
	var styleIds = ["color_blue", "color_lime", "color_orange", "color_pink"];
	document.body.id = styleIds[ Math.floor(Math.random()*styleIds.length) ];
});