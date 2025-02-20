<?php

function env(string $valueTarget, string $alternativeValue){
    # Esse arquivo inicia as configurações de variaveis de ambiente
    $dotenv = parse_ini_file(dirname(__FILE__,3). DIRECTORY_SEPARATOR.".env");

    return define($valueTarget,isset($dotenv[$valueTarget])?$dotenv[$valueTarget]:$alternativeValue);
}

// Configuração de CONSTANTES para o banco de dados
env("DB_HOST","127.0.0.1");

env("DB_CONNECTION","sqlite");

env("DB_PORT","3306");

env("DB_DATABASE","");

env("DB_USERNAME","root");

env("DB_PASSWORD","");
