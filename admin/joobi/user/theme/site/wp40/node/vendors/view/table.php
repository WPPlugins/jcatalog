<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
<?php 
$elements = $this->getContent( 'elements' );
$header = $this->getContent( 'header' );
$elementParams = $this->getContent( 'elementParams' );
if (!empty($elements)) : ?>	
<table>
<?php if ( !empty($header) && !empty($elementParams->showHeader) ) : ?>
<tr>
	<th><?php echo $header->photo; ?></th>
	<th><?php echo $header->name; ?></th>
</tr>
<?php endif; ?>
<?php foreach( $elements as $i => $element ) : 
$image = !empty($element->thumbnailPath) ? $element->thumbnailPath : '';
$TRclass = ( $i & 1 ) ? 'row0' : 'row1';
?>	
<tr class="<?php echo $TRclass; ?>">
	<?php if ( !empty($image) ) : ?>
	<td style="vertical-align: middle; text-align: center;" valign="top">
	<?php echo $this->getContent('vendorBy').': <a href="'. $element->vendorLink .'"><img border="0" src="'. $image .'" width="30" height="30" /></a>'; ?>
	</td>
	<?php endif; ?>
	<td>
	<?php 
	if ( empty($elementParams->showNoName) && !empty( $element->linkName ) ) echo $element->linkName; 
	echo $element->nameLink; 
	if( !empty($element->rating) ) echo '<br>' . $element->rating; ?></td>
</tr>
<?php endforeach; ?>	
</table>
<?php endif; ?>