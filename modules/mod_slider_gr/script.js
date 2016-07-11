jQuery(document).ready(function () {
    function modSliderGrHandler () {
    
        jQuery('.mod-slider-gr').each(function () {
            
            // определяем тип слайдера
            var sliderType = 'default';
            if (jQuery(this).hasClass('about')) {
                sliderType = 'about';
            }

            if (sliderType == 'default') {
            
                jQuery(this).find('.js-slick-slider').slick({  
                    dots: false,
                    arrows: false,
                    speed: 300,
                    slidesToShow: 1,
                    fade: true,
                    draggable: false,
                    focusOnSelect: true,
                }); 
                
                jQuery(this).find('.js-arrow-right').click(function () {
                    jQuery(this).closest('.js-slick-slider').slick('slickNext');
                });
          
                jQuery(this).find('.js-arrow-left').click(function () {
                    jQuery(this).closest('.js-slick-slider').slick('slickPrev');
                });                  
                
            } else if (sliderType == 'about') {
            
                jQuery(this).find('.js-slick-slider').slick({  
                    dots: false,
                    arrows: true,
                    speed: 300,
                    slidesToShow: 1,
                    fade: true,
                    draggable: false,
                    focusOnSelect: true,
                    prevArrow: '<div class="arrows arrow-left"><i class="icon-right-arrow"></i></div>',
                    nextArrow: '<div class="arrows arrow-right js-arrow-right"><i class="icon-right-arrow"></i></div>',
                });  
                
            }
            
        });
    }
    
    modSliderGrHandler ();
});
