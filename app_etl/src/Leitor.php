<?php

namespace src;
class Leitor
{

    private $diretorio;
    private $arquivos;



    /**
     * @return mixed
     * : string tipa o retorno do metodo
     */

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    /**
     * @param mixed $diretorio
     */
    public function setDiretorio($diretorio)
    {
        $this->diretorio = $diretorio;
    }

    /**
     * @return mixed
     */
    public function getArquivos()
    {
        return $this->arquivos;
    }

    /**
     * @param mixed $arquivos
     */
    public function setArquivos($arquivos)
    {
        $this->arquivos = $arquivos;
    }

    public function lerArquivo(){
        $caminho = $this->getDiretorio().'/'.$this->getArquivos();
        $arquivo = new Arquivo();

        $extensao = explode('.', $this->getArquivos());
        if($extensao[1] == 'csv'){
            $arquivo->lerArquivoCsv($caminho);
        }
        if($extensao[1] == 'txt'){
            $arquivo->lerArquivoTxt($caminho);
        }

        return $arquivo->getDados();
    }

}