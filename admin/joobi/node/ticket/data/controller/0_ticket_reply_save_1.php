<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_0_ticket_reply_save_1_controller extends WDataController{
var $ctrid=3150;
var $yid='#ticket#ticket_listing_be';
var $app='ticket-reply';
var $task='save';
var $wid='#ticket.node';
var $premium=0;
var $path=1;
var $namekey='ticket-reply.save.1';
var $rolid='#author';
var $trigger=10;
var $name='';
var $description='';
var $actionsA=array(
array(
'ctr_action_id'=>24,
'actid'=>36,
'action'=>'subscription.numberresponses',
'ordering'=>1,
'publish'=>1,
'core'=>1,
'params'=>'',
'namekey'=>'subscription.numberresponses' ),
array(
'ctr_action_id'=>25,
'actid'=>38,
'action'=>'subscription.responsetime',
'ordering'=>1,
'publish'=>1,
'core'=>1,
'params'=>'',
'namekey'=>'subscription.responsetime' )
);
}