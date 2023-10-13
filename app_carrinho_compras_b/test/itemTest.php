<?php

namespace test;

use PHPUnit\Framework\TestCase;
use src\Item;
class itemTest extends TestCase
{
    public function testValidarItem()
    {
        $item = new Item();
        $item->setDescricao('Camisa');
        $item->setValor(10);
        $this->assertTrue($item->validarItem());
    }

    public function testeEstouFuncionando()
    {
        $valor = 11;
        $this->assertEquals($valor , 11);
    }


    //teste de asserção phpUnit
    public function testeEstadoInicialItem()
    {
        $item = new Item();
        $this->assertEquals('',$item->getDescricao());
        $this->assertEquals( 0 ,$item->getValor());
    }

    public function testeGeteSetDescricao()
    {
        $item = new Item();
        $item->setDescricao('Camisa');
        $this->assertEquals('Camisa',$item->getDescricao());
    }

    /**
     * @dataProvider valorProvider
     */
    public function testeGeteSetValor($value)
    {
        $item = new Item();
        $item->setValor($value);
        $this->assertEquals($value , $item->getValor());
    }

    public static function valorProvider(){
        return [
            'valorCorreto'   => ['value' => 10 ],
            'valorIncorreto' => ['value' => 50 ],
            'valorNegativo'  => ['value' => -50 ],


        ];
    }

    public function testItemValido()
    {
        $item = new Item() ;
        $item->setDescricao('Camisa');
        $item->setValor(10);
        $this->assertEquals(true , $item->validarItem());
    }

}