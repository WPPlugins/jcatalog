<?php 


* @license GNU GPLv3 */

<div>
	<div style="float:left;width:49%;">
		<div style="clear:both;padding-bottom:20px;">
			<?php echo $this->getContent( 'image' ); ?>
		</div>
		<div style="clear:both;padding-top: 40px;">
			<?php echo $this->getContent( 'tab' ); ?>
		</div>
	</div>
	<div style="float:right;width:49%;">
		<div style="clear:both;">
			<?php echo $this->getContent( 'status' ); ?>
		</div>
		<div style="clear:both;">
			<?php echo $this->getContent( 'info' ); ?>
		</div>
	</div>
</div>