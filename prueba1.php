<?php
 
abstract class Burger {
    private $description = "Not applicable";
 
    function getDescription() {
        return $this->description;
    }
 
    function setDescription($description) {
        $this->description = $description;
    }
 
    abstract function price();
}
 
class BeefBurger extends Burger {
 
    function __construct() {
        $this->setDescription('Beef Burger ');
    }
 
    function price() {
        return 7;
    }
}
 
class FishBurger extends Burger {
 
    function __construct() {
        $this->setDescription('Fish Burger ');
    }
 
    function price() {
        return 10;
    }
}
 
class ChickenBurger extends Burger {
 
    function __construct() {
        $this->setDescription('Chicken Burger ');
    }
 
    function price() {
        return 5;
    }
}
 
abstract class BurgerDecorator extends Burger{
    private $burger;
 
    function setBurger($burger) {
        $this->burger = $burger;
    }
 
    function getBurger() {
        return $this->burger;
    }
}
 
class ExtraPatty extends BurgerDecorator {
 
    function __construct($burger) {
        $this->setBurger($burger);
    }
 
    function getDescription() {
        return $this->getBurger()->getDescription().' +Extra Patty ';
    }
 
    function price() {
        return 3 + $this->getBurger()->price();
    }
}
 
class TarTarSauce extends BurgerDecorator {
 
    function __construct($burger) {
        $this->setBurger($burger);
    }
 
    function getDescription() {
        return $this->getBurger()->getDescription().' +TarTar Sauce ';
    }
 
    function price() {
        return 2 + $this->getBurger()->price();
    }
}
 
class CheeseSauce extends BurgerDecorator {
 
    function __construct($burger) {
        $this->setBurger($burger);
    }
 
    function getDescription() {
        return $this->getBurger()->getDescription().' +Cheese Sauce ';
    }
 
    function price() {
        return 1 + $this->getBurger()->price();
    }
}
 
class FrySauce extends BurgerDecorator {
 
    function __construct($burger) {
        $this->setBurger($burger);
    }
 
    function getDescription() {
        return $this->getBurger()->getDescription().' +Fry Sauce ';
    }
 
    function price() {
        return 1.5 + $this->getBurger()->price();
    }
}
 
function main() {
    $burger = new BeefBurger();
 
    $extraPatty = new ExtraPatty($burger);
 
    $cheeseSauce = new CheeseSauce($extraPatty);
 
    echo $cheeseSauce->getDescription(). ' costs $'.$cheeseSauce->price();
}
 
main();
?>