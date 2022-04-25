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
		$view = new View("Characters/characters", "base");
	}

	public function itemsAction(){
		$view = new View("Items/items", "base");
		$view->assign('currentItem', basename($_SERVER["REQUEST_URI"]));
	}

	public function tierlistAction(){
		$view = new View("tierlist", "base");
	}

	public function leaderboardAction(){
		$view = new View("leaderboard", "base");
	}

	public function aboutAction(){
		$view = new View("about", "empty");
	}

}