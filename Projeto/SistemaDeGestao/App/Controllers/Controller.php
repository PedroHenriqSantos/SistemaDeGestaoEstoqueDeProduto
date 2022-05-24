<?php

namespace App\Controllers;
use App\Models\DAO\UserDAO;

abstract class Controller{
    private $view_var; //Carrega os dados necessários que podem ser utilizados dentro da view

    //Função que constroi dinamicamente as páginas sem precisar repetir código
    public function render($view,$header = "header"){
        $this->view_var = $this->getViewVar();
        $this->setVarAllRender();
        require_once PATH . "/App/View/Layout/" . $header . ".php";
        require_once PATH . "/App/View/Layout/menu.php";
        require_once PATH . "/App/View/" . $view . ".php";
        require_once PATH . "/App/View/Layout/footer.php";

    }
    public function setVarAllRender(){
        if(isset($_SESSION['idUser'])){
            $userRepository = new UserDAO();
            $userLogin = $userRepository->findById($_SESSION['idUser']);
            $this->setViewVar('userLogin',$userLogin);
        }
    }
    public function getViewVar(){
        return $this->view_var;
    }
    
    public function validateFields($fields) {
        foreach($fields as $field){
            if( $_POST[$field] == " " || $_POST[$field] == ""){
                $this->setViewVar('error', $field . ' não foi preenchido');
                return false;
            }
        }
        
        return true;
    }

    
    //Função que redireciona para uma outra página
    public function redirectToView($view){
        header("Location: http://" . APP_HOST . "App/View/" . $view . ".php");
        exit;
    }
    public function redirectToUrl($url){
        header("Location: http://" . APP_HOST . $url);
        exit;
    }
    //Determina algum parâmetro ou atributo que pode ser utilizado dentro do html.
    public function setViewVar($var_name, $var_value){
        if(isset($var_name) && isset($var_value)){

            $this->view_var[$var_name] = $var_value;
        }
    }
    
}


?>