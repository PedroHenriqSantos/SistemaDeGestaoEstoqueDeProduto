<?php

namespace App\Controllers;

use App\Models\DAO\ProductDAO;
use App\Models\DAO\CommentDAO;
use App\Models\Entity\Product;
use App\Models\DAO\UserDAO;

/* Classe responsável por integrar o Model do usuário (UserDAO) com a view do site */

class ProductController extends Controller
{
    

    public function register()
    {
        $categoryDAO = new CategoryController();
        $this->setViewVar('categorys', $categoryDAO->get());
        $this->render('Layout/Product/cadastro');
        
    }
    public function list()
    {
        $this->setViewVar('products',$this->get());
        $this->render('Layout/Product/list');
        
    }
    public function edit($params){
        $id = $params[0];
        $productDAO = new ProductDAO();
        $product = $productDAO->findById($id);
        $this->setViewVar('product',$product); 
        $categoryDAO = new CategoryController();
        $this->setViewVar('categorys', $categoryDAO->get());
        $this->render('Layout/Product/edit');
    }

    public function search(){
        $id = $_POST['idSearch'];
        $productDAO = new ProductDAO();
        $product = $productDAO->findById($id);
        $this->setViewVar('product',$product); 
        $categoryDAO = new CategoryController();
        $this->setViewVar('categorys', $categoryDAO->get());
        $this->render('Layout/Product/edit');
    }

    public function delete($params){
        $productDAO = new ProductDAO();
        $id = $params[0];
        $product = new Product();
        $product->setId($id);
        $productDAO->deleteById($product);
        $this->list();
    }
    public function get()
    {
        $productDAO = new ProductDAO();
        return $productDAO->findAll();
    }

    public function uploadImage()
    {
        $filename = $_FILES["image_product"]["name"];

        $tempname = $_FILES["image_product"]["tmp_name"];

        $folder = "App/Uploads/" . $filename;

        if (!move_uploaded_file($tempname, $folder)) {
            return '';
        }
        return $filename;
    }
    public function validateFieldsWithFile($fields) {

        if(!isset($_FILES["image_product"]["name"])){
            $this->setViewVar('error','Upload da imagem não foi possível realizar');
            return false;
        }
        return $this->validateFields($fields);
        return true;
    }
    public function post()
    {
        if (isset($_POST['bt_save'])) {
            $productDAO = new ProductDAO(); 
            if($this->validateFieldsWithFile($productDAO->getFields())){ 
                $product = new Product();
                $product->setName($_POST['name_product']);
                $product->setDescription($_POST['description_product']);
                $product->setPrice($_POST['price_product']);
                $product->setQuantity($_POST['quantity_product']);
                $product->setIdCategory($_POST['category_product']);
                $uploadImage = $this->uploadImage($_FILES);
                $product->setImage($uploadImage);
                $id = $productDAO->saveDates($product);
                $this->setViewVar('error','');
            }
            $this->register();
        }
    }

    public function update(){



        if(isset($_POST['bt_save'])){
            $productDAO = new ProductDAO();
            $product = new Product();

            if($this->validateFields($productDAO->getFields())){
                $product->setId($_POST['id_product']);
                $product->setName($_POST['name_product']);
                $product->setDescription($_POST['description_product']);
                $product->setPrice($_POST['price_product']);
                $product->setQuantity($_POST['quantity_product']);
                $product->setIdCategory($_POST['category_product']);
                $uploadImage = $this->uploadImage($_FILES);
                $product->setImage($uploadImage);
                $productDAO->updateByID($product);
                $this->setViewVar('error','');
            } 
            $params = array($_POST['id_product']);
            $this->edit($params);
        }
    }


}
