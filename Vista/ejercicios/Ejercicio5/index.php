<?php
$Titulo= "Ejercicio 5";
include_once("../estructura/cabecera.php");
?>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">  Trabajo Practico 1 </div>
         <div class="card-body">
            <h5 class="card-title">Enunciado </h5>
              <p class="card-text"> Ejercicio 5
                    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
                    “radios buttons” se ingrese el nivel de estudio de la persona: <b> 1-no tiene estudios, 2-
                    estudios primarios, 3-estudios secundarios </b>. Agregar el componente que crea más
                    apropiado para solicitar el <b>sexo</b>. En la página que procesa el formulario mostrar además
                    un mensaje que indique el tipo de estudios que posee y su sexo
             </p>
            
             <!-- AGREGADO DEL 4 -->
             <form class="needs-validation" id="eje5" name="eje5" method="POST" action="accion.php" novalidate>
                    
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
                    
                  <!--AGREGADO DEL 5  ESTUDIOS Y SEXO.-->
                  
                <label for="est" class="form-label">Seleccionar la opci&oacute;n correspondiente a sus estudios:</label>
                    <br/>
                    <input type="radio" name="estudios" id="radio1" value="1" required> 
                        <label for="1" class="form-label">1-no tiene estudios</label><br>

                    <input type="radio" name="estudios" id="radio2" value="2">
                        <label for="2" class="form-label">2-estudios primarios</label><br>

                    <input type="radio" name="estudios" id="radio3" value="3">
                      <label for="3" class="form-label">3-estudios secundarios</label><br>
                     
                     <div class="invalid-feedback"> Seleccionar una opcion </div> <br/> 
                    <br/>


                    <label for="sex" class="form-label">Sexp:</label>
                    <br/>
                    <input type="radio" name="sexo" id="sexo1" value="1"  required> 
                        <label for="1">1-Femenino</label><br>

                    <input type="radio" name="sexo" id="sexo2" value="2">
                        <label for="2">2-Masculino</label><br>

                    <input type="radio" name="sexo" id="sexo3" value="3">
                        <label for="3">3-Binario</label><br>
                       
                    <div class="invalid-feedback"> Seleccionar una opcion </div> <br/> 


                    <!--BOTONES--->
                    <br/>
                    <input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
                    <input type="reset" class="btn btn-dark">
                    <!------------>

                    </form >
                     
          </div>
        </div>
     </div>
 </div>







<!---------FOOTER------------->
<?php 
include_once("../estructura/pie.php");
?>

