<?php 


* @license GNU GPLv3 */

WView::includeElement( 'form.text' );
class Address_Getname_form extends WForm_text {
function create() {
  $this->value = WUser::get('name');
  return parent::create();
 }}