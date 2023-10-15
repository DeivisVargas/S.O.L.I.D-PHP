<?php

namespace src\poligonos;


class Quadrado
{

    protected $largura ;
    protected $altura ;

    public function getLargura() : float
    {
        return $this->largura;
    }


    /**
     * @return mixed
     */
    public function getAltura() :float
    {
        return $this->altura;
    }

    public function setLargura($largura)
    {
        $this->altura =  $largura;
        $this->largura =  $largura;
    }

    public function setAltura($altura)
    {
        $this->altura  =  $altura;
        $this->largura =  $altura;
    }
}