<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Avaliation{
    private $id_avaliation;
    private $rate_avaliation;
    private $fk_id_product ;

    public function getId()
    {
        return $this->id_avaliation;
    }


    public function setId($id_avaliation)
    {
        $this->id_avaliation = $id_avaliation;

        return $this;
    }

  


    public function getRate()
    {
        return $this->rate_avaliation;
    }


    public function setRate($rate_avaliation)
    {
        $this->rate_avaliation = $rate_avaliation;

        return $this;
    }

    public function getProductId()
    {
        return $this->fk_id_product;
    }


    public function setProductId($fk_id_product)
    {
        $this->fk_id_product = $fk_id_product;

        return $this;
    }
}


?>
