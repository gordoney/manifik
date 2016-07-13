jQuery(document).ready(function() {

    function portfolioHandler () {
        jQuery('.js-gallery-portfolio').colorbox({rel:'portfolio'});
        
        /* корректируем сразу левый блок */
        var windowWidth = jQuery(window).width();
        var containerWidth = 1210; //размер контейнера минус скролл
        jQuery('.mod_portfolio_gr .info').css('margin-left', (windowWidth - containerWidth)/2);   
        
        /* и только затем правый */
        var leftHeight = jQuery('.mod_portfolio_gr .left-block').outerHeight();
        jQuery('.mod_portfolio_gr .right-block').css('height', leftHeight);   
    }
    
    function serviceHandler () {
        jQuery('.js-service-button').click(function () {
            jQuery(this).siblings('.js-info').slideToggle(400);
            
            if (jQuery(this).closest('.js-mod-service-gr').hasClass('js-service-open')) {
                jQuery(this).closest('.js-mod-service-gr').removeClass('js-service-open');
            } else {
                jQuery(this).closest('.js-mod-service-gr').addClass('js-service-open');
            }
            
            if (jQuery(this).hasClass('js-name')) {
                jQuery(this).removeClass('js-name');
            } else {
                jQuery(this).addClass('js-name');
            }            
        });  
    }    
    
    portfolioHandler ();
    serviceHandler ();
});