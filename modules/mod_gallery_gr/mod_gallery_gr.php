<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_footer
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die; 

require_once dirname(__FILE__).'/helper.php';

$photos = modGalleryGrHelper::getData($params, 'gallery');

require JModuleHelper::getLayoutPath('mod_gallery_gr', $params->get('layout', 'default'));

?>
