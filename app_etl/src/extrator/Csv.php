<?php

namespace src\extrator;

class Csv extends Arquivo
{

    public function lerArquivo(array $caminho) :array
    {
        $handle = fopen($caminho[0], 'r');
        while ($linha  = fgetcsv($handle , 10000, ';')){

            $this->setDados($linha[0],$linha[1] ,$linha[2]);
        }
        fclose($handle);
        return $this->getDados();
    }

}