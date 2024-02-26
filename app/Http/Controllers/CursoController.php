<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function EsPrimo($num1){
        $c = 0;
            for($i = 1; $i <= $num1; $i++){
                if($num1 % $i == 0){
                    $c++;
                }
            }
                if($c==2){
                    return "Es primo";
                }
                    else{
                        return "No es primo";
                    }
    }

    public function amigos($num1,$num2){
        $acum1 = 0;
        $acum2 = 0;
        for ($j=1; $j <$num1 ; $j++) {
            $div1 = $num1 % $j;
                if($div1==0){
                    $acum1 = $acum1 + $j;
                }
        }
        for ($k=1; $k <$num2 ; $k++) {
            $div2 = $num2 % $k;
                if($div2==0){
                    $acum2 = $acum2 + $k;
                }
        }

        if ($acum1==$num2 && $acum2==$num1) {
            return 'Son parceros';
        }
        else{
            return 'Son liebres';
        }

    }

    public function create(){

        return view('formulario');

    }

    public function store(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;

        return $num1+$num2;




    }



}
