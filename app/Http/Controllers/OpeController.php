<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpeController extends Controller
{
    public function suma($a, $b)
    {
        return $a + $b;
    }
    public function resta($a, $b)
    {
        return $a - $b;
    }
    public function multiplicacion($a, $b)
    {
        return $a * $b;
    }
    public function division($a, $b)
    {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "No puedes dividir entre 0 >:(";
        }
    }
    public function potencia($base, $exponent)
    {
        return pow($base, $exponent);
    }

    public function raiz($number)
    {
        return sqrt($number);
    }
}
