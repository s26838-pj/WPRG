<?php


class Product {
    
    private $name;
    private $price;
    private $quantity;
    

    public function __construct($name, $price, $quantity) {
        
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    
    
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    
    
    
    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    
    
    
    public function __toString() {
        
        return "Produkt: " . $this->name . ", Cena: " . $this->price . ", Ilość: " . $this->quantity;
        
    }
    
}


class Cart {
    
    private $products;

    public function __construct() {
        $this->products = array();
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product) {
        
        foreach ($this->products as $index => $p) {
            
            if ($p->getName() === $product->getName() && $p->getPrice() === $product->getPrice() && 
                $p->getQuantity() === $product->getQuantity()) {
                
                array_splice($this->products, $index, 1);
                break;
                
            }
        }
    }

    
    public function getTotal() {
        
        
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total;
        
    }

    
    public function __toString() {
        
        if (empty($this->products)) {
            return "Koszyk jest pusty :(";
        }

        $productsDetails = "Produkty w koszyku:<br>";
        foreach ($this->products as $product) {
            $productsDetails .= $product->__toString() . "<br>";
        }
        $productsDetails .= "Cena całkowita: " . $this->getTotal();
        return $productsDetails;
    }
}



$laptop = new Product("Laptop", 4200, 1);
$smartphone = new Product("Smartphone", 1369, 2);
$headphones = new Product("Headphones", 299, 1);

$cart = new Cart();
$cart->addProduct($laptop);
$cart->addProduct($smartphone);
$cart->addProduct($headphones);

echo "Koszyk po dodaniu produktów:<br>";
echo $cart;


$cart->removeProduct($smartphone);

echo "<br><br>Koszyk po usunięciu smartfona:<br>";
echo $cart;


$cart->removeProduct($laptop);
$cart->removeProduct($headphones);

echo "<br><br>Koszyk po usunięciu wszystkich produktów:<br>";
echo $cart;



?>




