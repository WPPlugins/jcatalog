<?php 


* @license GNU GPLv3 */

<div>
	<div style="clear:both;overflow:hidden;">
		<div style="float:left;width:30%;">
			<?php echo $this->getContent( 'image' ); ?>
		</div>
		<div style="float:right;width:70%;">
			<?php echo $this->getContent( 'generalinfo' ); ?>
		</div>
	</div>
	<div style="clear:both;overflow:hidden;">
		<div style="margin-top: 20px;">
			<?php echo $this->getContent( 'contactinfo' ); ?>
		</div>
	</div>
	<div style="clear:both;overflow:hidden;">
		<div class="profile-description">
			<?php echo $this->getContent( 'description' ); ?>
		</div>
	</div>
	<div style="clear:both;overflow:hidden;">
		<div style="margin-top: 20px;">
			<?php echo $this->getContent( 'tab' ); ?>
		</div>
	</div>
</div>