<?php

namespace Itch;

use InvalidArgumentException;

class Calculator
{
    public function sum($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new InvalidArgumentException('Número invalido');
        }
        
        return $a + $b;
    }
}
