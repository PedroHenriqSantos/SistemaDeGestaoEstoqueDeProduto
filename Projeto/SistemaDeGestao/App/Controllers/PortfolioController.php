<?php

namespace App\Controllers;
use App\Models\DAO\ProductDAO;
use App\Models\DAO\CartDAO;
use App\Models\DAO\CommentDAO;

use App\Models\Entity\Cart;
use App\Models\Entity\Comment;

 class PortfolioController extends Controller{
    private $view_var; 

    public function index(){ 
        $productDao = new ProductDAO();
        if(isset($_POST["search"])){
            $products = $productDao->findByName($_POST["search"]);
        }else{

            $products = $productDao->findAll();
        }
        $this->setViewVar('products', $products);
        $productsRanking =  $productDao->findAllRanking();
        $this->setViewVar('productsRanking',$productsRanking);
        $this->render('Layout/Portfolio/list',"Portfolio/header");
    }

    public function productDetail($params){
        $productDao = new ProductDAO();

        $id = $params[0];
        $success = isset($params[1]) ? $params[1] : '';
        if($success == "success"){
            $this->setViewVar('successComment','Comentário cadastrado com sucesso'); 
        }else if($success == "error"){
            $this->setViewVar('errorComment','Error ao cadastrar comentário, verifique o nome e o comentário'); 
        }
        $product = $productDao->findById( $id );
        $this->setViewVar('product',$product);


        $comments = $this->commentsProduct($id);
        $this->setViewVar('comments',$comments);

        $this->render('Layout/Portfolio/detailProduct',"Portfolio/header");
    }
    public function saveCart($params){
        $id  = $params[0];
        if(!isset($_COOKIE["Carrinho"]) ||  $_COOKIE["Carrinho"] == null){
            setcookie("Carrinho",json_encode(array($id)), time() + 3600,"/");
        }else{
            $products = json_decode($_COOKIE["Carrinho"]);
            if(!in_array($id,$products)){
                $products[] = $id; 
                setcookie("Carrinho", json_encode($products), time() + 3600,"/");
            }
        }
        $this->productDetail($params);
    }

    public function commentsProduct($id){
        $commentDAO = new CommentDAO();
        $comments = $commentDAO->findByProduct($id);
        return $comments;
    }

   
    
}
