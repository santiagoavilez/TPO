<?php
$Titulo= "Ejercicio 2";
include_once("../estructura/cabecera.php");
?>



<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Trabajo Practico 1
          </div>
            <div class="card-body">
               <h5 class="card-title">Enunciado </h5>
                <p class="card-text"> 
                  2-Crear una página php que contenga un formulario HTML que permita ingresar las horas 
                  de cursada, de la materia Programación Web Dinámica, por cada día de la semana. 
                  Enviar los datos del formulario por el método Get a otra página php que los reciba y 
                  complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
                  se cursan por semana. 
                 </p>
                                            
                    <form id="eje2" name="eje2" method="GET" action="accion.php" >
                        <p> <b> Ingresar horarios de cursada: </b> </p>
                        <input type="number" id="lunes" name="lunes"         class="form-control input-group w-50" placeholder="lunes" aria-label="lunes" aria-describedby="basic-addon1"> <br/> 
                        <input type="number" id="martes" name="martes"       class="form-control input-group w-50" placeholder="martes" aria-label="martes" aria-describedby="basic-addon1"> <br/>
                        <input type="number" id="miercoles" name="miercoles" class="form-control input-group w-50" placeholder="miercoles" aria-label="miercoles" aria-describedby="basic-addon1"> <br/>
                        <input type="number" id="jueves" name="jueves"       class="form-control input-group w-50" placeholder="jueves" aria-label="jueves" aria-describedby="basic-addon1"> <br/>
                        <input type="number" id="viernes" name="viernes"    class="form-control input-group w-50" placeholder="viernes" aria-label="viernes" aria-describedby="basic-addon1"> <br/>

                        <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                  </form>
             </div>
           </div>
        </div>
    </div>


</div>

<?php 
include_once("../estructura/pie.php");
?>
