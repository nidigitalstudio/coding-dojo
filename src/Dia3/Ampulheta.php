<?php

namespace App\Dia3;

class Ampulheta
{
    private $ampulheta1, $ampulheta2;

    public function __construct($ampulheta1, $ampulheta2)
    {
        $this->ampulheta1 = $ampulheta1;
        $this->ampulheta2 = $ampulheta2;
    }

    public function getAmpulheta1()
    {
        return $this->ampulheta1;
    }
    
    public function getAmpulheta2()
    {
        return $this->ampulheta2;
    }

    public function possivel()
    {
        return ($this->ampulheta1 * 2) - $this->ampulheta2;
    }

    public function valores3e0SaoPossiveis()
    {
        $ampulhetaAtual1 = $this->ampulheta1;
        $ampulhetaAtual2 = $this->ampulheta2;
        $i = 0;

        do {
            $i++;
            $maiorAmp1 = $ampulhetaAtual1 > $ampulhetaAtual2;
            if ($maiorAmp1) {
                $ampulhetaAtual1 = $ampulhetaAtual1 - $ampulhetaAtual2;
                $ampulhetaAtual2 = $this->ampulheta2;
            } else {
                $ampulhetaAtual2 = $ampulhetaAtual2 - $ampulhetaAtual1;
                $ampulhetaAtual1 = $this->ampulheta1;
            }
        } while (($ampulhetaAtual1 == 3 && $ampulhetaAtual2 == 0)
            || ($ampulhetaAtual1 == 0 && $ampulhetaAtual2 == 3)
            || ($ampulhetaAtual1 == 0 && $ampulhetaAtual2 == 0));

        return $i;
    }
}
