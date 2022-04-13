<?php

namespace App\Core;

class View
{
	private $template; // front ou back
	private $view; // default, dashboard, profile, ...
	private $data = [];

	public function __construct($view="default", $template="front"){
		$this->setTemplate($template);
		$this->setView($view);
	}

	/**
	 * getAssets
	 * @param  mixed $nameFile
	 * @return void
	 * Returns the file passed in parameter and adds it to a view or a model
	 */
	public static function getAssets(string $nameFile){
		$explodedNameFile = explode(".", trim($nameFile));
		$nameFileType = array_pop($explodedNameFile);
		
		switch ($nameFileType){
			case "css" :
				echo Routing::getBaseUrl() . '/public/styles/'.$nameFile;
				return;
			case ($nameFileType == "png" || $nameFileType == "jpg" || $nameFileType == "svg" || $nameFileType == "jpeg") :
				echo Routing::getBaseUrl() . '/public/images/'.$nameFile;
				return;
			case ($nameFileType == "mp4") :
				echo Routing::getBaseUrl() . '/public/videos/'.$nameFile;
				return;
			case ($nameFileType == "js") :
				echo Routing::getBaseUrl() . '/public/scripts/js/'.$nameFile;
				return;
			case ($nameFileType == "gif") :
				echo Routing::getBaseUrl() . '/public/images/gif/'.$nameFile;
				return;
			default :
				return;
		}
	}

	/**
     * Return the title of the page
     */
    public static function getActualPageTitle() {
		return Routing::getActualTitle() ?? '';
    }
	
	/**
	 * setTemplate
	 * @param  mixed $template
	 * @return void
	 * Defines the template used and calls on it
	 */
	public function setTemplate($template){
		if(file_exists("Views/Templates/".$template."_tpl.php")){
			$this->template = "Views/Templates/".$template."_tpl.php";
		}else{
			die("Le template n'existe pas");
		}
	}

		
	/**
	 * setView
	 * @param  mixed $view
	 * @return void
	 * Defines the view used and calls on it
	 */
	public function setView($view){
		if(file_exists("Views/".$view."_view.php")){
			$this->view = "Views/".$view."_view.php";
		}else{
			die("La vue n'existe pas");
		}
	}

	public function addAlert($alert, $config = [])
    {
        $pathAlert = "Views/Alert/" . $alert . ".alert.php";
        if (file_exists($pathAlert)) {
            include $pathAlert;
        } else {
            die("L'alerte n'existe pas :" . $pathAlert);
        }
    }

	public static function getFaviconUrl() {
		echo Routing::getBaseUrl() . '/favicon.ico';
	}
	
	/**
	 * assign
	 *
	 * @param  mixed $key
	 * @param  mixed $value
	 * @return void
	 */
	public function assign($key, $value){
		$this->data[$key] = $value;
	}
	
	public function getdata($elem){
	    return $this->data[$elem];
	}
	
	/**
	 * __destruct
	 *
	 * @return void
	 */
	public function __destruct(){
		extract($this->data);
		include $this->template;
	}
}




