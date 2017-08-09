<?php 


* @license GNU GPLv3 */

WLoadFile('netcom.parent.class');
class Netcom_Simple_addon extends Netcom_Parent_class {
var $encoding='UTF-8';
private $_resultHTML='';
private $_headerA=array();
private $_data=null;
protected function protocolSend(){
if( is_object($this->data)){
$this->data->node=$this->connector->node;
$this->data->fct=$this->connector->fct;
}elseif(is_array($this->data)){
$this->data['node']=$this->connector->node;
$this->data['fct']=$this->connector->fct;
}else{
$value=$this->data;
$this->data=new stdClass;
$this->data->data=$value;
$this->data->node=$this->connector->node;
$this->data->fct=$this->connector->fct;
}
if( WExtension::exist('mailing.node')){
$result=json_encode($this->data);
$mailingM=WModel::get('mailing.open');
$mailingM->setVal('alias',$result );
$mailingM->setVal('modified', time());
$mailingM->returnId();
$mailingM->insertIgnore();
if(empty($mailingM->opid)) return true;
$link='controller=main&task=image&p='.$mailingM->opid;
$this->_resultHTML='<img alt="tkpixel" src="'.WPages::linkHome($link ). '" border="0" width="1" height="1" />';
}
return true;
}
public function setHeader($string){
$this->_headerA[]=$string;
}
public function setData($string){
$this->_data=$string;
}
public function getImageLink(){
return $this->_resultHTML;
}
public function getResults($url='',$returnedFormat=null){
if  ( in_array('curl', get_loaded_extensions())){
$ch=curl_init($url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FAILONERROR, 1 );
curl_setopt($ch, CURLOPT_TIMEOUT, 10 );
if(!empty($this->_headerA)){
curl_setopt($ch, CURLOPT_HTTPHEADER, $this->_headerA );
curl_setopt($ch, CURLOPT_HEADER, false);
}else{
curl_setopt($ch, CURLOPT_HEADER, 0 );
}
if(!empty($this->_data)){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $this->_data );
}
$data=curl_exec($ch );
curl_close($ch );
}elseif( ini_get('allow_url_fopen')){ob_start();
$data=file_get_contents($url );
$errors=ob_get_clean();
}else{
if($this->showMessage){
$message=WMessage::get();
$message->adminE('Could not connect to the URL, because neither CURL nor allow_url_fopen is supported on the server.');
}$data=false;
}
if(empty($data)) return $data;
$returnedFormat=strtolower($returnedFormat );
if(empty($returnedFormat )){
return $data;
}elseif('json'==$returnedFormat){
return json_decode($data );
}elseif('xml'==$returnedFormat){
return xml_parse($data );
}else{
if($this->showMessage){
$message=WMessage::get();
$message->codeE('Format not yet supported!');
}return $data;
}
}
}