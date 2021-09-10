<?php 
$Titulo = " Ejercicio 4"; 
include_once("../estructura/cabecera.php");
?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">  Trabajo Practico 1 </div>
           <div class="card-body">
            <h5 class="card-title">Enunciado </h5>
              <p class="card-text"> Ejercicio 4 Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
                        esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
                        persona es mayor de edad o no; <b>(si la edad es mayor o igual a 18)</b>.
                        Enviar los datos usando el método GET y luego probar de modificar los datos 
                        directamente en la url para ver los dos posibles mensajes.</p>
                                            
                <!---------FORMULARIO-------------------------------------->
                <form class="needs-validation" id="eje4" name="eje4" method="POST" action="accion.php" novalidate>
          
                 <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control input-group w-50" id="nombre" name="nombre" size="100" placeholder="Escriba sus nombre completo"required> 
                        <div class="invalid-feedback"> Ingresa tu nombre reina, ya te lo dije antes. </div> <br/>

                 <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control input-group w-50" id="apellido" name="apellido" size="100" placeholder="Escriba todos sus apellidos"required> 
                         <div class="invalid-feedback"> Ingresar apellido. </div> <br/> 

                 <label for="edad" class="form-label">Edad</label>
                       <input type="number" name="edad" min="1" placeholder="Escriba su edad, debe ser mayor a 1" class="form-control input-group w-50"  required > 
                          <div class="invalid-feedback"> </div> <br/> 

                 <label for="direccion" class="form-label">direccion</label>
                     <textarea name="direccion" id="direccion" rows="2" cols="100" placeholder="Escriba su direccion completa" class="form-control input-group w-50"  required></textarea>
                         <div class="invalid-feedback"> Ingresar direccion</div> <br/> 


                <!---------BOTONES------------->
                <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                <input type="reset" class="btn btn-dark">

                </form >
                <!---------FORMULARIO-------------------------------------->
          </div>
        </div>
     </div>
 </div>







<?php 
include_once("../estructura/pie.php");
?>
