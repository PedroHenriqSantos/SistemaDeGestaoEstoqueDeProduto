<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Category{
    private $id;
    private $name;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

  


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


}


?>
