<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class Comment{
    private $id_comment;
    private $name_comment;
    private $comment_comment;
    private $fk_id_product;

    public function getId()
    {
        return $this->id_comment;
    }


    public function setId($id_comment)
    {
        $this->id_comment = $id_comment;

        return $this;
    }

  


    public function getName()
    {
        return $this->name_comment;
    }


    public function setName($name_comment)
    {
        $this->name_comment = $name_comment;

        return $this;
    }


    public function getComment()
    {
        return $this->comment_comment;
    }


    public function setComment($comment_comment)
    {
        $this->comment_comment = $comment_comment;

        return $this;
    }


    public function getProduct()
    {
        return $this->fk_id_product;
    }


    public function setProduct($fk_id_product)
    {
        $this->fk_id_product = $fk_id_product;

        return $this;
    }


}


?>
