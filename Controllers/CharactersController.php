<?php

namespace App;

use App\Core\Helpers;
use App\Core\View;

class CharactersController {

	public function kitsuAction(){
		$view = new View("Characters/kitsu", "base");
	}

}