<?php

namespace App\Models\Entity;

/* Classe com os atributos do cliente */
class User{
    private $id_user;
    private $name_user;
    private $email_user;
    private $phone_user;
    private $password_user;
    private $function_user;

    public function getId()
    {
        return $this->id_user;
    }


    public function setId($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

  


    public function getName()
    {
        return $this->name_user;
    }


    public function setName($name_user)
    {
        $this->name_user = $name_user;

        return $this;
    }

  


    public function getEmail()
    {
        return $this->email_user;
    }


    public function setEmail($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }



    public function getPhone()
    {
        return $this->phone_user;
    }

    public function setPhone($phone_user)
    {
        $this->phone_user = $phone_user;

        return $this;
    }



    public function getPassword()
    {
        return $this->password_user;
    }

    public function setPassword($password_user)
    {
        $this->password_user = $password_user;

        return $this;
    }


 
    public function getFunction()
    {
        return $this->function_user;
    }

    public function setFunction($function_user)
    {
        $this->function_user = $function_user;

        return $this;
    }
}


?>
