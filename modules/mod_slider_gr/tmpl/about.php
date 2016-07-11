<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="mod-slider-gr about">

    <div class="container">
        <?php jimport( 'joomla.application.module.helper' );
        $modules = JModuleHelper::getModules('inside-about-us'); 
        $attribs['style'] = 'xhtml';

        foreach($modules as $module){ 
            echo JModuleHelper::renderModule($module, $attribs);
        } ?>
    </div>

	<div class="slick-slider js-slick-slider">
		<?php foreach ($slides as $key => $slide) { ?>
        
			<div class="item">
				<div class="wrapper">
					<div class="container">
                        <div class="name">
                            <?php echo $slide['slide-name']; ?>
                        </div>
                        <div class="info clearfix">
                            <div class="text">
                                <?php echo $slide['slide-text']; ?>
                            </div>
                            <div class="img clearfix">
                                <div class="img-left"><img src="<?php echo $slide['img-small-1']; ?>" alt=""></div>
                                <div class="img-right">
                                   <div class="img-right-top"><img src="<?php echo $slide['img-small-2']; ?>" alt=""></div>
                                   <div class="img-right-bottom"><img src="<?php echo $slide['img-small-3']; ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		<?php } ?>   
	</div>
</div>