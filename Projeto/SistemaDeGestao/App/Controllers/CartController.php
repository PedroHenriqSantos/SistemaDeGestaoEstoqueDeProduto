<?php

namespace App\Controllers;
use App\Models\DAO\ClientDAO;
use App\Models\Entity\Client;
 class CartController extends Controller{
    private $view_var; 

    public function buy(){
       
        $this->render('Layout/Cart/cart');
    }

    public function sendCart(){
        if(isset($_POST['bt_save'])){
            $newClient = new Client();
            $newClientDAO = new ClientDAO();
            if($this->validateFields($newClientDAO->getFields())){
                $newClient->setName($_POST['name']);
                $newClient->setEmail($_POST['email']);
                $newClient->setPhone($_POST['phone']);
                $newClient->setStreet($_POST['street']);
                $newClient->setDistrict($_POST['district']);
                $newClient->setNumber($_POST['number']);

                $newClientDAO->saveDates($newClient);
            }

        }
        $this->render('Layout/Cart/cart');
 
    }

   
   
    
}
