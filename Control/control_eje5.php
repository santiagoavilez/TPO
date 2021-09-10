<?php

class control_eje5  {

    /*
    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo
     */

    public function EstudiosySexo($datos){
     
    $texto= "";    

     $estudios = $datos['estudios'];
     if($estudios == 1){
         $texto= "<li> Nivel de estudios: nulo </li>";
     }elseif($estudios == 2){
        $texto= "<li> Nivel de estudios: primarios </li>";
     }else{
        $texto="<li> Nivel de estudios: secundarios </li>";
     }
     
    $sexo = $datos['sexo'];
     if($sexo == 1){
        $texto.= "<li> Sexo: Femenino </li>";
    }elseif($sexo == 2){
       $texto.= "<li> Sexo: Masculino </li>";
    }else{
       $texto.="<li> Sexo: Binario </li>";
    }

     return $texto;

    }//function

}//clase
?>