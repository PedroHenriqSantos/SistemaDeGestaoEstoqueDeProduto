<?php

namespace App\Controllers;
use App\Models\DAO\UserDAO;
use App\Models\Entity\User;

 class LoginController extends Controller{
    private $view_var; 

    public function login(){
        require_once PATH . "/App/View/Layout/Login/login.php";
    }

    public function validate(){
        if (isset($_POST['bt_login'])) {
            $userEntity = new User();
            $userEntity->setEmail($_POST['email']);
            $userEntity->setPassword($_POST['password']);
            $userRepository = new UserDAO();
            $isValid = $userRepository->findByEmailAndPassword($userEntity);
            if(!$isValid){
                $this->setViewVar('error','Email ou senha inválidos');
            }else{
                $_SESSION['logado'] = true;
                $this->redirectToUrl("/user/register");
            }
        }
        $this->render('Layout/Login/login');
    }
   
    
}


?>