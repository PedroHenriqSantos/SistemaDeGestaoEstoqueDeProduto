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
        $this->setViewVar('product',$product[0]);
        $this->render('Layout/Portfolio/detailProduct',"Portfolio/header");
    }
    public function saveCart($params){
        $id  = $params[0];
        if(!isset($_COOKIE["Carrinho"]) ||  $_COOKIE["Carrinho"] == null){
            setcookie("Carrinho",json_encode(array($id)), time() + 3600);
        }else{
            $products = json_decode($_COOKIE["Carrinho"]);
            if(!in_array($id,$products)){
                $products[] = $id;
                setcookie("Carrinho", json_encode($products), time() + 3600);
            }
            var_dump( $products);die;

        }
        $this->productDetail($params);
    }

    public function sendComment(){
        if (isset($_POST['bt_save_comment'])) {
            $commentDAO = new CommentDAO();
            if($this->validateFields($commentDAO->getFields())){ 
                $comment = new Comment();
                $comment->setName($_POST['name']);
                $comment->setComment($_POST['comment']);
                $commentDAO->saveDates($comment);
                $this->setViewVar('msg','Comentário cadastrado com sucesso'); //Confirma que o registro foi feito com sucesso
            }
        }

        $this->render('Layout/Portfolio/detailProduct');
    }
   
    
}


?>