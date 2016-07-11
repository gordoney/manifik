jQuery(document).ready(function() {

    function portfolioHandler () {
        jQuery('.js-gallery-portfolio').colorbox({rel:'portfolio'});
        
        /* ������������ ����� ����� ���� */
        var windowWidth = jQuery(window).width();
        var containerWidth = 1210; //������ ���������� ����� ������
        jQuery('.mod_portfolio_gr .info').css('margin-left', (windowWidth - containerWidth)/2);   
        
        /* � ������ ����� ������ */
        var leftHeight = jQuery('.mod_portfolio_gr .left-block').outerHeight();
        jQuery('.mod_portfolio_gr .right-block').css('height', leftHeight);   
    }
    
    portfolioHandler ();
});