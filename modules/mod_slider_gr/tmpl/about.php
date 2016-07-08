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
	<div class="slick-slider js-slick-slider">
		<?php foreach ($slides as $key => $slide) { ?>
        
			<div class="item">
                <div class="arrows arrow-left js-arrow-left"><i class="icon-right-arrow"></i></div>
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
                                <div class="img-left"></div>
                                <div class="img-right">
                                   <div class="img-right-top"></div>
                                   <div class="img-right-bottom"></div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
                <div class="arrows arrow-right js-arrow-right"><i class="icon-right-arrow"></i></div>
			</div>
		<?php } ?>
	</div>
</div>