<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_vendor_products_widget_view extends WDataView{
var $yid=2075;
var $wizard=1;
var $wid='#item.node';
var $type=2;
var $params='maxitem=1000
hdata=uid
graphtype=';
var $namekey='item_vendor_products_widget';
var $frontend=1;
var $filters=1;
var $sid='#item';
var $form=1;
var $icon='item';
var $rolid='#allusers';
var $alias='Product Listing of Vendors in Widget';
var $useredit=1;
var $name='1337906340SAJU';
var $description='1470801968BRUS';
var $wname='1206961998KTYT';
var $wdescription='1484063508RQXD';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>8585,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_products_widget_',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.butedit',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=option=com_jmarket&controller=item&task=edit(eid=pid)
poph=600
popw=800',
'ordering'=>3,
'map'=>'pid',
'lid'=>13705,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_products_widget_producttrans_edit',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732361LXFE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.image',
'sid'=>'#item.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'thumb=1
dftimg=productx
imgfull=1
imgmaxwidth=100px
imgmaxheight=100px
width=100px',
'ordering'=>4,
'map'=>'filid',
'lid'=>11853,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_images_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961936HCWM',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=catalog&task=show(eid=pid)',
'ordering'=>5,
'map'=>'name',
'lid'=>8586,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_producttrans_name_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>6,
'map'=>'name',
'lid'=>8587,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_producttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_products_widget_producttrans_name_1',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>8,
'map'=>'introduction',
'lid'=>8588,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_producttrans_introduction',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_products_widget_producttrans_name_1',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.moneyconverted',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'style=text-align:center',
'ordering'=>9,
'map'=>'price',
'lid'=>8589,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_price',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961911NYAN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'publish',
'lid'=>11851,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_publish',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'pid',
'lid'=>11852,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_pid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'vendid',
'lid'=>8579,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_vendid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'curid',
'lid'=>8580,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_curid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.categoryitem',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'pid',
'lid'=>8581,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_categoryproduct_pid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'modified',
'lid'=>8582,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'pid',
'lid'=>8583,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_product_images_pid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'main.removefk',
'sid'=>'#files',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=product,images',
'ordering'=>22,
'map'=>'filid',
'lid'=>8584,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_products_widget_files_filid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#product_groupby_pid_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'pid',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'product_groupby_pid_2075',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_makeLJ_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'premium',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'product_makeLJ_2075',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#filter_product_checkaccess_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'rolid',
'type'=>7,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'filter_product_checkaccess_2075',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_vendid_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'vendid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'item.customjomsocial',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'product_where_vendid_2075',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_block_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'blocked',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'product_where_block_2075',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_publish_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'publish',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'product_where_publish_2075',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_availableend1_2075',
'bktbefore'=>1,
'sid'=>'#item',
'map'=>'availableend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>3,
'typea'=>1,
'typeb'=>21,
'params'=>'',
'namekey'=>'product_where_availableend1_2075',
'name'=>'',
'ordering'=>7,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_availableend2_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'availableend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0',
'bktafter'=>1,
'logicopr'=>1,
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'product_where_availableend2_2075',
'name'=>'',
'ordering'=>8,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_publishend1_2075',
'bktbefore'=>1,
'sid'=>'#item',
'map'=>'publishend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>3,
'typea'=>1,
'typeb'=>21,
'params'=>'',
'namekey'=>'product_where_publishend1_2075',
'name'=>'',
'ordering'=>9,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_publishend2_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'publishend',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'0',
'bktafter'=>1,
'logicopr'=>1,
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'product_where_publishend2_2075',
'name'=>'',
'ordering'=>10,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_publishstart_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'publishstart',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>5,
'typea'=>1,
'typeb'=>21,
'params'=>'',
'namekey'=>'product_where_publishstart_2075',
'name'=>'',
'ordering'=>11,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#product_where_availablestart_2075',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'availablestart',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>5,
'typea'=>1,
'typeb'=>21,
'params'=>'',
'namekey'=>'product_where_availablestart_2075',
'name'=>'',
'ordering'=>12,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}