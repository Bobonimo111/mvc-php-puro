<?php

// Importa o arquivo de rotas
require_once dirname(__FILE__,1) ."/routers.php";


try {
    $request_uri = $_SERVER["REQUEST_URI"];
    $request_method = $_SERVER["REQUEST_METHOD"];   
    
    echo"<br>" .$request_uri;

    if(strlen($request_uri) > 1){
        if($request_uri[strlen($request_uri)-1] == "/"){
            $request_uri = substr($request_uri,0,strlen($request_uri)-1);
        }
    }

    echo"<br>" .$request_uri."<br>";

    //Verifica se a rota existe
    if(!isset(ROUTER[$request_uri])){
        throw new Exception("ROTA NÃO ENCONTRADA");
    }

    //Verifica se o methodo existe na rota
    if(!isset(ROUTER[$request_uri][$request_method])){
        throw new Exception("ROTA NÃO ENCONTRADA");
    }


    $controller = ROUTER[$request_uri][$request_method];
    $controller();

} catch (Exception $e) {
    echo $e->getMessage();
}

