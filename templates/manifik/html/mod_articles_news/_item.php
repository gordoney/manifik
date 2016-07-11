<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');
?>
<pre><?php// print_r(json_decode($item->images)); ?></pre>
<div class="item">
    <a href="<?php echo $item->link; ?>" style="background-image: url(<?php echo json_decode($item->images)->image_intro; ?>);">
    
        <div class="info">
            <div class="introtext">
                <?php echo $item->introtext; ?>
            </div>
        
            <?php if ($params->get('item_title')) : ?>

                <<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
                <?php if ($params->get('link_titles') && $item->link != '') : ?>
                    <?php echo $item->title; ?>
                <?php else : ?>
                    <?php echo $item->title; ?>
                <?php endif; ?>
                </<?php echo $item_heading; ?>>

            <?php endif; ?>

            <?php if (!$params->get('intro_only')) : ?>
                <?php echo $item->afterDisplayTitle; ?>
            <?php endif; ?>

            <?php echo $item->beforeDisplayContent; ?>
        </div>
        
        <div class="background-overlay"></div>
    </a>
</div>
