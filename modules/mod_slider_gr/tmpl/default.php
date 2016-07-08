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
<div class="mod-slider-gr default">
	<div class="slick-slider js-slick-slider">
		<?php foreach ($slides as $key => $slide) { ?>
            
            <?php if ($key == 0) {
                $prevSlide = count($slides)-1;
            } else { 
                $prevSlide = $key-1;
            }
            
            if ($key == count($slides)-1) {
                $nextSlide = 0;
            } else { 
                $nextSlide = $key+1;
            } ?>
        
			<div class="item">
				<img src="<?php echo $slide['img']; ?>" alt="" style="width: 100%;">
				<div class="wrapper">
					<div class="container">
                        <div class="arrows arrow-left js-arrow-left"><i class="icon-right-arrow"></i><?php echo $slides[$prevSlide]['service']; ?></div>
                        <div class="text">
                            <div class="care"><?php echo JText :: _('MOD_SLIDER_GR_CARE'); ?></div>
							<div class="service"><?php echo $slide['service']; ?></div>
                            <div class="readmore-block">
                            <div class="readmore"><i class="icon-right-arrow"></i></div>
                            <div class="readmore-text"><?php echo JText :: _('MOD_SLIDER_GR_READMORE'); ?></div>
                            </div>
                        </div>
                        <div class="arrows arrow-right js-arrow-right"><?php echo $slides[$nextSlide]['service']; ?><i class="icon-right-arrow"></i></div>
					</div>
				</div>
                <div class="background-overlay"></div>
			</div>
		<?php } ?>
	</div>
</div>