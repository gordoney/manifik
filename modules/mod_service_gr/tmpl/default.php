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
<div class="mod-service-gr js-mod-service-gr">
    <div class="name js-service-button"><?php echo $params->get('module-name'); ?></div>
    <div class="info js-info">
        <div class="desc">
            <?php echo $params->get('description'); ?>
        </div>
        <div class="service">
            <table>
                <tr>
                    <td><?php echo JText :: _('MOD_SERVICE_GR_SERVICE_NAME'); ?></td>
                    <td><?php echo JText :: _('MOD_SERVICE_GR_SERVICE_WORK'); ?></td>
                    <td><?php echo JText :: _('MOD_SERVICE_GR_SERVICE_COST'); ?></td>
                </tr>
                <?php foreach ($services as $service) { ?>
                    <tr>
                        <td><?php echo $service['service-name']; ?></td>
                        <td><?php echo $service['service-work']; ?></td>
                        <td><?php echo $service['service-cost']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>