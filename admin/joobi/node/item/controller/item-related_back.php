<?php 


* @license GNU GPLv3 */

class Item_related_back_controller extends WController {
function back()
{
WPages::redirect('controller=product&task=listing');
return true;
}}