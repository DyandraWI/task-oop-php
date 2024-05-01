<?php
require_once 'animal.php';
require_once "Frog.php";
require_once "Ape.php";

$sheep = new animal();
$sheep -> setName("shaun");

echo "Nama Hewan: ".$sheep -> getName()."<br>";
echo "Legs : ".$sheep -> legs."<br>";
echo "Cold Blooded : ".$sheep -> cold_blooded()."<br><br>";

$kodok = new frog();
$kodok -> setName("buduk");

echo "Nama Hewan: ".$kodok -> getName()."<br>";
echo "Legs : ".$kodok->legs."<br>";
echo "Cold Blooded : ".$kodok -> cold_blooded()."<br>";
echo "Jump : ".$kodok -> jump()."<br><br>";

$sungokong = new ape();
$sungokong -> setName("Kera Sakti");

echo "Nama Hewan: ".$sungokong -> getName()."<br>";
echo "Legs: ".$sungokong -> legs."<br>";
echo "Cold Blooded: ".$sungokong -> cold_blooded()."<br>";
echo "Yell : ".$sungokong -> yell();
?>

<link rel="stylesheet" href="pattern.css">