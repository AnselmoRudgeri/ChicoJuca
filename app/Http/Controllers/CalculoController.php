<?php

namespace App\Http\Controllers;

use App\Models\Calculo;
use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function calcular(){
        $resultado = Calculo::calcular();
        return $resultado;
    }
}
