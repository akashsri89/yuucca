<?php 
/**
	Admin Page Framework v3.7.11 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/yucca-shop>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class yucca_shopAdminPageFramework_MetaBox_Page extends yucca_shopAdminPageFramework_PageMetaBox {
    function __construct($sMetaBoxID, $sTitle, $asPageSlugs = array(), $sContext = 'normal', $sPriority = 'default', $sCapability = 'manage_options', $sTextDomain = 'yucca-shop') {
        trigger_error(sprintf(__('The class <code>%1$s</code> is deprecated. Use <code>%2$s</code> instead.', 'yucca-shop'), __CLASS__, 'yucca_shopAdminPageFramework_PageMetaBox'), E_USER_NOTICE);
        parent::__construct($sMetaBoxID, $sTitle, $asPageSlugs, $sContext, $sPriority, $sCapability, $sTextDomain);
    }
}
