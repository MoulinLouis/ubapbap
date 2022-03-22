<?php

namespace App;

use App\Core\Helpers;
use App\Core\View;

class BaseController {

	public function homeAction(){
		// $_SESSION['alert']['success'] = ["titre" => "Success", "message" => "Test message"];
		$view = new View("default", "base");
	}

	public function charactersAction(){
		$view = new View("characters", "base");
	}

	public function itemsAction(){
		$view = new View("items", "base");
	}

	public function tierlistAction(){
		$view = new View("tierlist", "base");
	}

	public function leaderboardAction(){
		$view = new View("leaderboard", "base");
	}

}