<?php 


* @license GNU GPLv3 */

<div id="myItemsPage">
	<?php if ( $items = $this->getValue('items') ) :
	$showItemsTitle = WPref::load( 'PCATALOG_NODE_ITMTITLE' );
	$data = WPage::newBluePrint( 'widgetbox' );
	$data->content = $items;
	if ( $showItemsTitle ) $data->title = $this->getValue( 'itemTitle' );
	$data->headerRightA[] = $this->getValue( 'itemsPicklist' );
	$itemsPagi = $this->getValue( 'itemsPagination' );
	if ( !empty($itemsPagi) ) {
		$data->headerCenterA[] = $itemsPagi;
		$data->bottomCenterA[] = $itemsPagi;
	}
	?>
	<div class="siteItems clearfix">
		<section>
		<?php echo WPage::renderBluePrint( 'widgetbox', $data ); ?>
		</section>
	</div>
	<?php endif; ?>
	<?php if ( $categories = $this->getValue('categories') ) :
	$showCategoryTitle = PCATALOG_NODE_CTYTITLE;
	$data = WPage::newBluePrint( 'widgetbox' );
	$data->content = $categories;
	if ( $showCategoryTitle ) $data->title = $this->getValue( 'categoryTitle' );
	$cateogriesPagi = $this->getValue( 'categoriesPagination' );
	if ( !empty($cateogriesPagi) ) {
		$data->headerCenterA[] = $cateogriesPagi;
		$data->bottomCenterA[] = $cateogriesPagi;
	}
	?>
	<div class="siteCategories clearfix">
	<section>
		<?php echo WPage::renderBluePrint( 'widgetbox', $data ); ?>
	</section>
	</div>
	<?php endif; ?>
</div>