<?php


/*
 * Conceito da inversão de dependência
 * */
require __DIR__ . '/vendor/autoload.php';

use src\Mensageiro ;
use src\Email ;
use src\Sms ;
use src\WhatsApp ;

//-------canal de email
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';
//canal ------sms
$msg = new Mensageiro(new Sms());
$msg->enviarToken();

echo '<br>';
//canal ------Whats app
$msg = new Mensageiro(new WhatsApp());
$msg->enviarToken();
