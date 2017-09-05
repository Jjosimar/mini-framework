<?php

$router->add('/',function(){
    $usuario = new Usuario();
    $usuario->index();
});

//abstrat
/*
$router->add('nome',function(){
    $view->display('about.php');
});
*/
