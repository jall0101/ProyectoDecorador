
<?php
    require_once 'IDecorator.php';

    class Decorator implements IDecorator{
        private string $concepto;
        private float $precio;
        private IDecorator $item;
        
        public function __construct(string $concepto, float $precio){
            $this->concepto = $concepto;
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
            
            $this->item->concepto .= $this->concepto.' -------------- '.$this->precio.'<br><br>';
            //$this->concepto .= " ".$this->item->getConcepto();
            $this->item->precio += $this->precio;
            //$this->precio += $this->item->getPrecio();
            return $item;
        }

        

    }

?>