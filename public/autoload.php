<?php

spl_autoload_register(
    function($nomeCompletoDaClasse){
        $caminhoCompleto = str_replace("william\\Estudos","src",$nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR,$caminhoCompleto);
        $caminhoArquivo .= ".php";
        if(file_exists($caminhoArquivo)){
            require_once $caminhoArquivo;
        }
    }
);