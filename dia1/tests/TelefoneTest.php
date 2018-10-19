<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Telefone;

class TelefoneTest extends TestCase
{
    private $telefone;

    public function setUp()
    {
        parent::setUp();
        $this->telefone = new Telefone();
    }

    public function testABCReturns2()
    {
        $entrada = $this->telefone->checaLetra("A");
        $esperado = 2;
        $this->assertEquals($entrada, $esperado);
        
        $this->assertEquals(
            $this->telefone->checaLetra("B"),
            $esperado
        );

        $this->assertEquals(
            $this->telefone->checaLetra("C"),
            $esperado
        );
    }


    // Return 3
    public function testDEFReturn3()
    {
        $esperado = 3;
        $this->assertEquals(
            $this->telefone->checaLetra("D"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("E"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("F"),
            $esperado
        );
    }
   
    public function testGHIReturn3()
    {
        $esperado = 4;
        $this->assertEquals(
            $this->telefone->checaLetra("G"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("H"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("I"),
            $esperado
        );
    }
    
    //Return JKL
    public function testJKLReturn4()
    {
        $esperado = 5;
        $this->assertEquals(
            $this->telefone->checaLetra("J"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("K"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("L"),
            $esperado
        );
    }
    //Return MNO
    public function testMNOReturn6()
    {
        $esperado = 6;
        $this->assertEquals(
            $this->telefone->checaLetra("M"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("N"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("O"),
            $esperado
        );
    }

    //Return MNO
    public function testPQRSReturn7()
    {
        $esperado = 7;
        $this->assertEquals(
            $this->telefone->checaLetra("P"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("Q"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("R"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("S"),
            $esperado
        );
    }

    //Return MNO
    public function testTUVReturn7()
    {
        $esperado = 8;
        $this->assertEquals(
            $this->telefone->checaLetra("T"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("U"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("V"),
            $esperado
        );
    }

    //Return MNO
    public function testWXYZReturn7()
    {
        $esperado = 9;
        $this->assertEquals(
            $this->telefone->checaLetra("W"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("X"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("X"),
            $esperado
        );
        $this->assertEquals(
            $this->telefone->checaLetra("Z"),
            $esperado
        );
    }

    
}
