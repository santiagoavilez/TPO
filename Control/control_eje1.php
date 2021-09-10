<?php

class control_eje1 {

    public function verInformacion($datos){
        $numero = $datos['numero'];
        $txt = "";
       if($numero < 0){
            $txt= " negativo";
        }
        elseif($numero > 0){
            $txt= " positivo";
        }else{
             $txt= " cero";
        }
        $resp = "el numero $numero es $txt";
     return $resp;
    }

   

}
?>