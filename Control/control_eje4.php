<?php

class control_eje4  {

   

    public function verificarEdad($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $texto ="";
        if ($edad >=18){
            $texto =  "<li> (soy mayor de edad) </li>";
        }else{
                $texto = "<li> (NO soy mayor de edad) </li>  ";}
     // print_r($datos);

     return $texto;

    }

}
?>