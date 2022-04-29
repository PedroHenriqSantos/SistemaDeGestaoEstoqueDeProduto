<?php

    namespace App\Controllers;

    use App\Models\DAO\CategoryDAO;
    use App\Models\Entity\Category;

    /* Classe responsável por integrar o Model do usuário (UserDAO) com a view do site */
    class CategoryController extends Controller{


        public function register(){
            $this->render('Layout/Category/cadastro');
        }

        public function get(){
            $category = new CategoryDAO();
            return $category->findAll();

        }
        public function post(){
            if(isset($_POST['bt_save'])){
                $newUser = new Category();
                $categoryDAO = new CategoryDAO();

                if($this->validateFields($categoryDAO->getFields())){
                    $newUser->setName($_POST['name']);
                    $categoryDAO->saveDates($newUser);
                }
                $this->register();
            }       

        }

        public function update(){

        }


    }



?>
