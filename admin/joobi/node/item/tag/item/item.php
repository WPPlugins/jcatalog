<?php 


* @license GNU GPLv3 */

 class Item_Item_tag {	 	
 	var $smartUpdate = false;
 	var $nodeName = 'catalog';
	function process($givenTagsA) {
		static $count=1;
		$replacedTagsA = array();
		$productLoadC = WClass::get( 'item.load' );
		$outputThemeC = WClass::get( 'output.theme' );
		$outputThemeC->nodeName = $this->nodeName;
		$outputThemeC->header = $productLoadC->setHeader();
		$id = 'itmtg_';
		foreach( $givenTagsA as $tag => $myTagO ) {
						$myTagO = $productLoadC->convertParams( $myTagO, false );
						$productA = $productLoadC->get( $myTagO );
						if ( !empty($myTagO->countOnly) ) {
				$replacedTagsA[$tag] = $myTagO->totalCount;
				continue;
			}
			if ( empty( $productA ) ) {
				if ( 'catalog-results' == WGlobals::get( 'controller' ) ) {
					$myTagO->wdgtContent = '<center>' . WText::t('1308888992TDMY') . '</center>';
				} else {
					$myTagO->wdgtContent = '';
				}				
				$replacedTagsA[$tag] = $myTagO;
				continue;
			}
									$productLoadC->extraProcess( $productA, $myTagO );
															if ( empty($myTagO->widgetSlug) ) $myTagO->widgetSlug = $id . $count++;
			$myTagO->wdgtContent = $outputThemeC->createLayout( $productA, $myTagO );
			$replacedTagsA[$tag] = $myTagO;
		}
		return $replacedTagsA;
	}
}