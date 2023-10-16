<?php

namespace src;

class Sms implements IMensagemToken
{

    public function enviar():void{
        echo 'Sms : seu toke é 888-5545';
    }
}