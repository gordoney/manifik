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

    function backgroundHandler () {
        var windowWidth = jQuery(window).width();
        var contentWidth = jQuery('.inner-container').outerWidth();
        var halfSideWidth = (windowWidth - contentWidth)/2;
        
        jQuery('.background-tools').each(function (key) {
        console.log(jQuery(this).outerWidth());
            if (key + 1 <= jQuery('.background-tools').length/2) {
                jQuery(this).css('left', halfSideWidth-jQuery(this).outerWidth());
            } else {
                jQuery(this).css('right', halfSideWidth-jQuery(this).outerWidth());
            }
        });
        
        
    }
    
    serviceHandler ();
    backgroundHandler ();
});

jQuery(window).load(function() {

    function portfolioHandler () {
        jQuery('.js-gallery-portfolio').colorbox({rel:'portfolio'});
        
        //корректируем сразу левый блок 
        var windowWidth = jQuery(window).width();
        var containerWidth = 1210; //размер контейнера минус скролл
        jQuery('.mod_portfolio_gr .info').css('margin-left', (windowWidth - containerWidth)/2);   
        
        // затем выставляем высоту слайда
        var leftHeight = jQuery('.mod_portfolio_gr .left-block').outerHeight();
        jQuery('.mod_portfolio_gr .item').css('height', leftHeight);   
    }
    
    function setFooterBottom() {
    
        //на станицах с картой не меняем высоту
        if (jQuery('.mod-map-gr').hasClass('modal-off')) {
            return true;
        } 
    
        var heightContainer = jQuery('.inner-container').outerHeight();
    
		var heightHeader = jQuery('#header').outerHeight();

        //определяем высоту всех блоков
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
        
        //затем выставляем высоту контента
        if (heightWindow > heightHeader + heightBeforeWithout + heightBefore + heightAfter + heightContent + heightFooter + heightAfterWithout) {
            var setHeight = heightWindow-heightHeader-heightBeforeWithout-heightBefore-heightAfter-heightFooter-heightAfterWithout;
            //баг фикс 
            if (setHeight > heightContainer) {
                jQuery('.inner-container').css('height', heightWindow-heightHeader-heightBeforeWithout-heightBefore-heightAfter-heightFooter-heightAfterWithout);
            }
        }
	}     

    portfolioHandler ();    
    setFooterBottom();  
});