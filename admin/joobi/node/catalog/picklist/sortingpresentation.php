<?php 


* @license GNU GPLv3 */

class Catalog_Sortingpresentation_picklist extends WPicklist {
function create() { 
	$this->addElement( 'picklist', WText::t('1219769913SSOH') );
	$this->addElement( 'tab', WText::t('1308888990BUDU') );
	return true;
}}