<?php

namespace App\Controllers;

use App\Models\DAO\ProductDAO;
use App\Models\Entity\Product;

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
        $this->setViewVar('product',$product[0]); 
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
        $filename = $_FILES["image"]["name"];

        $tempname = $_FILES["image"]["tmp_name"];

        $folder = "App/Uploads/" . $filename;

        if (!move_uploaded_file($tempname, $folder)) {
            return '';
        }
        return $filename;
    }
    public function validateFieldsWithFile($fields) {

        if(!isset($_FILES["image"]["name"])){
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
                $product->setName($_POST['name']);
                $product->setDescription($_POST['description']);
                $product->setPrice($_POST['price']);
                $product->setQuantity($_POST['quantity']);
                $product->setIdCategory($_POST['category']);
                $uploadImage = $this->uploadImage($_FILES);
                $product->setImage($uploadImage);
                $id = $productDAO->saveDates($product);
                $this->setViewVar('msg','Produto cadastrado com sucesso'); //Confirma que o registro foi feito com sucesso
            }
            $this->register();
        }
    }

    public function update(){
        if(isset($_POST['bt_save'])){
            $productDAO = new ProductDAO();
            $product = new Product();

            if($this->validateFields($productDAO->getFields())){
                $product->setId($_POST['id']);
                $product->setName($_POST['name']);
                $product->setDescription($_POST['description']);
                $product->setPrice($_POST['price']);
                $product->setQuantity($_POST['quantity']);
                $product->setIdCategory($_POST['category']);
                $uploadImage = $this->uploadImage($_FILES);
                $product->setImage($uploadImage);
                $productDAO->updateByID($product);
            } 

            $this->list();
        }    
    }
}
