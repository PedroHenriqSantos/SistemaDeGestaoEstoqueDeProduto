<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Cart{
    private $id;
    private $productId;
    private $quantity;

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

  


    public function getProductId()
    {
        return $this->productId;
    }


    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}


?>
