<?php

namespace App\Core;

use App\Core\Error;

class Framework {
    
    /**
     * @var string
     */
    protected $uri;

    /**
     * @var Router
     */
    protected $route;

    protected $unusedRoutes = [
        "public/Ressources/temp"
    ];

    public function __construct() {
        new ConstantManager();
        $uriExploded = explode("?", $_SERVER["REQUEST_URI"]);
        $uri = $uriExploded[0];
        $this->uri = $uri;
            $this->route = new Routing($this->uri);
    }

    public function run() {
        $controller = $this->route->getController();
        $action = $this->route->getAction();

        if( file_exists("./Controllers/".$controller.".php")) {

            include "./Controllers/".$controller.".php";
            
            $controller = "App\\" . str_replace('/', '\\', $controller);

            if(class_exists($controller)) {
                $cObject = new $controller();
        
                if(method_exists($cObject, $action)) {
                    $cObject->$action();
                } else {
                    Error::errorPage(404, "Page doesn't exist");
                }
            } else {
                Error::errorPage(404, "Page doesn't exist");
            }
        } else {
            Error::errorPage(404, "Page doesn't exist");
        }

    }

}