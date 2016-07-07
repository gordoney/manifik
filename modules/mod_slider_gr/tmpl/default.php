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
<div class="mod_slider_gr">
	<div class="slick_slider">
		<?php foreach ($slides as $key => $slide) { ?>
			<div class="item">
				<img src="<?php echo $slide['img']; ?>" alt="" style="width: 100%;">
				<?php if ($slide['service']) { ?>
					<div class="wrapper">
						<div class="container">
							<div class="text">
                                <div class="care"><?php echo JText :: _('MOD_SLIDER_GR_CARE'); ?></div>
								<div class="service"><?php echo $slide['service']; ?></div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", modSliderGr.handler(<?php echo $json; ?>));
</script>