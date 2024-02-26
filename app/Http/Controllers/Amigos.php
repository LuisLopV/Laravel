<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Amigos extends Controller{
    public function create(){

        return view('formuAmigos');

    }

    public function store(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;

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
}

