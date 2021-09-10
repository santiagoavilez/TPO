<?php
$Titulo= "Ejercicio 1";
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
                    <p class="card-text">1-Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
                       llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número 
                       enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la 
                       respuesta, que permita volver a la página anterior.</p>
                     
                     
                       <form  id="eje1" name="eje1" method="POST" action="accion.php">
                         <!------ICON PRUEBA--------->
                          <input type="number"  name="numero" type="text" class="form-control input-group w-50" placeholder="ingrese un numero" aria-label="ingrese un numero" aria-describedby="basic-addon1" required>  
                          <br/>
                          <!------------------------->
                          <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                        </form>
                     
                    </div>
                    </div>
        </div>
    </div>



<?php 
include_once("../estructura/pie.php");
?>

