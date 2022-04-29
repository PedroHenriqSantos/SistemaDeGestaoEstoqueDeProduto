<?php

    if(!isset($_SESSION))
    session_start();

    //ATENÇÃO: APP_HOST: a partir do servidor(pasta htdocs), qual a pasta que App está localizada
    //ARQUIVO DE CONFIGURAÇÃO DO PROJETO.
    define('APP_HOST'       , $_SERVER['HTTP_HOST'] . "/SistemaDeGestao");
    define('PATH', realpath('./'));
    define('TITLE'          , "Coffe Store ");
    define('DB_HOST'        , "localhost");
    define('DB_USER'        , "root");
    define('DB_PASSWORD'    , "");
    define('DB_NAME'        , "coffestore");
    define('DB_DRIVER'      , "mysql");
    define('DB_PORT'        , "3306");


    require PATH."/App/Models/Lib/Connection.php";
    require PATH."/App/Models/Entity/User.php";



?>