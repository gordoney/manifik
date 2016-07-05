<?php 
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die; 

$document = JFactory::getDocument();

/* объ€вл€ем кастомные скрипты */
$document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
$document->addScript('//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/slick.min.js');
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/custom.js');

/* объ€вл€ем кастомные стили */
$document->addStyleSheet('//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/slick.css');
$document->addStyleSheet('https://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=cyrillic');
//$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/style.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />

    <link rel="stylesheet/less" type="text/css" href="/templates/manifik/css/style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script>    
    
    <script src='https://www.google.com/recaptcha/api.js'></script>	
</head>
<?php 
/* ѕолучаем класс страницы */
$app = JFactory::getApplication();
$menu = $app->getMenu();
$activeMenu = $menu->getActive(); 
$pageClass = $activeMenu->params['pageclass_sfx'];
?>
<body class="<?php echo $pageClass; ?>">
   
	
    <div id="header" class="header">
        <div class="container clearfix">
            <div class="header-left">
                <div class="logo">
                    <jdoc:include type="modules" name="logo" style="none" />
                </div>
                <jdoc:include type="modules" name="header-left" style="none" />
            <div class="header-center">
                <jdoc:include type="modules" name="header-center" style="none" />
            </div>
            <div class="header-right">
                <jdoc:include type="modules" name="header-right" style="none" />
            </div>
		</div>	
	</div>

	
	<div id="content">
		<div class="container clearfix">

		</div>
	</div>	
	
    <div id="footer">
        <div class="container clearfix">

		</div>	
	</div>		

</body>
</html>