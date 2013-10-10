<?php

class Codefuel_Pages_Helper_Data extends Mage_Core_Helper_Abstract {
	
	function addclass( $sArea = '' ) {
		return Mage::getStoreConfig('codefuel_pages/classes/' . $sArea); 
	}
	
}