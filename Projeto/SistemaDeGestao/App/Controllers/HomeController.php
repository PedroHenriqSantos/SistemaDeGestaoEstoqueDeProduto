<?php

namespace App\Controllers;
use App\Models\DAO\UserDAO;
use App\Models\Entity\User;

 class LoginController extends Controller{
    private $view_var; 

    public function register(){
       
        $this->render('Layout/Login/login');
    }

   
   
    
}


?>