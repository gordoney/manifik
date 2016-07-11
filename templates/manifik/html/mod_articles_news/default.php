<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="newsflash<?php echo $moduleclass_sfx; ?> mod_sale clearfix">
    <div class="mod-name">
        <?php echo JText :: _('MOD_SALE_NAME'); ?>
    </div>
    <div class="items">
        <?php foreach ($list as $item) : ?>
            <?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
        <?php endforeach; ?>
    </div>
</div>
