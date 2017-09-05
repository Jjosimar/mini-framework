<?php

    require('../config.php');
    require('../core/autoload.class.php');


    $autoLoad = new Autoload();
    $autoLoad->setPath(ROOT);
    $autoLoad->setSufix('.class');

    spl_autoload_register(array($autoLoad, 'loadCore'));
    spl_autoload_register(array($autoLoad, 'loadController'));

    

    $router = new Router();

    require('../routes.php');

    $router->dispatch();
    
 