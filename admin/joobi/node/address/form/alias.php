<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.text' );
class Address_Alias_form extends WForm_text {
function create() {
if ( empty($this->value) ) $this->value = WText::t('1337272977SYNA');
return parent::create();
}
}