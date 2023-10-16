<?php

namespace src;
use src\IMensagemToken;


class Mensageiro
{

    private $canal ;


    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }

    /**
     * @return mixed
     */
    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    /**
     * @param mixed $canal
     */
    public function setCanal(IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken():void {
        /*
        $classe = '\src\\'. ucfirst($this->getCanal());
        echo $classe;
        echo '<br>';
        $obj =  new $classe ;
        $obj->enviar();
        //maneira errada de fazer ferindo os princípios Invers~]ao de dependência
        */


        //maneira correta respeitando o princípio
        $this->getCanal()->enviar();
    }

}