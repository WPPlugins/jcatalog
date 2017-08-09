<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Sef_class extends WClasses {
	public function buildSEF(&$query) {
		static $memoryA = array();
		$segmentsA = array();
				if ( !empty($query['controller']) ) {
			$controller = $query['controller'];
			$segmentsA[] = $controller;
			unset($query['controller']);
		} else {
			return false;
		}
				if ( !empty($query['task']) && !empty($query['eid']) ) {
			$name = '';
			$seftype = WPref::load( 'PMAIN_NODE_SEFTYPE' );
			if ( 9 == $seftype ) {
				$mainSEFC = WClass::get( 'main.sefprocess' );
				$Feid = ( isset($query['eid']) ? $query['eid'] : 0 );
				$Ftask = ( isset($query['task']) ? $query['task'] : '' );
				$shortLink = $mainSEFC->loadEntryFromController( $Feid, 'catalog', $Ftask, WUsers::get( 'lgid' ) );
				if ( !empty( $shortLink ) ) {
					unset( $query['eid'] );
					unset( $query['task'] );
					unset( $query['view'] );
					return array( $shortLink );
				}			}
						if ( $seftype > 1 ) {
								if ( $query['task'] == 'show' ) {
					$typeElement = 'item';
					$key = $typeElement . '.' . $query['eid'];
					if ( !isset($memoryA[$key]) ) {
												$sefProp = WPref::load( 'PCATALOG_NODE_ITEMSEF' );
						if ( empty($sefProp) ) $sefProp = 'name';
						$name = WModel::getElementData( 'item', $query['eid'], $sefProp );
						$memoryA[$key] = $name;
					} else {
						$name = $memoryA[$key];
					}
				} elseif ( $query['task'] == 'category' ) {
					$typeElement = 'category';
					$key = $typeElement . '.' . $query['eid'];
					if ( !isset($memoryA[$key]) ) {
												$sefProp = WPref::load( 'PCATALOG_NODE_CATEGORYSEF' );
						if ( empty($sefProp) ) $sefProp = 'name';
						$name = WModel::getElementData( 'item.category', $query['eid'], $sefProp );
						$memoryA[$key] = $name;
					} else {
						$name = $memoryA[$key];
					}
				}			}
						if ( !empty($name) ) {
				unset( $query['task'] );
				$SEFName = WGlobals::filter( $name, 'sef' );
				$SEFName .= '-' . $typeElement . '-' . $query['eid'];
				unset( $query['eid'] );
				$segmentsA[] = $SEFName;
				unset( $query['view'] );
				return $segmentsA;
			}
		}
		if ( 'catalog' == $controller ) {
			if ( !empty($query['task']) ) {
				$task = $query['task'];
				unset($query['task']);
				if (!empty($query['eid']) ) {
					$task .=  ':' . $query['eid'];
					unset($query['eid']);
				}
				$segmentsA[] = $task;
				return $segmentsA;
			} else {
				return $segmentsA;
			}
		} elseif ( 'catalog-items' == $controller ) {
			unset($query['task']);
			if ( !empty($query['type']) ) {
				$segmentsA[] = 'type:' . $query['type'];
				unset($query['type']);
			}			return $segmentsA;
		} else {
						if ( !empty($query['task']) ) {
				$myTAsk = $query['task'];
				if (!empty($query['eid'])){
					$myTAsk .= '-' . $query['eid'];
					unset($query['eid']);
				}
				$segmentsA[]=$myTAsk;
				unset($query['task']);
			} else {
				if (!empty($query['eid'])){
					$segmentsA[]=$query['eid'];
					unset($query['eid']);
				}			}
			if (!empty($query['type'])){
				$segmentsA[] = 'type:' . $query['type'];
				unset($query['type']);
			}
			return $segmentsA;
		}
	}
	public function parseSEF(&$vars,$string) {
		$seftype = WPref::load( 'PMAIN_NODE_SEFTYPE' );
				if ( $seftype > 1 ) {
			$pos = strpos( $string, ':' );
			$explodeURL = explode( ':', $string );
			if ( 'type' == $explodeURL[0] ) {
								$vars['task'] = 'listing';
				if ( !empty($explodeURL[1]) ) {
					$vars['type'] = $explodeURL[1];
				}				return true;
			} elseif ( isset($explodeURL[1]) && is_numeric($explodeURL[1]) ) {
			} else {
				if ( !empty($explodeURL[1]) ) {
					$meaningFulA = explode( '-', $explodeURL[1] );
					switch( $meaningFulA[0] ) {
						case 'item':
							$vars['task'] = 'show';
							if ( !empty($meaningFulA[1]) ) {
								$vars['eid'] = $meaningFulA[1];
							}							break;
						case 'category':
							$vars['task'] = 'category';
							if ( !empty($meaningFulA[1]) ) {
								$vars['eid'] = $meaningFulA[1];
							}							break;
						case 'type':
							$vars['task'] = 'listing';
							if ( !empty($meaningFulA[1]) ) {
								$vars['type'] = $meaningFulA[1];
							}							break;
						case 'listing':
							$vars['task'] = 'listing';
							break;
						default:
							$vars['task'] = $meaningFulA[0];
							if ( !empty($meaningFulA[1]) ) {
								$vars['eid'] = $meaningFulA[1];
							}							break;
					}
				} else {
					$vars['task'] = $explodeURL[0];
				}
				return true;
			}
		}
			if ( !is_numeric($string) ) {
				$stringA = explode( ':', $string );
				$firstParam = $stringA[0];
				$eid = ( !empty($stringA[1]) ? $stringA[1] : 0 );
				switch( $firstParam ) {
					case 'show':
					case 'category':
					case 'addbasket':
					case 'additem':
						$vars['task'] = $firstParam;
						if (!empty($eid) ) $vars['eid'] = $eid;
						break;
					case 'home':							$vars['task'] = 'home';
						if (!empty($eid) ) $vars['type'] = $eid;
						break;
					case 'type':
						$vars['task'] = 'listing';
						if (!empty($eid) ) $vars['type'] = $eid;
						break;
					case 'listing':
						$vars['task'] = 'listing';
						break;
					default:
						$vars['task'] = $firstParam;
						if (!empty($eid) ) $vars['eid'] = $eid;
						break;
				}
				return true;
			}
		return false;
	}
}