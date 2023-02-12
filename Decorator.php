
<?php
    require_once 'IDecorator.php';

    class Decorator implements IDecorator{
        private string $concepto;
        private float $precio;
        private IDecorator $item;
        
        public function __construct(string $concepto, float $precio){
            $this->concepto = $concepto." ----------------- ".$precio;
            $this->precio = $precio;
        }

        public function getPrecio(){
            return $this->precio;
        }        

        public function getConcepto(){
            return $this->concepto;

        }

        public function setDecorator(IDecorator $item){
            $this->item = $item;
            
            $this->item->concepto = $this->concepto."<br>".$this->item->concepto;
            $this->item->precio += $this->precio;
            
            return $item;
        }

        

    }

?>