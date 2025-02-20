<?php

function callController(string $controller,string $method){
    try{
        $controllerNameSpace = "src\\controllers\\{$controller}";

        // echo $controllerNameSpace;
        // new src\controllers\MainControllers();
        if(!class_exists($controllerNameSpace)){
            throw new Exception("CONTROLADOR NÃO EXISTE");
        }

        $controlador = new $controllerNameSpace();

        if(!method_exists($controlador,$method)){
            throw new Exception("METHOD {$method} IS NOT DEFINED IN ROUTERS.PHP");
        }

        $controlador->$method((object) $_REQUEST);

    }catch(Exception $e){
        echo $e->getMessage();
    }
    
}


$router = [
    "/" => [
        "GET" => fn() => callController("MainController","index")
    ]
    
];



define("ROUTER",$router);
