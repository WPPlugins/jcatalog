<?php 


* @license GNU GPLv3 */

class Files_Amazon_picklist extends WPicklist {
function create() {
	$this->addElement( 'standard', WText::t('1206732405TIXC') );
	$this->addElement( 'reduced', WText::t('1349726929FOOL') );
	return true;
}}