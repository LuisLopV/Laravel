<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Raiz extends Controller
{
    public function create(){

        return view('FormuRaiz');

    }

    public function store(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;
        $num3=$request->num3;

        $raiz= $num2*$num2-4*$num1*$num3;
        if($num1!=0 && $raiz>0){
            $tol1= (((-$num2)+sqrt($raiz))/2*$num1);
            $tol2= (((-$num2)-sqrt($raiz))/2*$num1);
            return "El Resultado de la raiz Cuadratica es: $tol1 y $tol2";
        }
        else{
            return 'valores incorrectos';
        }



}
}
