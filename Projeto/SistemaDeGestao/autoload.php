<?php
    /* Código responsável por percorrer todas as classes existentes no projeto e integra-las */
    spl_autoload_register(function($class){ //Pega como parametro o nome da classe
        $base_dir = __DIR__ . '/';
        $file = $base_dir . str_replace('\\','/',$class) . '.php'; //Monta o link necessário para inserir a classe dentro do projeto
        if(file_exists($file)){
            require_once $file; //Insere a classe
        }
    })


?>