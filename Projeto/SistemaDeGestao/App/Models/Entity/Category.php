<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Category{
    private $id_category;
    private $name_category;


    public function getId()
    {
        return $this->id_category;
    }


    public function setId($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }

  


    public function getName()
    {
        return $this->name_category;
    }


    public function setName($name_category)
    {
        $this->name_category = $name_category;

        return $this;
    }


}


?>
