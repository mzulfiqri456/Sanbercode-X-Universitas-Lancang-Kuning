<?php

require_once 'animal.php';
require_once 'frog.php' ;
require_once 'ape.php';


$sheep = new Animal("shaun");
$sungokong = new Ape("kera sakti");
$kodok = new Frog("buduk");

echo "Name : ".$sheep->name; 
echo "<br>";
echo "Legs : ".$sheep->legs; 
echo "<br>";
echo "cold blooded : ".$sheep->cold_blooded; 
echo "<br><br>";
echo "Name : ".$kodok->name; 
echo "<br>";
echo "Legs : ".$kodok->legs; 
echo "<br>";
echo "cold blooded : ".$kodok->cold_blooded;
echo "<br>";
echo "Jump : ";
echo $kodok->jump();
echo "<br><br>";
echo "Name : ".$sungokong->get_name();
echo "<br>";
echo "Legs : ".$sungokong->legs;
echo "<br>";
echo "cold blooded : ".$sungokong->cold_blooded;
echo "<br>";
echo "Yell : ";
echo $sungokong->yell();
echo "<br><br>";
?>
