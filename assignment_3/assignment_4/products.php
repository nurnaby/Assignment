<?php
class product{
    public int $id ;
    public string $name;
    public float $price;
    public function __construct($id,$name,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price= $price;
    }

    function getFormattedPrice(){
        return number_format($this->price, 2);
    }

    function showDetails(){
        echo "Product Details:<br>";
        echo "Product ID: {$this->id}<br>";
        echo "Product Name: {$this->name}<br>";
        echo "Product Name: {$this->getFormattedPrice()}";
    }
}

$product = new product(1,"T-shart",500);
$product->showDetails();






?>