<?php 


* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreRepmodified_form extends WForms_default {
function create(){
	$this->content = WApplication::date( WTools::dateFormat( 'day-date-time' ), time() );
		return true;
}}