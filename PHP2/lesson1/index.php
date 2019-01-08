<?php

class Item
{
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function setPrice($price) {
        return $this->price = $price;
    }

    public function getName() {
        return $name = $this->name;
    }

    public function getPrice() {
        return $price = $this->price;
    }

    function show() {
        return "Name - " . $this->getName() . "Price - " . $this->getPrice();
    }
}

class Item2 extends Item
{
    private $parameter;

    function __construct($name, $price, $parameter) {
        parent::__construct($name, $price);
        $this->setParam($parameter);
    }


    public function setParam($parameter) {
        return $this->parameter = $parameter;
    }

    public function getParam() {
        return $parameter = $this->parameter;
    }


    function show() {
        return "Name - " . $this->getName() . "Price - " . $this->getPrice(). "Parameter".$this->getParam();
    }
}

class Item3 extends Item2
{
    private $parameter2;

    function __construct($name, $price,$parameter, $parameter2) {
        parent::__construct($name, $price,$parameter);
        $this->setParam($parameter2);
    }


    public function setParam($parameter2) {
        return $this->parameter2 = $parameter2;
    }

    public function getParam() {
        return $parameter2 = $this->parameter2;
    }


    function show() {
        return "Name - " . $this->getName() . " Price - " . $this->getPrice(). " Parameter - ".$this->getParam();
    }
}

$cl = new Item("dddd", 120);
$cl2 = new Item2("ccccc", 121, 5555);
$cl3 = new Item3("dfd", 122, 5555, 7777);

echo $cl2->show();