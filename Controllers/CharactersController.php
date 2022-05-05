<?php

namespace App;

use App\Core\Helpers;
use App\Core\View;

class CharactersController {
	
	public function characterAction(){
		$view = new View("Characters/character", "base");
		$view->assign('currentChar', basename($_SERVER["REQUEST_URI"]));
	}

}