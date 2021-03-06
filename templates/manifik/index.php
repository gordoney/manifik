<?php 
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die; 

$document = JFactory::getDocument();

/* объявляем кастомные скрипты */
$document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/bootstrap.min.js');
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/jquery.colorbox-min.js');
$document->addScript($this->baseurl.'/templates/'.$this->template.'/js/custom.js');

/* объявляем кастомные стили */
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/reset.css');
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/bootstrap.min.css');
$document->addStyleSheet('https://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=cyrillic');
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/colorbox.css');
$document->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/style.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>

    <!--<link rel="stylesheet/less" type="text/css" href="/templates/manifik/css/style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script> -->

	<jdoc:include type="head" />
   
    <meta name="viewport" content="width=1280px">
</head>
<?php 
/* Получаем класс страницы */
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

    <div class="wrapper">
    
        <div class="background-tools-block">
            <div class="background-tools-1 background-tools"></div>  
            <div class="background-tools-2 background-tools"></div> 
            <div class="background-tools-3 background-tools"></div> 
            <div class="background-tools-4 background-tools"></div> 
        </div>        
    
        <div class="inner-wrapper">
            <?php if ($this->countModules('before-content-without-container')) { ?>
                <div id="before-content-without-container" class="before-content">
                    <jdoc:include type="modules" name="before-content-without-container" style="none" />
                </div>
            <?php } ?>
            
            <?php if ($this->countModules('before-content-with-container')) { ?>
                <div id="before-content-with-container" class="before-content-with-container">
                    <div class="container">
                        <jdoc:include type="modules" name="before-content-with-container" style="none" />
                    </div>
                </div>
            <?php } ?>    
            
            <div id="content">
                <div class="container clearfix">
                    <div class="inner-container">
                        <jdoc:include type="message" />
                        <?php if ($this->countModules('content')) { ?>
                            <jdoc:include type="modules" name="content" style="none" />
                        <?php } else { ?>
                            <jdoc:include type="component" />
                            <jdoc:include type="modules" name="after-component" style="none" />
                        <?php } ?>
                    </div>
                </div>
            </div>	
            
            <?php if ($this->countModules('after-content-with-container')) { ?>
                <div id="after-content-with-container" class="after-content-with-container">
                    <div class="container">
                        <jdoc:include type="modules" name="after-content-with-container" style="none" />
                    </div>
                </div>
            <?php } ?>
            
            <?php if ($this->countModules('after-content-without-container')) { ?>
                <div id="after-content-without-container" class="after-content-without-container">
                    <div class="container">
                        <jdoc:include type="modules" name="social" style="none" />
                    </div>
                    <jdoc:include type="modules" name="after-content-without-container" style="none" />
                </div>
            <?php } ?>
        
        </div>
	</div>
    
    <div id="footer" class="footer">
        <div class="container clearfix">
            <div class="footer-left">
                <div class="logo">
                    <jdoc:include type="modules" name="logo" style="none" />
                </div>
                <jdoc:include type="modules" name="footer-left" style="none" />
            </div>
            <div class="footer-center">
                <div class="footer-center-top">
                    <div><jdoc:include type="modules" name="footer-center-top" style="none" /></div>
                </div>
                <div class="footer-center-bottom">
                    <jdoc:include type="modules" name="footer-center-bottom" style="none" />
                </div>
            </div>
            <div class="footer-right">
                <jdoc:include type="modules" name="footer-right" style="none" />
                <div class="medialine">
					<?php if(JURI::current() !== JURI::base()){?>
						<span>Разработка сайта - </span><a target="_blank" rel="nofollow" href="http://www.medialine.by/">Media Line</a>
					<?php } else { ?>	
						<span>Разработка сайта - </span><a target="_blank" href="http://www.medialine.by/">Media Line</a>
					<?php } ?>
				</div>
            </div>
		</div>	
	</div>		

</body>
</html>