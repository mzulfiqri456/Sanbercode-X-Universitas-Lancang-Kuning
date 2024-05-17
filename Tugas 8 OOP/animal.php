<?php
class Animal {
    
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name, $legs = 4, $cold_blooded = "no") {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_legs() {
        return $this->legs;
    }

    public function get_cold_blooded() {
        return $this->cold_blooded;
    }
}
?>
