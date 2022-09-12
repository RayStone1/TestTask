<?php

namespace Framework;

class Route
{
    static public $routes=[];

//  Поиск контроллероа
    public static function run($action){
        $controller=$action[0];
        $method=$action[1];
        $objectMethod=new $controller;
        $objectMethod->$method();
    }



//  GET
    static public function get($uri,$action){
        $method=$_SERVER['REQUEST_METHOD'];
        if($method == "GET" && $uri==$_SERVER['REQUEST_URI']){
            self::run($action);
            self::$routes[]=$uri;
        }

    }
//  POST
    static public function post($uri,$action){
        $method=$_SERVER['REQUEST_METHOD'];
        if($method == "POST" && $uri==$_SERVER['REQUEST_URI']){
            self::run($action);
            self::$routes[]=$uri;
        }
    }
}