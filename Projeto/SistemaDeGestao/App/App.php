<?php

    namespace App;
    use App\Controllers\HomeController;

    /* Classe responsável por determinar qual controller deve ser chamado */
    class App{
        
        private $controller;
        private $controller_file;
        private $action;
        private $params;
        private $controller_name;

        public function __construct(){
            $this->url();
        }

        /* Função que determina qual controller será chamado/ Qual ação será executada dentro do controller e qual página será carregada por meio da url*/
        public function run(){

  
            //Chamando o controller do User 
            if($this->controller == 'user' || $this->controller == 'category' || $this->controller == 'product'){
                $this->controller_name = ucwords($this->controller) . 'Controller';
            }
            else{
                /*$this->controller_name = "HomeController";
                $this->controller = new HomeController();
                $this->controller->index();*/
            }

            $this->controller_file = PATH . '/App/Controllers/' . $this->controller_name . '.php'; //URL para encontrar o controller de
            
            //Caso o controller não exista o processo morre
            if(!file_exists($this->controller_file)){
                echo "Error: Pagina nao encontrada";
                die();
            }
      
            $nameclass = "\\App\\Controllers\\" . $this->controller_name; //Cria o nome da classe procurada
      
            //Caso a classe não exista o processo morre
            if(!class_exists($nameclass)){
                echo "Error na aplicação";
                die();
            }
            //Instancia o controller
            $this->controller = new $nameclass();
            //Caso a ação fornecida ao controller exista essa é executada -Carrega o HTML

            if(method_exists($this->controller,$this->action)){
                $this->controller->{$this->action}($this->params);

            }else if(method_exists($this->controller,"index")){
               // $this->controller->index();
             
            }
           

        }

        /* Função responsável por retirar os valores que a url traz */
        public function url(){

            if(isset($_GET['url'])){

                $path = $_GET['url'];
                $path = rtrim($path,'/'); //Retira a barra do final da string
                $path = filter_var($path, FILTER_SANITIZE_URL); //Retira apenas o necessário da url 
                
                $path = explode('/', $path); //Separa a string por cada / que aparecer e insere em um array

                //Assim o Path estará constituido em: path[0] = 'controller'; path[1] = 'ação do controller'; $path[2..] = 'parametros como o id'
                
                $this->controller = isset($path[0])? $path[0]: null; 
                $this->action = isset($path[1])? $path[1]: null;

                if(isset($path[2])){
                    //limpa as posições 0 e 1
                    unset( $path[0] );
                    unset( $path[1] );
    
                    //array em forma de índice
                    $this->params = array_values( $path );
                }

    
            
            }
        }



    }


?>