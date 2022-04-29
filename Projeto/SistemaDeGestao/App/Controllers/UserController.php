<?php

    namespace App\Controllers;

    use App\Models\DAO\UserDAO;
    use App\Models\Entity\User;

    /* Classe responsável por integrar o Model do usuário (UserDAO) com a view do site */
    class UserController extends Controller{


        public function register(){
            $this->render('Layout/User/cadastro');
        }

        public function get(){
            $userDAO = new UserDAO();
            return $userDAO->findAll();
        }
        public function edit(){


        }
        public function post(){
            if(isset($_POST['bt_save'])){
                $newUser = new User();
                $newUserDAO = new UserDAO();
                if($this->validateFields($newUserDAO->getFields())){
                    $newUser->setName($_POST['name']);
                    $newUser->setEmail($_POST['email']);
                    $newUser->setPhone($_POST['phone']);
                    $newUser->setPassword($_POST['password']);
                    $newUser->setFunction($_POST['function']);
                    $newUserDAO->saveDates($newUser);
                }

                $this->register();
            }       

        }

        public function update(){

        }


    }



?>
