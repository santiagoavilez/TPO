<?php

class control_eje2{

    //retorna la cantidad de horas semanales de la materia PWD
    public function verInformacion($datos){
   
        $sumo= 0 ;
        foreach($datos as $valores){
             if($valores != "null" && $valores !="Enviar"){
                 //echo $sumo;
                 //echo $valores;
               $sumo= $sumo +  $valores;
             }
        }

     if($sumo == 0){
       $txt= "No hay horas de cursada";
     }else{
        $txt= "horas de cursada por semana $sumo "; 
     }
     
     return $txt;
    }//function



}//clase