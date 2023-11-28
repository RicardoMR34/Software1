<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Cannot divide by zero";
        }
    }

    public function power($base, $exponent)
    {
        return pow($base, $exponent);
    }

    public function squareRoot($number)
    {
        return sqrt($number);
    }
}
