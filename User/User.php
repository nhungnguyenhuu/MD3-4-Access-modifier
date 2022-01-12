<?php

class User
{
    protected $name;
    protected $email;
    public $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = 1;
    }

    public function getInfo()
    {
        return $this->name."<br>".$this->email;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function isAdmin($name, $role)
    {
        if($role==1){
            return $this->setName($name)." "."la admin";
        }
        return $this->setName($name)." "."la nguoi binh thuong";
    }
}