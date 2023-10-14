<?php

require __DIR__ . '/vendor/autoload.php';
use src\Leitor ;

$teste = __DIR__  ;

//-----------------------------TXT
$leitorTxt = new Leitor();
$leitorTxt->setDiretorio( __DIR__ .'/arquivos');
$leitorTxt->setArquivos( 'dados.txt');
$arrayTxt = $leitorTxt->lerArquivo();
/*
echo '<pre>';
print_r($arrayTxt);
echo '</pre>';
*/

//-----------------------------CSV
$leitor = new Leitor();
$leitor->setDiretorio( __DIR__ .'/arquivos');
$leitor->setArquivos( 'dados.csv');
$arrayCsv = $leitor->lerArquivo() ;
/*
echo '<pre>';
print_r($arrayCsv);
echo '</pre>';
*/

//================juntando o array

echo '<pre>';
print_r(array_merge( $arrayTxt , $arrayCsv));
echo '</pre>';