<?php

require __DIR__ . '/vendor/autoload.php';

use src\Retangulo ;
use src\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo "<h3>Área do retangulo </h3> ". $retangulo->getArea();
echo "<br>";

$quadrado = new Quadrado();
$quadrado->setLargura(10);


echo "<h3>Área do quadrado </h3> ". $quadrado->getArea();