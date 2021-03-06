<?php

namespace App\Controllers;

use App\Models\DAO\CartDAO;
use App\Models\DAO\ClientDAO;
use App\Models\DAO\SaleDAO;
use App\Models\Entity\Client;
use App\Models\Entity\Cart;
use App\Models\Entity\Sale;
use App\Models\DAO\ProductDAO;
 class CartController extends Controller{
    private $view_var; 

    public function buy(){
        $products = array();

        if( isset($_COOKIE["Carrinho"]) && $_COOKIE["Carrinho"] != null){  
                $products = $this->getProductsInCookie(json_decode($_COOKIE["Carrinho"]));
        }
        $this->setViewVar('products',$products);
        $this->render('Layout/Cart/cart',"Portfolio/header");
    }
    public function getProductsInCookie($productsId){
        $productDao = new ProductDAO();
        $products = array();
        foreach($productsId as $id){
            $products[] = $productDao->findById( $id);
        }
        return $products;
    }
    public function sendCart(){
        if(isset($_POST['bt_save'])){
            $newClient = new Client();
            $newClientDAO = new ClientDAO();

            if($this->validateFields($newClientDAO->getFields())){
                $newClient->setName($_POST['name_client']);
                $newClient->setEmail($_POST['email_client']);
                $newClient->setPhone($_POST['phone_client']);
                $newClient->setStreet($_POST['street_client']);
                $newClient->setDistrict($_POST['district_client']);
                $newClient->setNumber($_POST['number_client']);
                $idClient = $newClientDAO->saveDates($newClient);
          
                $newCartDAO = new CartDAO();
                $newSaleDAO = new SaleDAO();
                $products = $_POST["idProduct"];
                $qtds = $_POST["qtd"];
                for($i =0 ; $i <  count($products) ; $i++){
                    $newCart = new Cart();
                    $newCart->setProductId($products[$i]);
                    $newCart->setQuantity($qtds[$i]);
                    $idCart = $newCartDAO->saveDates($newCart);
                    $newSale = new Sale();
                    $newSale->setIdCart($idCart);
                    $newSale->setIdClient($idClient);
                    $idSale = $newSaleDAO->saveDates($newSale);
                    $this->setViewVar('error','');
                }
                unset($_COOKIE['Carrinho']); 
                setcookie("Carrinho",json_encode(array()), time() + 3600,"/");

            }

        }
        $this->buy();
  
    }

   
   
    
}
