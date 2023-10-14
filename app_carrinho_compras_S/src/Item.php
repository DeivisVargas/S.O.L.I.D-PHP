<?php

namespace src;

class Item{
    private $descricao;
    private $valor;

    public function __construct(){
        $this->descricao = '';
        $this->valor = 0 ;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getValor(): int
    {
        return $this->valor;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function validarItem()
    {
        if($this->descricao != '' && $this->valor > 0)
            return true;
        return false;
    }



}