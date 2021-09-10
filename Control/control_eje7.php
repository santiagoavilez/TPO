<?php

class control_eje7{


public function calculadora($datos){

    $numero1= $datos['1'];
    $numero2= $datos['2'];
    $selector= $datos['selector'];
    $calculo = 0;
    $texto = "";

    if($selector == "suma"){
      $calculo= $numero1 + $numero2;
      $texto = "La cuenta $numero1 + $numero2 es igual a $calculo";    
    }elseif($selector == "resta"){
        $calculo= $numero1 - $numero2;
        $texto = "La cuenta $numero1 - $numero2 es igual a $calculo";    
    }
    elseif($selector == "multiplicacion"){
        $calculo= $numero1 * $numero2;
        $texto = "La cuenta $numero1 * $numero2 es igual a $calculo";    
    }else{
        $calculo= $numero1 / $numero2;
        $texto = "La cuenta $numero1 / $numero2 es igual a $calculo";   
    }


return $texto;
}

}