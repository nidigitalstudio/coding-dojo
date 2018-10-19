<?php

namespace App;

class Telefone
{
    
    public function checaLetra(string $letra)
    {
        if ($letra == "A" || $letra == "B" || $letra == "C") {
            return 2;
        }

        if ($letra == "D" || $letra == "E" || $letra == "F") {
            return 3;
        }

        if ($letra == "G" || $letra == "H" || $letra == "I") {
            return 4;
        }
        if ($letra == "J" || $letra == "K" || $letra == "L") {
            return 5;
        }
        if ($letra == "M" || $letra == "N" || $letra == "O") {
            return 6;
        }
        if ($letra == "P" || $letra == "Q" || $letra == "R" || $letra == "S") {
            return 7;
        }

        if ($letra == "T" || $letra == "U" || $letra == "V") {
            return 8;
        }

        if ($letra == "W" || $letra == "X" || $letra == "Y" || $letra == "Z") {
            return 9;
        }
    }

    public function stringToChar(int $tamanho, string $palavra)
    {
        $r[] = str_split($palavra, $tamanho);
        return $r[0][1];
    }
}
