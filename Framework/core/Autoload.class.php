<?php

class Autoload{

    private $sufix;

    public function register($name, $loader = false){
        if( is_callable($loader) || $loader == false){
            $this->autoloadable[$name] = $loader;
            return;
        }
        throw new Exception('Loader must be callable '.$name);
    }

    public function load($name){
        $name = strtolower($name);
        $filepath = BASEPATH.'/core/'.$name.'/'.$name.'.class.php';
        if( !empty($this->autoloadable[$name]) ){
            return $this->autoloadable[$name]($name);
        }
        if( file_exists($filepath) ){
            return require($filepath);
        }
        throw new Exception($name.' is not loaded or registred for autoloading');
        
    }

    public function setPath($path){
        set_include_path($path);
    }

    public function setSufix($sufix){
        $this->sufix = $sufix;
    }

    public function loadController($className){
        $file = get_include_path().DS.'app'.DS.'controller'.DS.$className. $this->sufix . '.php';
       
        if(is_readable($file)){
            include $file;
        }
    }

       public function loadCore($className){
        $file = get_include_path().DS.'core'.DS.$className. $this->sufix . '.php';
        if(is_readable($file)){
            include $file;
        }
    }
  
}