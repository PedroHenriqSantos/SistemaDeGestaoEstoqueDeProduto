<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Sale{
    private $id;
    private $idCart;
    private $idClient;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

  


    public function getIdCart()
    {
        return $this->idCart;
    }


    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }


    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }
}


?>
