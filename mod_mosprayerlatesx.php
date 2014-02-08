<?php
/**
* @version
* @package MosPrayerLatestX - COAddOns for Mambo & Jommla
* @copyright (C) 2009 ongetc.com
* @info ongetc@ongetc.com http://ongetc.com
* @license GNU/GPL http://ongetc.com/gpl.html.
*/
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
include_once($GLOBALS['mosConfig_absolute_path'] .'/administrator/components/com_mosprayer/mosprayer.main.class.php');
global $mosprayer;
if (!isset($mosprayer)) $mosprayer = new MosprayerMain();
echo $mosprayer->showLatestX($params);
?>