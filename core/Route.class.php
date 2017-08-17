<?php

namespace Core;

class Route{
    private $routes;

    public function _construct(array $routes){
        $this->routes = $routes;
        $this->run();
    }
    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function run(){
        echo $this->getUrl();
    }
}

?>