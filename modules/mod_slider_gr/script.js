jQuery(document).ready(function () {
    function modSliderGrHandler () {
		jQuery('.js-slick-slider').slick({  
			dots: false,
			arrows: false,
			speed: 300,
			slidesToShow: 1,
			fade: true,
            draggable: false,
		}); 
        
        jQuery('.js-arrow-right').click(function () {
            jQuery(this).closest('.js-slick-slider').slick('slickNext');
        });
  
        jQuery('.js-arrow-left').click(function () {
            jQuery(this).closest('.js-slick-slider').slick('slickPrev');
        });
    }
    
    modSliderGrHandler ();
});
