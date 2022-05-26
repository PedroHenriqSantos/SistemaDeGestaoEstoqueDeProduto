<?php

    namespace App\Controllers;

    use App\Models\DAO\CategoryDAO;
    use App\Models\Entity\Category;

    class CategoryController extends Controller{


        public function register(){
            $this->render('Layout/Category/cadastro');
        }
        public function list(){
            $this->setViewVar('categorys',$this->get());
            $this->render('Layout/Category/list');
        }
        public function get(){
            $category = new CategoryDAO();
            return $category->findAll();

        }
        public function edit($params){
            $id = $params[0];
            $categoryDAO = new CategoryDAO();
            $category = $categoryDAO->findById($id);
            $this->setViewVar('category',$category); 
            $this->render('Layout/Category/edit');
        }
        public function search(){
            $id = $_POST['idSearch'];
            $categoryDAO = new CategoryDAO();
            $category = $categoryDAO->findById($id);
            $this->setViewVar('category',$category); 
            $this->render('Layout/Category/edit');
        }
        public function post(){
            if(isset($_POST['bt_save'])){
                $newCategory = new Category();
                $categoryDAO = new CategoryDAO();

                if($this->validateFields($categoryDAO->getFields())){
                    $newCategory->setName($_POST['name_category']);
                    $categoryDAO->saveDates($newCategory);
                    $this->setViewVar('error','');

                }
                $this->register();
            }       

        }

        public function update(){
            if(isset($_POST['bt_save'])){
                $newCategory = new Category();
                $categoryDAO = new CategoryDAO();

                if($this->validateFields($categoryDAO->getFields())){
                    $newCategory->setId($_POST['id_category']);
                    $newCategory->setName($_POST['name_category']);
                    $categoryDAO->updateByID($newCategory);
                    $this->setViewVar('error','');

                }
                $params = array($_POST['id_category']);
                $this->edit($params);
            }    
        }
        public function delete($params){
            $categoryDAO = new CategoryDAO();
            $id = $params[0];
            $newCategory = new Category();
            $newCategory->setId($id);
            $categoryDAO->deleteById($newCategory);
            $this->list();
        }


    }



?>
