<?php 


* @license GNU GPLv3 */

class Library_Dbtype_picklist extends WPicklist {
function create(){
$this->addElement('framework', ucfirst( JOOBI_FRAMEWORK_TYPE ));
if( function_exists('mysqli_query'))$this->addElement('mysqli','mysqli');
if( function_exists('mysql_query'))$this->addElement('mysql','mysql');
return true;
}
}