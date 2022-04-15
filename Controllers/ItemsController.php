<?php

namespace App;

use App\Core\Helpers;
use App\Core\View;

class ItemsController {

	public function itemAction(){
		$view = new View("Items/item", "base");
		$view->assign('currentItem', basename($_SERVER["REQUEST_URI"]));
	}

}