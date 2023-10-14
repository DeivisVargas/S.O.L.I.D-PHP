<?php

namespace src\extrator;

class Txt extends Arquivo
{

    public function lerArquivo(array $caminho) :array
    {
        $handle = fopen($caminho[0], 'r');
        while (!feof($handle)){
            $linha  = fgets($handle) ;
            $this->setDados(substr($linha ,11,30), substr($linha ,0,11),substr($linha ,41,30));
        }
        return $this->getDados();
    }


}