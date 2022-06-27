<?php

    namespace App\Controllers;

    use App\Models\DAO\UserDAO;
    use App\Models\Entity\User;
    use App\Models\DAO\SaleDAO;
    use App\Models\Entity\Sale;

    /* Classe responsável por integrar o Model do usuário (UserDAO) com a view do site */
    class UserController extends Controller{


        public function register(){
            $this->render('Layout/User/cadastro');
        }
        public function list(){
            $userDAO = new UserDAO();
            if(isset($_POST["search"])){
                $users = $userDAO->findByName($_POST["search"]);
            }else{
    
                $users = $userDAO->findAll();
            }
            $this->setViewVar('users',$users);
            $this->render('Layout/User/list');
        }
        public function principal(){

            $newSaleDAO = new SaleDAO();
            $user = $this->getUserLogin();
            $sales = $newSaleDAO->findAllSaleWithClientAndCart($user->getFunction());
            
            $this->setViewVar('sales',$sales);

            $this->render('Layout/User/principal');
        }

        public function changeTypeSale($params){
            $userType = $params[0];
            $idSale = $params[1];
            $saleDao = new SaleDAO();
            if($userType === "NORMAL"){
                $updateSale = $saleDao->findById($idSale);
                $updateSale->setTypeuser("MASTER");
                $saleDao->updateByID( $updateSale);
                $this->setViewVar('successChange',"Venda enviada para o master");
            }else if($userType === "MASTER"){
                $sale = new Sale();
                $sale->setId($idSale);
                $saleDao->deleteByID($sale);
                $this->setViewVar('successChange',"Venda finalizada");

            }
            $this->principal();

        }

        public function edit($params){
            $id = $params[0];
            $newUserDAO = new UserDAO();
            $user = $newUserDAO->findById($id);
            $this->setViewVar('user',$user); 
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
                    $newUser->setName($_POST['name_user']);
                    $newUser->setEmail($_POST['email_user']);
                    $newUser->setPhone($_POST['phone_user']);
                    $newUser->setPassword($_POST['password_user']);
                    $newUser->setFunction($_POST['function_user']);
                    $newUserDAO->saveDates($newUser);
                    $this->setViewVar('error','');

                }

                $this->register();
            }       

        }

        public function update(){
            if(isset($_POST['bt_save'])){
                $newUser = new User();
                $newUserDAO = new UserDAO();
                if($this->validateFields($newUserDAO->getFields())){
                    $newUser->setId($_POST['id_user']);
                    $newUser->setName($_POST['name_user']);
                    $newUser->setEmail($_POST['email_user']); 
                    $newUser->setPhone($_POST['phone_user']);
                    $newUser->setPassword($_POST['password_user']);
                    $newUser->setFunction($_POST['function_user']);
                    $newUserDAO->updateByID($newUser);
                    $this->setViewVar('error','');
                } 
                $params = array($_POST['id_user']);
                $this->edit($params);
            }    
        }


    }



?>
