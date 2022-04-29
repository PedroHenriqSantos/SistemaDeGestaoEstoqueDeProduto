<?php

namespace App\Lib;

use PDO;
use PDOException;

    /* Classe responsável por realizar a conexão entre a aplicação e o banco de dados */
    class Connection{
        private static $connection;

        private function __construct(){}

        public static function getConnection(){
            
            $hots_config = DB_DRIVER . ':host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME; //Montando a configuração do host para integrar o banco de dados

            try{

                if(!isset(self::$connection)){
                
                    self::$connection = new PDO($hots_config, DB_USER, DB_PASSWORD); //Integra o banco de dados com o projeto
                    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }

                return self::$connection;



            }catch(PDOException $error){
                echo "ERROR: " . $error->getMessage();
            }
        }
        

    }


?>