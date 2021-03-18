<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma()
    {
        return view ('soma');
    }
    public function calcularSoma(Request $request)
    {
        // O método all da classe request retorna todos os parâmetros passados pelo formulário
        // dd - para tudo para processar o que for pedido
        //dd($request->all());
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 + $valor2;
        return view('resultadosoma', compact('valor1', 'valor2', 'resultado'));
    }
    public function operações(){
        return view ('operações');
    } 
    public function subtrai(){
        return view ('subtrai');
    }
    public function calcularSubtração(Request $request){
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 - $valor2;
        return view('resultadomenos', compact('valor1', 'valor2', 'resultado'));
    }
    public function multiplica(){
        return view ('multiplica');
    }
    public function calcularMultiplicação(Request $request){
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 * $valor2;
        return view('resultadovezes', compact('valor1', 'valor2', 'resultado'));
    }
    public function divide(){
        return view ('divide');
    }
    public function calcularDivisão(Request $request){
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 / $valor2;
        return view('resultadodiv', compact('valor1', 'valor2', 'resultado'));
    }
}
