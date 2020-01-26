$('.carousel').carousel();

$(document).ready(function(){
	console.log("DOM ready");

	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		navText: ['&#60;','&#62;'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})


});