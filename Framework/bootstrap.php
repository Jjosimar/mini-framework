<?php

    require('config.php');
    require('core/autoload/autoload.class.php');
   
    /*$autoloader = new Autoload();

    spl_autoload_register([$autoloader, 'load']);

    $autoloader->register('viewloader', function(){
        return require(BASEPATH.'/core/view/viewLoader.class.php');
    });

    $view = new View( new ViewLoader(BASEPATH.'/views/') );*/


        
    $autoloader = new Autoload();

    $autoloader->register('view', function(){
        return require(BASEPATH . '/core/view/view.php');
    });

    $autoloader->register('viewloader', function(){
        return require(BASEPATH . '/core/view/viewLoader.php');
    });

    spl_autoload_register([$autoloader, 'load']);


