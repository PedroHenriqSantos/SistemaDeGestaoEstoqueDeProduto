<?php

require_once "config.php";
require_once "autoload.php";



use App\App;

try{
    //Inicia a aplicação por meio da instanciação da classe App
    $app = new App();
    $app->run();
}catch(Exception $error){

    echo "Error: " . $error->getMessage();
}
