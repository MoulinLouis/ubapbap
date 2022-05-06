<?php

namespace App;

use App\Core\Helpers;
use App\Core\View;

class BaseController {

	public $allCharacters = [
		"anna",
		"chuck",
		"froggy",
		"kiddo",
		"kitsu",
		"sashimi",
		"skinny",
		"teevee",
		"zook"
	];

	public $allItems = [
		"sword",
		"heart-bag",
		"sunglasses",
		"teeth",
		"headband",
		"boots",
		"banana",
		"spike-armor"
	];

	public function homeAction(){
		// $_SESSION['alert']['success'] = ["titre" => "Success", "message" => "Test message"];
		$view = new View("default", "base");
	}

	public function charactersAction(){
		$view = new View("Characters/characters", "base");
		$view->assign('allCharacters', $this->allCharacters);
	}

	public function itemsAction(){
		$view = new View("Items/items", "base");
		$view->assign('currentItem', str_replace("-", "_", basename($_SERVER["REQUEST_URI"])));
		$view->assign('allItems', $this->allItems);
	}

	public function tierlistAction(){
		$view = new View("tierlist", "base");
	}

	public function leaderboardAction(){
		$view = new View("leaderboard", "base");
	}

	public function patchnotesAction(){
		$view = new View("patch-notes", "base");
	}

	public function aboutAction(){
		$view = new View("about", "empty");
	}

}