<?php 
class Controller{

    private $viewPath;
    private $viewLoader;
    public $view;

    public function __construct(){
        $this->viewPath = __DIR__.'\\..\\views\\';
        $this->viewLoader = new ViewLoader($this->viewPath);
        $this->view = new View($this->viewLoader);
    }

}