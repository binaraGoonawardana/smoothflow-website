window.sr = ScrollReveal({
    reset: false
});

sr.reveal('.hero h1', {
    delay: 300,
    mobile: false
});

sr.reveal('.hero img', {
    delay: 500,
    mobile: false
});

sr.reveal('.overview h2', {
    delay: 500,
    mobile: false,
    origin: 'left'
});

sr.reveal('.overview p', {
    delay: 600,
    mobile: false,
    origin: 'left'
});

sr.reveal('.overview a', {
    delay: 700,
    mobile: false,
    origin: 'left'
});

sr.reveal('.overview a', {
    delay: 700,
    mobile: false,
    origin: 'left'
});

sr.reveal('.overview .img img', {
    mobile: false,
    origin: "right",
    duration: 900,
    distance: "100px",
    delay: 1000,
    scale: 1
});

sr.reveal('.pencil1', {
    delay: 1100,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.pencil2', {
    delay: 1200,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.pen', {
    delay: 1300,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.keyfeatures h2', {
    delay: 500,
    mobile: false
});

sr.reveal('.block.one', {
    mobile: false,
    easing: 'linear',
    delay: 100,
    origin: 'bottom'
});

sr.reveal('.block.two', {
    mobile: false,
    easing: 'linear',
    delay: 500,
    origin: 'bottom'
});

sr.reveal('.block.three', {
    mobile: false,
    easing: 'linear',
    delay: 1000,
    origin: 'bottom'
});

sr.reveal('.screens .three', {
    mobile: false,
    origin: "bottom",
    distance: "150px",
    duration: 900,
    delay: 1300,
    scale: 1
});

sr.reveal('.screens .two', {
    mobile: false,
    origin: "bottom",
    distance: "150px",
    duration: 900,
    delay: 1700,
    scale: 1
});

sr.reveal('.screens .one', {
    mobile: false,
    origin: "bottom",
    distance: "150px",
    duration: 900,
    delay: 2000,
    scale: 1
});

sr.reveal('.block.two', {
    mobile: false,
    easing: 'linear',
    delay: 500,
    origin: 'bottom'
});

sr.reveal('.circle1', {
    delay: 500,
    mobile: false,
    origin: 'left'
});

sr.reveal('.circle2', {
    delay: 700,
    mobile: false,
    origin: 'left'
});

sr.reveal('.circle3', {
    delay: 900,
    mobile: false,
    origin: 'left'
});

sr.reveal('.circle4', {
    delay: 1100,
    mobile: false,
    origin: 'left'
});

sr.reveal('.how a.link', {
    delay: 800,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.ellipse .title', {
    delay: 1300,
    mobile: false,
    origin: 'left'
});

sr.reveal('.footermenu', {
    delay: 500,
    mobile: false,
    origin: 'left'
});


sr.reveal('.subscribe', {
    delay: 800,
    mobile: false,
    origin: 'right'
});

sr.reveal('.social-links', {
    delay: 1000,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.copyright', {
    delay: 1000,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.email', {
    delay: 500,
    mobile: false,
    origin: 'left'
});

sr.reveal('.phone', {
    delay: 700,
    mobile: false,
    origin: 'right'
});

sr.reveal('.address', {
    delay: 900,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.innertitle h1', {
    delay: 200,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.innertitle p', {
    delay: 400,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.leftblock', {
    delay: 200,
    mobile: false,
    origin: 'left'
});

sr.reveal('.rightblock', {
    delay: 400,
    mobile: false,
    origin: 'right'
});

sr.reveal('.topic', {
    delay: 300,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.footer-cta h3', {    
delay: 300,    
mobile: false,    
origin: 'bottom'
});

sr.reveal('.footer-cta a', {    
delay: 500,    
mobile: false,    
origin: 'bottom'
});

sr.reveal('.contact-form-name', {
    delay: 400,
    mobile: false,
    origin: 'left'
});

sr.reveal('.contact-form-email', {
    delay: 600,
    mobile: false,
    origin: 'right'
});

sr.reveal('.contact-form-subject', {
    delay: 800,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.contact-form-message', {
    delay: 900,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.submit', {
    delay: 1000,
    mobile: false,
    origin: 'bottom'
});

sr.reveal('.path1', {    
delay: 800,    
mobile: false,    
origin: 'top'
});

sr.reveal('.path2', {    
delay: 900,    
mobile: false,    
origin: 'top'
});

sr.reveal('.path3', {    
delay: 1000,    
mobile: false,    
origin: 'top'
});


jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});





