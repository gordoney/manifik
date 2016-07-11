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
    
    portfolioHandler ();
});