<?php

namespace src;

class Email implements IMensagemToken
{

    public function enviar():void{
        echo 'email : seu tokem é: 555444';
    }
}