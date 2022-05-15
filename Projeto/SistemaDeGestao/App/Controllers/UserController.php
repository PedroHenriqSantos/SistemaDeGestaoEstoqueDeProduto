<?php

    namespace App\Controllers;

    use App\Models\DAO\UserDAO;
    use App\Models\Entity\User;

    /* Classe responsável por integrar o Model do usuário (UserDAO) com a view do site */
    class UserController extends Controller{


        public function register(){
            $this->render('Layout/User/cadastro');
        }
        public function list(){
            $this->setViewVar('users',$this->get());
            $this->render('Layout/User/list');
        }
        public function principal(){
            $this->render('Layout/User/principal');
        }
        public function edit($params){
            $id = $params[0];
            $newUserDAO = new UserDAO();
            $user = $newUserDAO->findById($id);
            $this->setViewVar('user',$user[0]); 
            $this->render('Layout/User/edit');
        }
        public function get(){
            $userDAO = new UserDAO();
            return $userDAO->findAll();
        }
        public function delete($params){
            $userDAO = new UserDAO();
            $id = $params[0];
            $newUser = new User();
            $newUser->setId($id);
            $userDAO->deleteById($newUser);
            $this->list();
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
            if(isset($_POST['bt_save'])){
                $newUser = new User();
                $newUserDAO = new UserDAO();
                if($this->validateFields($newUserDAO->getFields())){
                    $newUser->setId($_POST['id']);
                    $newUser->setName($_POST['name']);
                    $newUser->setEmail($_POST['email']);
                    $newUser->setPhone($_POST['phone']);
                    $newUser->setPassword($_POST['password']);
                    $newUser->setFunction($_POST['function']);
                    $newUserDAO->updateByID($newUser);
                } 

                $this->register();
            }    
        }


    }



?>
