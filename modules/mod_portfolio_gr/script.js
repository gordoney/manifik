jQuery(document).ready(function () {
    function modPortfolioGrHandler () {
    
        jQuery('.mod_portfolio_gr').each(function () {
            
                jQuery(this).find('.js-slick-slider').slick({  
                    dots: false,
                    arrows: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    draggable: false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                });                
                
        });
    }
    
    modPortfolioGrHandler ();
});
