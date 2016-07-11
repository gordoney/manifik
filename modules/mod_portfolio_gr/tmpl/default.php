<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$qtyImgs = 6;

?>
<div class="mod_portfolio_gr clearfix">
	<div class="left-block" style="background-image: url(<?php echo $params->get('img-back'); ?>);">
        <div class="info">
            <div class="name">
                <?php echo $params->get('mod-name'); ?>
            </div>
            <div class="text">
                <?php echo $params->get('mod-text'); ?>
            </div>
        </div>
        <div class="background-overlay"></div>
    </div>
    <div class="right-block clearfix">
        <?php foreach ($data as $key => $item) { ?>
            <div class="img<?php if ($key >= $qtyImgs) { echo ' hidden-img'; } ?>" style="background-image: url(<?php echo $item['img-prev']; ?>">
                <a class="background-overlay js-gallery-portfolio" href="<?php echo $item['img-full']; ?>"></a>
            </div>
        <? } ?>
    </div>
</div>