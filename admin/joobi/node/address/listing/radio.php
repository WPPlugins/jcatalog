<?php 


* @license GNU GPLv3 */

class Address_CoreRadio_listing extends WListings_default{
	function create() {
		if (!defined('PADDRESS_DADD')) WPref::get( 'address.node' );
		if (defined('PADDRESS_DADD') && PADDRESS_DADD == $this->value){
			return '<input id="em'.$this->line.'" type="radio" onclick="checkLine(\'em'.$this->line.'\',\''.$this->formName.'\',\'jrow_'.$this->element->lid.'_'.$this->line.'\',\''.$this->element->rowstyle.'\',this.checked, \'this.type\');" name="'.$this->name.'[]" value="'.$this->value.'" CHECKED/>';
		} else {
			return '<input id="em'.$this->line.'" type="radio" onclick="checkLine(\'em'.$this->line.'\',\''.$this->formName.'\',\'jrow_'.$this->element->lid.'_'.$this->line.'\',\''.$this->element->rowstyle.'\',this.checked, \'this.type\');" name="'.$this->name.'[]" value="'.$this->value.'"/>';
		}
	}
}