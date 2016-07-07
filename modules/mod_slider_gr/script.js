var modSliderGr = {
    handler: function(json) {
		jQuery('.slick_slider').slick({  
			dots: false,
			arrows: false,
			speed: 300,
			slidesToShow: 1,
			fade: true,
            draggable: false,
		}); 
    }
};