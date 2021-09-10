<?php

class control_eje3  {

    public function verInformacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $texto = " <li> Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años, vivo en ".$direccion. "</li>";
     // print_r($datos);
     return $texto;
    }

   

}
?>