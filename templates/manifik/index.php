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
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/bootstrap.min.js');
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/custom.js');

/* объ€вл€ем кастомные стили */
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/reset.css');
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/bootstrap.min.css');
$document->addStyleSheet('https://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=cyrillic');
//$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/style.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />

    <link rel="stylesheet/less" type="text/css" href="/templates/manifik/css/style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script>    
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
            </div>
            <div class="header-center">
                <div class="header-center-top clearfix">
                    <jdoc:include type="modules" name="header-center-top" style="none" />
                </div>
                <div class="header-center-bottom">
                    <jdoc:include type="modules" name="header-center-bottom" style="none" />
                </div>
            </div>
            <div class="header-right">
                <div class="header-right-top clearfix">
                    <jdoc:include type="modules" name="header-right-top" style="none" />
                </div>
                <div class="header-right-bottom">
                    <jdoc:include type="modules" name="header-right-bottom" style="none" />
                </div>
            </div>
		</div>	
	</div>

    <div id="menu" class="menu">
        <jdoc:include type="modules" name="menu" style="none" />
	</div>

    <?php if ($this->countModules('before-content')) { ?>
        <div id="before-content" class="before-content">
            <jdoc:include type="modules" name="before-content" style="none" />
        </div>
    <?php } ?>
	
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