<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Comment{
    private $id;
    private $name;
    private $comment;

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


    public function getComment()
    {
        return $this->comment;
    }


    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }


}


?>
