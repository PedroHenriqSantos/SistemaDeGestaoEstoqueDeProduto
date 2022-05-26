<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Product{
    private $id_product;
    private $name_product;

    private $description_product;
    private $price_product;
    private $quantity_product;
    private $idCategory;
    private $image_product;
    private $avaliation_product;

    public function getId()
    {
        return $this->id_product;
    }


    public function setId($id_product)
    {
        $this->id_product = $id_product;

        return $this;
    }

  


    public function getName()
    {
        return $this->name_product;
    }


    public function setName($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getDescription()
    {
        return $this->description_product;
    }


    public function setDescription($description_product)
    {
        $this->description_product = $description_product;

        return $this;
    }

    public function getPrice()
    {
        return $this->price_product;
    }


    public function setPrice($price_product)
    {
        $this->price_product = $price_product;

        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity_product;
    }


    public function setQuantity($quantity_product)
    {
        $this->quantity_product = $quantity_product;

        return $this;
    }


    public function getIdCategory()
    {
        return $this->idCategory;
    }


    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    public function getImage()
    {
        return $this->image_product;
    }


    public function setImage($image_product)
    {
        $this->image_product = $image_product;

        return $this;
    }

    public function getAvaliation()
    {
        return $this->avaliation_product;
    }


    public function setAvaliation($avaliation_product)
    {
        $this->avaliation_product = $avaliation_product;

        return $this;
    }

}


?>
