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
        $quantity = $params[1];
        $product = $productDao->findById($id);
        
        $cartDAO = new CartDAO();
        $cartEntity = new Cart();
        $cartEntity->setProductId($id);
        $cartEntity->setQuantity($quantity);
        $cartDAO->saveDates($cartEntity);
        $this->setViewVar('product', $product);

        $this->render('Layout/Portfolio/detailProduct');
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