<?php

class control_eje8{

public function cine($datos){

/*La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
clientes los que puedan calcular el valor de sus entradas a través de una página web.
-Si  es estudiante o menor de 12 años el precio es de $160, 
-si es estudiante y mayor o igual de 12 años el precio es de $180,
- en cualquier otro caso el precio es de $300. 
*/


$edad= $datos['edad'];
$estudia = $datos['estudia'];
$precio= "";

if($estudia == "si" && $edad < 12){
  $precio = "Precio de entrada: $160";
}elseif($estudia == "si" && $edad >= 12){
    $precio = "Precio de entrada: $180";
}else{
    $precio = "Precio de entrada: $300";
}

 return $precio;

}//function

}//class