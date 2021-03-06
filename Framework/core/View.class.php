<?php

class View{
    
    private $viewLoader = null;

    public function __construct($viewLoader){
        $this->viewLoader = $viewLoader;
    }

    public function display($viewName){
        echo $this->viewLoader->load($viewName);
    }
}