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
<div class="mod_contacts_page_gr">
    <div class="page-head"><?php echo JText :: _('MOD_CONTACTS_PAGE_GR_NAME'); ?></div>
    
    <div class="blocks clearfix">
        <div class="left-block">
            <div><p><?php echo JText :: _('MOD_CONTACTS_PAGE_GR_PHONE'); ?></p></div>
            <div><?php echo $params->get('phone'); ?></div>
            <div><p><?php echo JText :: _('MOD_CONTACTS_PAGE_GR_MAIL'); ?></p></div>
            <div><?php echo $params->get('mail'); ?></div>
        </div>
        
        <div class="right-block">
            <div><p><?php echo JText :: _('MOD_CONTACTS_PAGE_GR_ADDRESS'); ?></p></div>
            <div><?php echo $params->get('address'); ?></div>
            <div><p><a href="<?php echo $params->get('url'); ?>"><?php echo JText :: _('MOD_CONTACTS_PAGE_GR_URL'); ?></a></p></div>
        </div>
    </div>
</div>