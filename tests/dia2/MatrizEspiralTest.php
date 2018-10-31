<?php

namespace Tests\dia2;

use PHPUnit\Framework\TestCase;
use App\dia2\MatrizEspiral;

class MatrizEspiralTest extends TestCase
{

    private $matriz;

    /**
     * Resolve a criação da instancia para toda classe teste.
     * 
     * @param
     * @return object $matriz
     */
    public function setUp()
    {
        $this->matriz = new MatrizEspiral();
    }
    
    public function testQuantidadeRetorno()
    {   
        $this->assertEquals($this->matriz->matrizQuantidade(1, 1), 1);
    }

    public function testMatrizType()
    {
        $matriz = $this->matriz->buildMatriz(3, 4);
        $this->assertInternalType('array', $matriz);
    }
    
    public function testColumnNumber()
    {
        $matriz = new MatrizEspiral(4, 3);

        $this->assertEquals($matriz->getColuna(), 3);
    }

    public function testLinhaNumber()
    {
        $matriz = new MatrizEspiral(4, 3);
        $this->assertEquals($matriz->getLinha(), 4);
    }
}

