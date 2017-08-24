<?php
    //echo "hello from my site";

    //require('../views/hello.php');

    /*require('../core/view/viewLoader.class.php');
    require('../core/view/view.class.php');
    
    $viewPath = __DIR__.'/../views/';

   /* $viewLoader = new ViewLoader($viewPath);
    $view = new View($viewLoader);
    
    $view->display('hello.php');*/

    require('../bootstrap.php');
    require('../routes.php');
    
    $router->dispatch();