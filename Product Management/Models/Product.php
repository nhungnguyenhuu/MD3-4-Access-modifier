<?php

namespace Models;
class Product
{
    private $name;
    private $price =0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

}