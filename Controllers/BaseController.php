<?php

namespace App;

use App\Core\Helpers;
use App\Core\View;

class BaseController {

	public function homeAction(){
		// $_SESSION['alert']['success'] = ["titre" => "Success", "message" => "Test message"];
		$view = new View("default", "base");
	}

}