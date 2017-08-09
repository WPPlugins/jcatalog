<?php
defined('JOOBI_SECURE') or die('J....');
class Data_design_vocab_translation{
var $translationA=array(
 '1470785114PASD'=>'The node containing all the information to design forms and application.'
,'1335905452QHTH'=>'Field'
,'1206732388KEHV'=>'Model'
,'1470785114PASE'=>'The models'
,'1206732389NXTO'=>'Column'
,'1470785114PASF'=>'The database table columns'
,'1356698583QHMX'=>'View Fields'
,'1206961869IGNH'=>'Form'
,'1212761197FHZN'=>'Listing'
,'1206732388KEHY'=>'Picklist'
,'1206961878BMAO'=>'Value'
,'1359742651HQYX'=>'Field type'
,'1206961868QEYD'=>'Menus'
,'1251697929ABZD'=>'Widget'
,'1447977854NEYF'=>'Tour'
,'1242282437ISJG'=>'Step'
,'1209142268NMKA'=>'Role'
,'1219764655SSLQ'=>'Role of the user for the ACL'
,'1206961854HENY'=>'Views'
,'1206732388KEHZ'=>'View'
,'1229653442FEQZ'=>'Users'
,'1470784864AGXZ'=>'The users used in the framework.'
,'1212662234CPQC'=>'Table'
,'1298350283NKJB'=>'Apps Extra info'
,'1356698584EBOM'=>'Field Definition'
,'1359486554KQXB'=>'How to design your custom fields?'
,'1418159507MBBP'=>'<u><b>Step 1:</b></u> define a name for your field. Optionally you can specify a column name.<br>A description is always advisable as it will inform the user on what the field is used for a and show be completed. The description will appear as the tool-tips on the form.<br>Define the type of fields you want to created. Please refer to the documentation for details information on each fields.<br><br><b><u>Step 2:</u></b> finish to complete the information on the left column regarding the default value for the field, the different access level, searchable and required. Those are usually application throughout all the views identically.<br><br><u><b>Step 3:</b></u> Choose the views ( or "page" ) to which you want this field to be applied. You do so by clicking on the Available column or button. Once you have done so, you might see new information appearing like the Area or Details Edit.<br>Use the <b><i>Area</i></b> to define in which area the field should be rendered.<br><i><b>Edit Details</b></i> let you customized how the field is specifically rendered in that view.<br><i><b>Edit View</b></i> let you access the all the view elements to make more involved changes to that view.<br><br><u><b>Step 4:</b></u> (optional) In the lower right you can customize some parameters related to that field for the form element or listing element. See documentation for more details.<br><br><br>'
,'1219769913SSOH'=>'Pick-list'
,'1470785115NESU'=>'Edit a Pick List'
,'1470785115NESV'=>'Form to create values for a pick-list'
,'1400708901APLT'=>'Bootstrap Icon widget'
,'1400708901APLU'=>'Bootstrap Button widget'
,'1414538739SGVG'=>'Generate Views (jDesign)'
,'1302502990FCIG'=>'Generate View'
,'1484062395RXPS'=>'<p><br />
You need to specify the following to generate view for a model.</p>

<p>&nbsp;</p>

<ul>
	<li>Main controller of your view</li>
	<li>Node where you attached the generated view</li>
	<li>User access of the generated view</li>
	<li>Type of the generated view</li>
</ul>

<p>&nbsp;</p>'
,'1206732405TIXB'=>'Export'
,'1206732405TIXA'=>'Import'
,'1340745649OCDR'=>'Hints'
,'1443057212NEYD'=>'<p>If there are images imported, then the path from the root of the site need to be specified and the image uploaded first.</p>

<p>eg: /joobi/user/tmp/myImagesFolder/image1.png</p>'
,'1447977858ELOU'=>'Design tour'
,'1448281884QEPX'=>'Tour Step'
,'1356698584EBOL'=>'Fields Definition'
,'1470785115NESX'=>'List of fields available'
,'1206732420EIUR'=>'Models'
,'1356733772QJIA'=>'Models & Fields'
,'1442008235GUZJ'=>'<p>This is a list of all Models ( representation of database tables ), to which you can add customized fields.<br />
<br />
The column table indicate in which database\'s table the data will be stored.</p>

<p><strong>Related Model</strong> are model which share the same table<br />
<br />
The column fields indicated how many customized fields you have already created.<br />
<strong>To add a new field</strong> simply click on the Fields column and follow the next wizard.</p>'
,'1355852601LJIH'=>'Fields'
,'1359486554KQXA'=>'List of custom Fields'
,'1359486555TEWI'=>'This is the list of all fields you have created for the specified model.<br><u>Name</u>: the name which will appear either as the title of the form element or the column header.<br><u>Column</u>: the name of the column in the database\'s table.<br><u>Type</u>: the type of field you have created.<br><u>Order</u>: please note that the ordering might not be exactly the ordering in the view itself as the field can be added in many different views and in many different area in each of those views.<br><u>Update All</u>: Define if all the views should be updated when the field is modified.  For instance if you want to change the name of the field throughout all the views. Usually you keep the Update All as Yes. However you could turn it to No if you wish to customized each view.<br><br>'
,'1209559180DARX'=>'Pick-lists'
,'1470785115NESY'=>'Listing of Pick Lists'
,'1357138793DWSZ'=>'List of available pick-lists'
,'1439497098QDJT'=>'<p><strong>New</strong>: Create a new pick-list. Define a name, description and user access.<br />
The "<strong>Values</strong>" column defines how many values are in the pick-list. Click on "<strong>Add / Edit</strong>" to add new values, or edit the existing one.<br />
Unpublish a pick-list to temporarily disable it.</p>
<div>The column core define if a pick-list is one you created ( Core = unlocked ) or one which come with the application ( Core = locked )</div>'
,'1470785115NESW'=>'Values of a pick-list.
View used in the edit of a pick-list.'
,'1209675038APRU'=>'Values'
,'1470785115NESZ'=>'Values of a pick-list.'
,'1442294110KNEU'=>'Import / Export'
,'1453314355ACXO'=>'Extending the reach of your data'
,'1453314356YKM'=>'<p>The buttons Export and Import allows to export or import the data corresponding to the specified model.</p>

<p>Outgoing: allow to export the data through a REST API. Please note additional development is required to define where the data should be sent.</p>

<p>Incoming: allow external site to import data to your site through a REST API. Please note additional development is required.</p>'
,'1447977858ELOT'=>'Tours'
,'1448281884QEPW'=>'Tour Steps'
,'1470785115NEST'=>'List of views on which we can add custom fields.'
,'1206732391QBUT'=>'Ordering List'
,'1206961868QEUK'=>'Type of columns '
,'1470785114PASH'=>'List of columns type for a table'
,'1470785114PASI'=>'Column attributes'
,'1211811531HOVY'=>'All User Access'
,'1211811531HOVX'=>'The access level a user is granted.'
,'1302521435TGWY'=>'Model View Type'
,'1302521458MVWU'=>'Type of View to be generated'
,'1219769904NDIG'=>'Field Type'
,'1470785114PASJ'=>'used into the form to create new field.
The list of available fields.'
,'1470785114PASK'=>'Fields Categories'
,'1470785114PASL'=>'A list of categories for the fields.'
,'1470785114PASM'=>'Style of Pick-List'
,'1470785114PASN'=>'Provide all the pick-list style possible.'
,'1470785114PASO'=>'Order for Pick-list Values'
,'1470785114PASP'=>'Type of Model for Fields'
,'1470785171DRAG'=>'Node List'
,'1470784894BEBQ'=>'Button & border color'
,'1242282450QJAT'=>'Icons'
,'1470784894BEBR'=>'List of icons to use for buttons and menus.
faicon , fa icon'
,'1396394737MEVF'=>'Button Size'
,'1470785114PASQ'=>'Icons Animation'
,'1470785114PASR'=>'List of icons animation'
,'1470785114PASS'=>'List of Parent Picklist'
,'1470785114PAST'=>'Define the parent pick-list to use'
,'1219769913SSOJ'=>'Picklist Values'
,'1470785114PASU'=>'List of all values of a specified pick list'
,'1470785114PASV'=>'Color of picklist element'
,'1470785115NESO'=>'Picklist Type'
,'1489775352OYQS'=>'Picklist Search'
,'1309938381IWPE'=>'View Type'
,'1470785115NESP'=>'Parent Area'
,'1470785115NESQ'=>'A list of parent area which can be used for the field to be added.'
,'1470785115NESR'=>'Type of picklist'
,'1470785115NESS'=>'Models List'
,'1298350843FMVJ'=>'Column 1'
,'1298350843FMVK'=>'Column 2'
,'1356698583QHNE'=>'Default Column'
,'1357230914NZVE'=>'Form Parameters'
,'1356698583QHNH'=>'Default Settings'
,'1356698583QHNI'=>'Form Preferences'
,'1356698583QHNJ'=>'Listing Preferences'
,'1357230914NZVF'=>'Listing Parameters'
,'1206732400OWZR'=>'General'
,'1206961912MJQB'=>'Code'
,'1357058841KKEQ'=>'Add / Edit one value'
,'1357058841KKER'=>'Picklist Sample'
,'1242282439OJUW'=>'Advanced'
,'1394069593IQAS'=>'column1'
,'1394069593IQAT'=>'column2'
,'1394069857XFX'=>'Assignment'
,'1395500493HQVV'=>'column3'
,'1394069593IQAQ'=>'row1'
,'1394069593IQAR'=>'row2'
,'1206961869IGNB'=>'Icon'
,'1219769905FKPU'=>'Button'
,'1400788093LHUB'=>'Create PopUp'
,'1206732412DAEO'=>'Access'
,'1211811583DBTA'=>'Alias'
,'1398436917DTKC'=>'Identifier'
,'1206732372QTKN'=>'Publish'
,'1206732392OZVB'=>'Name'
,'1206732392OZVG'=>'Description'
,'1355852784RQNP'=>'The name of the listing element to use.<br>'
,'1355852784RQNQ'=>'The name of the form element to use.<br>'
,'1355434007BBZS'=>'Suffix'
,'1355852782MQER'=>'Dbtid'
,'1209034856HUVS'=>'Path'
,'1217603897AYYA'=>'Folder'
,'1347652452OQAE'=>'Rolid'
,'1206732389NXTA'=>'Level'
,'1355852783DYRA'=>'Extended'
,'1355852783DYRB'=>'Checkval'
,'1217251965LDUE'=>'Params'
,'1212669853FLEL'=>'Prefix'
,'1355852783DYRC'=>'Extstid'
,'1356698583QHMZ'=>'View Access'
,'1356698584EBNZ'=>'Define the required access to view the field.<br>'
,'1356698584EBOA'=>'Optional, the name of the field in the database.<br>'
,'1356698584EBOB'=>'Enable to publish or unpublish the field from all views.<br>'
,'1206961869IGND'=>'hidden'
,'1213200894KHAM'=>'Searchable'
,'1446170566BPBZ'=>'Define if the field should be searchable.'
,'1356698584EBOD'=>'Name of the field which will be displayed to the user.<br>'
,'1356698584EBOE'=>'A description to explain the field. The description will be showed to the user.<br>'
,'1335905027HUYP'=>'Edit Access'
,'1356698584EBOF'=>'Define the required access to edit the field.<br>'
,'1206732392OZVD'=>'Type'
,'1356698584EBOG'=>'Choose the type of field you want to create.<br>'
,'1211811557LMRL'=>'Default Value'
,'1356698584EBOH'=>'The default value for new value.<br>'
,'1206732421RJQZ'=>'Attributes'
,'1211811557LMRI'=>'Mandatory'
,'1206961877KAKC'=>'Size'
,'1219769904NDIO'=>'Required'
,'1356698584EBOI'=>'Define if the field should be required.<br>'
,'1206732411EGQO'=>'Category'
,'1356698584EBOJ'=>'The category of the field.<br>'
,'1233297975SESK'=>'Nested'
,'1356698583QHNF'=>'Auto Update all Elements'
,'1356698584EBOK'=>'Yes will update all view\'s elements when saving the field ( for instance: name, description, access, etc...)<br>No will enable to have different settings for different view\'s elements.<br>'
,'1227580858CXTV'=>'nested'
,'1219769906LJNO'=>'Name of the Picklist'
,'1418398709LVIH'=>'Specify a identifier.  Preferably starting with the extension prefix.'
,'1219769906LJNM'=>'Specify a description for the pick list.'
,'1206961869IGOF'=>'Style'
,'1421361227IJHC'=>'Define the look and feel of the pick-list.'
,'1417090743CGRO'=>'Defines the minimum access for the pick-list.'
,'1219769905FKRB'=>'Picklist code'
,'1357058841KKET'=>'The name displayed in the pick-list.<br>'
,'1357058841KKEU'=>'A numeric value, corresponding to the pick-list name.<br>Leave blank for default.<br>'
,'1206961869IGNP'=>'Order'
,'1206732399EINB'=>'Save'
,'1206732425HINT'=>'Default'
,'1357058841KKEV'=>'Define if this value is the default value when no data is selected.<br>'
,'1220793707SOED'=>'Types'
,'1382068744SDQH'=>'Advance Search'
,'1446170567CDCW'=>'Define if the field can be searchable with the advance search functionality.'
,'1400708900IRZV'=>'Choose an icon'
,'1242282452RPKT'=>'Tooltip'
,'1400708900IRZW'=>'An optional tooltip<br>'
,'1400708900IRZT'=>'Icon size'
,'1400708900IRZX'=>'Choose the icon size.<br>'
,'1400708900IRZU'=>'Icon color'
,'1400708900IRZY'=>'Choose the icon color.<br>'
,'1206732400OWYY'=>'Text'
,'1400708900IRZZ'=>'Define the button text<br>'
,'1400708901APLS'=>'Choose the button size.<br>'
,'1206961869IGNO'=>'Link'
,'1400788093LHUF'=>'The link for the button<br>'
,'1356733768PTQW'=>'Link target'
,'1400788093LHUG'=>'The link target tag for the button<br>'
,'1400788093LHUC'=>'Is PopUp'
,'1400788093LHUD'=>'PopUp Width'
,'1400788093LHUE'=>'PopUp Height'
,'1400812016CMWY'=>'Icon animation'
,'1400812017YLA'=>'Choose an icon animation'
,'1409860322PSNC'=>'Choose Parent'
,'1409860322PSNE'=>'Choose a parent pick-list to have the pick-list depends on the selected value from another pick-list.'
,'1409860322PSND'=>'Parent Value'
,'1409860322PSNF'=>'Choose the value of the parent pick-list.'
,'1409955038JEIA'=>'User value'
,'1409955038JEIB'=>'There can be only one value define as&nbsp;“User value”.&nbsp;<div>If User value is turn on, the child pick list will show an input box so that the user can enter a specific value rather than choosing a predefined value.</div>'
,'1219769905FKRK'=>'Controller Name'
,'1219769907SWZM'=>'Specify the name of the controller you want to use.'
,'1211811528BLZA'=>'Node'
,'1414574459GSZS'=>'Specify the node which you want to use jdesign1'
,'1443396563CKHM'=>'User Acsess'
,'1414538739SGVE'=>'Specify the access level of the user who can view the data.<br>'
,'1414574459GSZT'=>'Specify the view that you want to generate jdesign<br>'
,'1417090743CGRN'=>'Allow User Value'
,'1417090743CGRP'=>'If User value is turn on, it will allow to defined a pick-list choice called “Other”, which allow the user to specify their own value.'
,'1395886787SVJW'=>'Color'
,'1418398709LVII'=>'Choose the color of the value'
,'1206732392OZVH'=>'Status'
,'1206732421RJQA'=>'File'
,'1443147517RSVB'=>'Use as Sorting'
,'1443147517RSVE'=>'Yes to be able to use this field as a sorting field for the list of items.'
,'1443147517RSVC'=>'Sorting Legend Ascendant'
,'1443147517RSVF'=>'Define the name to define the sorting of this field in an ascending order.'
,'1443147517RSVD'=>'Sorting Legend Descendant'
,'1443147517RSVG'=>'Define the name to define the sorting of this field in an descending order.'
,'1446170566BPBY'=>'Link to Seach'
,'1383926331ELHS'=>'Yes, will had a link to the value of the field, directing to the advance search page, to filter by that field value.'
,'1448395352DQHI'=>'onNext'
,'1448395353DPXG'=>'Define the controller for the next step'
,'1448395353DPXH'=>'Define a unique ID for each step.'
,'1242282414LZME'=>'Target'
,'1448507357JDMJ'=>'Specify the HTML id to use to attach the tour bubble.<br>If empty the default header will be used.<br>Specify the view identifier and element id separated by a dot ( eg: my_view.my_id).'
,'1213794965CUDE'=>'Source'
,'1458784398DZTI'=>'Define how the pick-list get created.'
,'1206732365OQJI'=>'Search'
,'1489775455FNHI'=>'Use a pick-list in the display of the pick-list.<br>Default: use the general preferences<br>Never: don\'t show a search box.<br>Always: display a search box.'
,'1206732361LXFD'=>'New'
,'1206732361LXFE'=>'Edit'
,'1206732372QTKL'=>'Delete'
,'1242282449PIPC'=>'Done'
,'1206732393CXVV'=>'Cancel'
,'1480689100MDNI'=>'Reset Count'
,'1206732399EINF'=>'Divider'
,'1206732392OZUP'=>'Help'
,'1206732399EINC'=>'Apply'
,'1206732411EGRN'=>'divider'
,'1206961882TDHA'=>'Back'
,'1206961996STAF'=>'Available'
,'1228820287MBVC'=>'Close'
,'1206732372QTKK'=>'Copy'
,'1219769913SSOE'=>'Generate'
,'1206732391QBUR'=>'Wizard'
,'1206732365OQJK'=>'Reset'
,'1207155379JNIN'=>'Upload'
,'1206732392OZVA'=>'#'
,'1206732421RJQW'=>'Ordering'
,'1206961850KLRI'=>'Date'
,'1206961869IGNE'=>'Core'
,'1206732400OWXG'=>'ID'
,'1302502783BNRP'=>'Sid'
,'1462287916HEYN'=>'Fields (value)'
,'1356698583QHMY'=>'Fdid'
,'1356698583QHNC'=>'Update All'
,'1356698583QHNA'=>'Modified Date'
,'1206961869IGNC'=>'Header'
,'1380064817JISM'=>'Container'
,'1380228929NBOQ'=>'Define in which container the field should be added.'
,'1356698583QHNB'=>'Edit Details'
,'1357697641QROB'=>'Edit View'
,'1206732389NXTC'=>'Names'
,'1206961872SVNI'=>'Edit Values'
,'1206732412DAEM'=>'Parent'
,'1417207362AUVU'=>'This is the Name of the parent value'
,'1417207362AUVV'=>'This is the value of the parent piccoloist'
,'1453314354AREO'=>'Incoming'
,'1453314355ACXN'=>'Allow incoming data for this model'
,'1453314354AREN'=>'Outgoing'
,'1453314355ACXM'=>'Allow outgoing data for this model'
,'1462287916HEYO'=>'Steps'
,'1402685749TFMY'=>'Identifer'
,'1206961868QEUP'=>'All Views'
,'1206732372QTKM'=>'Show'
,'1327708944HAPH'=>'Any Type'
,'1357058839QZXV'=>'Predefined Values'
,'1357058839QZXW'=>'PHP code'
,'1206732410ICCJ'=>'None'
,'1242282444LHMX'=>'Blue'
,'1242282417SQNH'=>'Green'
,'1393290131DEFB'=>'Light Blue'
,'1242282444LHNB'=>'Orange'
,'1242282444LHMY'=>'Red'
,'1458784400MTVV'=>'Predified Values'
,'1309938388RECA'=>'PHP Code'
,'1206732372QTKI'=>'Yes'
,'1206732405TIXC'=>'Standard'
,'1206961870KLBH'=>'Menu'
,'1219769904NDIJ'=>'Numeric'
,'1219769904NDIP'=>'Special'
,'1220215719BHFI'=>'You have to specify a name for your column'
,'1220215906LFIQ'=>'Can not create the file path'
,'1220263310JRFM'=>'An error occurred, the code file has not been recorded.'
,'1220263310JRFN'=>'Code file deleted'
,'1220263310JRFO'=>'An error occurred, the code file has not been deleted.'
,'1220263310JRFP'=>'The code file has not been loaded.'
,'1220263310JRFR'=>'Matching code file not found'
,'1242282434IPJB'=>'Dropdown'
,'1242282450QJCF'=>'Media'
,'1251298684SHUH'=>'All Types'
,'1263970750NGKF'=>'Tag: "extends xxxx {" not found in $SHOWFILEP'
,'1304525968YBL'=>''
,'1309938525PUJW'=>'You can\'t use the function name $RESERVED_FUNCTION, it is a reserved name.  The function has been renamed with ...Reserved suffixed.'
,'1309938525PUJX'=>'Tag1: "$SHOWBOTBOUNDARY" not found in $SHOWFILEP'
,'1309938525PUJY'=>'Tag2: "$headBoundary" not found in $SHOWFILEP'
,'1356698577BYSZ'=>'The specified field type is not defined'
,'1356698577BYTA'=>'A view need to be selected.'
,'1356698582LCCK'=>'Choose a field type'
,'1357058839QZXR'=>'Radio list'
,'1357058839QZXS'=>'Checkbox list'
,'1357058839QZXT'=>'Multiple Select list'
,'1357058839QZXU'=>'Checkbox in Multiple Select'
,'1357058839QZXX'=>'- Last Element -'
,'1357138790PDJD'=>'All Models'
,'1369750859IGJB'=>'The column $COLUMNNAME already exist! Please choose a different name.'
,'1369750869THVV'=>'Sorry, the system lost a parameter, so we need to reset. Simply try again and it all will be fine'
,'1375977746FUII'=>'The form element could not be saved because there is no reference to a view.'
,'1387417576HDLZ'=>'The value you entered is already used in this pick-list, please use another value!'
,'1397855844SRLO'=>'( Area: $AREANAME )'
,'1400708734QLWH'=>'Define a button'
,'1403978942AEUG'=>'Fancy Multiple Select'
,'1418159512LBWK'=>'The field "$FIELD" already exists!'
,'1418694571IHYE'=>'Foreign key inserted'
,'1418694571IHYF'=>'Unique Key inserted'
,'1418694571IHYG'=>'$total Views updated with the new column name'
,'1423647407JIHV'=>'The field already exist!'
,'1442242224NXUO'=>'Ready to export...'
,'1442242224NXUP'=>'There is no element to be export!'
,'1442242224NXUS'=>'Export completed!'
,'1442242224NXUT'=>'Export complete!'
,'1442324359ANVJ'=>'Finalizing export!'
,'1442403381LUFC'=>'Start exporting $COUNT $MODELNAME'
,'1442403381LUFD'=>'Exporting $MODELNAME from $START to $END'
,'1442403381LUFE'=>'Click here to download file!'
,'1442892456LQGN'=>'Start importing the data...'
,'1442892456LQGO'=>'The import failed the file or data could not be read!'
,'1442892456LQGP'=>'Importing $MODELNAME number $NUMBER'
,'1442892456LQGQ'=>'Finalizing import!'
,'1442892456LQGR'=>'Import complete!'
,'1442892458BZWI'=>'Could not upload the XML file!'
,'1442892458BZWJ'=>'The file was successfully uploaded! Proceed with the import!'
,'1442980878KBRN'=>'Export / import files successfully reset!'
,'1445896217EVBG'=>'Ready to import...'
,'1468618390MVNN'=>'File not found!'
,'1468618390MVNO'=>'The file could not be open!'
,'1468618390MVNP'=>'Error while reading the file!'
,'1468618390MVNQ'=>'The XML structure is incorrect, please refer to the documentation. Alternatively you can export data to see at the structure of the XML file.'
,'1480689097SNHQ'=>'The fields count has been updated!'
,'1481125040IVRF'=>'The column could not be updated in the database!'
);}