<?php

/*
 * Conceito sa SUBSTITUIÇÃO DE LISKOV
 * */
require __DIR__ . '/vendor/autoload.php';

use src\Poligono ;
use src\poligonos\Quadrado;
use src\poligonos\Retangulo;

$poligono = new Poligono();
$poligono->setForma( new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);


echo '<pre>';
print_r($poligono);
echo '</pre>';

echo "<h3>Área do retangulo </h3> ". $poligono->getArea();

$poligono = new Poligono();
$poligono->setForma( new Quadrado());
$poligono->getForma()->setAltura(10);


echo "<h3>Área do Quadrado </h3> ". $poligono->getArea();
/*
$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo "<h3>Área do retangulo </h3> ". $retangulo->getArea();
echo "<br>";

$quadrado = new Quadrado();
$quadrado->setLargura(10);


echo "<h3>Área do quadrado </h3> ". $quadrado->getArea();
*/