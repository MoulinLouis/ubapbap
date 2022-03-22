<?php

namespace App\Core;


class Routing {
    
    public $routesPath = "routes.yml";
    public $controller="BaseController";
    public $action="default";
    public $routes = [];
    public $slugs = [];
    private static $title = "Titre par défaut";
    
    public function __construct($uri){
        $this->routes = yaml_parse_file($this->routesPath);
        //Faut vérifier qu'il y a un controller pour cette route
        if(!empty($this->routes[$uri])){
            $this->setController($this->routes[$uri]["controller"]);
            $this->setAction($this->routes[$uri]["action"]);
            $this->setTitle($this->routes[$uri]["title"]);
        }
        
        foreach ($this->routes as $slug=>$info) {
            $this->slugs[$info["controller"]][$info["action"]] = $slug;
        }
        
    }
    
    public static function getInstance($uri = '') {
        if(is_null(self::$_instance)) {
            self::$_instance = new Routing($uri);
        }
        return self::$_instance;
    }
    
    
    public function setController($controller){
        $this->controller=$controller;
    }
    
    public function setAction($action){
        $this->action=$action."Action";
    }

    public function setTitle($title){
        self::$title=$title;
    }
    
    public function getController(){
        return $this->controller;
    }
    
    public function getAction(){
        return $this->action;
    }
    
    public static function getTitle() {
        return self::$title;
    }
    
    /**
     * getControllerWithNamespace
     * @return void
     * Returns the name of the controller in the default namespace
     */
    public function getControllerWithNamespace(){
        return "\\App\\".$this->controller;
    }
    
    /**
     * @return mixed
     */
    public static function getActualTitle() {
        return self::getTitle();
    }
    
    /**
     * getBaseUrl
     * @return string
     * Returns the base url on which we are located
     */
    public static function getBaseUrl() {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    }

    public static function redirectTo404() {
        header("HTTP/1.0 404 Not Found");

        header('location: 404');
    }

    /**
     * @param $responseCode
     * @param string $messageSent
     * Display of an error page with the error code and the corresponding message
     */
    public static function errorPage($responseCode, $messageSent = ""){
        $responseMessage = $messageSent !== "" ? $messageSent : self::$_responseCodes[strval($responseCode)];
        header($responseMessage, true, $responseCode);
        $view = new View("Error/error_page", "error");
        $view->assign('responseCode', $responseCode);
        $view->assign('responseMessage', $responseMessage);
    }
    
    /**
     * getUri
     * @param  mixed $controller
     * @param  mixed $action
     * @return void
     * If the controller and the action are retrieved from the routes.yml file, we return the controller and the action
     */
    public function getUri($controller, $action){
        if(!empty($this->slugs[$controller]) && !empty($this->slugs[$controller][$action]))
            return $this->slugs[$controller][$action];
            
            die("No route for ".$controller." -> ".$action );
    }

    public static function getActualUri() {
        return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    
}