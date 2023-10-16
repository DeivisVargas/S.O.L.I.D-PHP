<?php

namespace src;

class WhatsApp implements IMensagemToken
{
    public function enviar():void{
        echo 'Whats app  : seu toke é 777';
    }


}