<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....'); ?>
<div class="<?php echo $this->getContent('containerClass'); ?> itemItem itemSimplified<?php echo $this->getContent('classSuffix'); ?>">
	<div class="containerPadding">
		<?php
		if ( $imagePath = $this->getContent('imagePath') ) : ?>
		<div class="siteImage">
		<?php 
			$imageWidth = $this->getContent('imageWidth');
			$imageHeight = $this->getContent('imageHeight');
			if ( !empty( $imageWidth) && !empty($imageHeight) ) $imageSize = ' width="' . $imageWidth . '" height="' . $imageHeight . '"';
			else $imageSize = '';
			echo '<a href="'.$this->getContent('pageLink').'"><img alt="' . WGlobals::filter( $this->getContent('name'), 'string' ) . '" border="0" src="'. $imagePath . '"'.$imageSize.' /></a>';
			?>
		</div>
		<?php endif; ?>
		<div class="siteRightInfo">
		<?php if ( empty($elementParams->mouseOver->itmmouseover) && $name = $this->getContent('linkName') ) : echo '<h4 class="siteName">' . $name . '</h4>'; endif; ?>
		<div id="editable">
			<div class="btn-group">
			<?php
			$buttonO = WPage::newBluePrint( 'button' );
			$buttonO->type = 'infoLink';
			$buttonO->text = $this->getContent('editButton');
			$buttonO->icon = 'fa-edit';
			$buttonO->color = 'success';
			$buttonO->link = $this->getContent( 'editButtonLink' );
			$buttonO->popUpIs = true;
			$buttonO->popUpWidth = '90%';
			$buttonO->popUpHeight = '90%';
			echo WPage::renderBluePrint( 'button', $buttonO );
			$buttonO = WPage::newBluePrint( 'button' );
			$buttonO->type = 'infoLink';
			$buttonO->text = $this->getContent('deleteButton');
			$buttonO->icon = 'fa-trash-o';
			$buttonO->color = 'danger';
			$buttonO->link = $this->getContent( 'deleteButtonLink' );
			echo WPage::renderBluePrint( 'button', $buttonO );
			?>
			</div>
		</div>
		<?php
		if ( $rating = $this->getContent('rating') ) : echo '<div class="siteRating">' . $rating . '</div>'; endif;
		if ( $reviews = $this->getContent('nbReviews') ) : echo '<div class="siteReview">' . $reviews . '</div>'; endif;
		if ( $convertedPrice = $this->getContent('convertedPrice') ) : echo '<div class="sitePrice">' . $convertedPrice . '</div>'; endif;
		if ( $quantity = $this->getContent('quantity') ) : echo '<div class="siteQuantity">' . $quantity . '</div>';
		elseif ( $cart = $this->getContent('cart') ) : echo '<div class="siteCart">' . $cart . '</div>'; endif;
		if ( $vendor = $this->getContent('vendorName') ) :
			echo '<div class="siteVendor">'.$this->getContent('vendorBy').': <a href="'.$this->getContent('vendorLink').'">' . $vendor . '</a>' . $this->getContent('syndicateVendorName') . '</div>';
		endif;
		if ( $question = $this->getContent('askQuestionLink') ) : echo '<div class="siteQuestion">'.$question . '</div>'; endif;
		?>
		</div>
		<div class="siteBottomInfo clearfix">
		<?php if ( $preview = $this->getContent('preview') ) : ?>
		<div class="sitePreview<?php echo $this->getContent('previewType'); ?>">
			<?php echo $preview; ?>
		</div>
		<?php endif; ?>
		<?php
		if ( $intro = $this->getContent('introduction') ) : echo '<div class="siteIntro">' . $intro . '</div>'; endif;
		if ( $readMore = $this->getContent('readMoreLink') ) : echo '<div class="siteReadMore">' . $readMore . '</div>'; endif;
		if ( $desc = $this->getContent('description') ) : echo '<div class="siteDesc">' . $desc . '</div>'; endif;
		?>
		</div>
		<hr class="soft">
	</div>
</div>
