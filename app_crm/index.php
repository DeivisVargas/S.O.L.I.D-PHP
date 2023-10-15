<?php

/*
 * Princípio da segregação de 'interface'
 * */
require __DIR__ . '/vendor/autoload.php';

use src\dao\ContratoModel ;
use src\dao\LeadModel ;
use src\dao\UsuarioModel ;


$contatoModel = new ContratoModel();
echo '<pre>';
print_r($contatoModel);
echo '</pre>';


$leadModel = new LeadModel();
echo '<pre>';
print_r($leadModel);
echo '</pre>';

$usuarioModel = new UsuarioModel();
echo '<pre>';
print_r($usuarioModel);
echo '</pre>';