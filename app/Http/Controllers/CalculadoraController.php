<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }
    public function calcular(Request $request)
    {
        // Pegar variáveis do formulário
        $num1 = $request-> num1;
        $num2 = $request-> num2;
        $operador =$request-> operador;

        if($operador == '+'){
            $result = $num1 + $num2;
        }else if($operador == '-'){
            $result = $num1 - $num2;
        }else if($operador == '*'){
            $result = $num1 * $num2;
        }else if($operador == '/'){
            $result = $num1 / $num2;
        }

        return view('resultado', compact('result'));

    }
}