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
        $products = $productDao->findAll();
        $this->setViewVar('products', $products);
        $this->render('Layout/Portfolio/list',"Portfolio/header");
    }

    public function productDetail($params){
        $productDao = new ProductDAO();
        $id = $params[0];
        
        $product = $productDao->findById( $id );
        $this->setViewVar('product',$product);
        $comments = $this->commentsProduct($id);
        $this->setViewVar('msg','Error ao cadastrar um comentário, verifique o nome e o comentário'); 
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

    public function successComment($params){
        $this->setViewVar('msg',''); 
        

        $this->productDetail($params);
    }
    public function commentsProduct($id){
        $commentDAO = new CommentDAO();
        $comments = $commentDAO->findByProduct($id);
        return $comments;
    }
   
    
}


?>