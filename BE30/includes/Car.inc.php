<?php
/**
 * Description of Car
 *
 * @author nml
 */
class Car extends Vehicle {
    private $doors;
    private $trailer;
    
    public function __construct($brand, $color, $name, $doors, $trailer) {
        parent::__construct($brand, $color, $name);
        $this->doors = $doors;
        $this->trailer = $trailer;
        $this->setType('car');
    }
    
    public function getDoors() {
        return $this->doors;
        
    }public function getTrailer() {
        return $this->trailer;
    }
    
    public function __toString() {
        return sprintf("%s, %s, %s\n"
                , parent::__toString()
                , $this->getDoors()
                , $this->getTrailer() ? "Yes" : "No"
                );
    }
    

}