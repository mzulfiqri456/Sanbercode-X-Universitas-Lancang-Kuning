<?php
require_once 'animal.php';

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name, 2, "no");    
    }

    public function yell() {
        echo "Auooo\n";
    }
}
?>
