<?php

namespace App\dia2;

class MatrizEspiral
{
    /**
     * Referencia:
     * http://dojopuzzles.com/problemas/exibe/matriz-espiral/
     */

    private $linha;
    private $coluna;

    public function getColuna(){
        return $this->coluna;
    }

    public function getLinha()
    {
        return $this->linha;
    }

    public function __construct($linha = null, $coluna = null)
    {
        $this->linha = $linha;
        $this->coluna = $coluna;
    }
    
    public function buildMatriz()
    {
        $matriz = array();
        return $matriz;
    }

    public function matrizQuantidade($linha, $coluna)
    {
        return $linha * $coluna;
    }
}
