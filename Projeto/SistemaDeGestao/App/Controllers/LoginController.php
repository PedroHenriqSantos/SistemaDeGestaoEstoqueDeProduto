<?php

namespace App\Controllers;
use App\Models\DAO\UserDAO;
use App\Models\Entity\User;

 class LoginController extends Controller{
    public function login(){
        
        $this->validate();
        $this->render('Layout/Login/login','Login/header');
    }
    public function validate(){

        if (isset($_POST['bt_login'])) {
            $userEntity = new User();
            $userEntity->setEmail($_POST['email_user']);
            $userEntity->setPassword($_POST['password_user']);
            $userRepository = new UserDAO();
            $user = $userRepository->findByEmailAndPassword($userEntity);
            if(!$user){
                $this->setViewVar("error","E-mail ou senha incorreta");
            }else{
                $_SESSION['logado'] = true;
                $_SESSION['idUser'] = $user->getId();
                $this->redirectToUrl("/user/principal");
            }
        }
        
    }
   
    
}


?>