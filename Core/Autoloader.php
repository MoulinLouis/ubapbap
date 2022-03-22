<?php
namespace App\Core;

class Autoloader
{	
	/**
	 * register
	 * @return void
	 * Method called automatically during the various calls of classes to include the file of the class in question
	 */
	public static function register(){
		spl_autoload_register(function ($class){
			$class = str_replace("\\", "/", $class);
            $class = str_ireplace('App/', '', $class);
			$class .= ".php";
			if(file($class)){
				include $class;
			}
		});
	}
}