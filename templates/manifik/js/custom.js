jQuery(document).ready(function() {
    
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
    
    serviceHandler ();
});

jQuery(window).load(function() {

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
    
    function setFooterBottom() {
		var heightHeader = jQuery('#header').outerHeight();
        
        if (jQuery('div').is('#before_content_without_container')) {
            var heightBeforeWithout = jQuery('#before_content_without_container').outerHeight();
        } else {
            var heightBeforeWithout = 0;
        }

        if (jQuery('div').is('#before_content_with_container')) {
            var heightBefore = jQuery('#before_content').outerHeight();;
        } else {
            var heightBefore = 0;
        }

        if (jQuery('div').is('#after_content_with_container')) {
            var heightAfter = jQuery('#after_content_with_container').outerHeight();
        } else {
            var heightAfter = 0;
        }
        
        if (jQuery('div').is('#after_content_without_container')) {
            var heightAfterWithout = jQuery('#after_content_without_container').outerHeight();
        } else {
            var heightAfterWithout = 0;
        }
        
        var heightContent = jQuery('#content').outerHeight();
        var heightFooter = jQuery('#footer').outerHeight();
        
        var heightWindow = jQuery(window).height();
        if (heightWindow > heightHeader + heightBeforeWithout + heightBefore + heightAfter + heightContent + heightFooter + heightAfterWithout) {
            jQuery('.inner-container').css('height', heightWindow-heightHeader-heightBeforeWithout-heightBefore-heightAfter-heightFooter-heightAfterWithout);
        }
	}     

    portfolioHandler ();    
    setFooterBottom();  
});