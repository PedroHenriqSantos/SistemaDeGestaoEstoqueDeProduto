<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Sale{
    private $id_sale;
    private $fk_id_cart;
    private $fk_id_client;
    private $typeUser_sale;

    public function getId()
    {
        return $this->id_sale;
    }


    public function setId($id_sale)
    {
        $this->id_sale = $id_sale;

        return $this;
    }

  


    public function getIdCart()
    {
        return $this->fk_id_cart;
    }


    public function setIdCart($fk_id_cart)
    {
        $this->fk_id_cart = $fk_id_cart;

        return $this;
    }

    public function getIdClient()
    {
        return $this->fk_id_client;
    }


    public function setIdClient($fk_id_client)
    {
        $this->fk_id_client = $fk_id_client;

        return $this;
    }

    public function getTypeuser()
    {
        return $this->typeUser_sale;
    }


    public function setTypeuser($typeUser_sale)
    {
        $this->typeUser_sale = $typeUser_sale;

        return $this;
    }
}


?>
