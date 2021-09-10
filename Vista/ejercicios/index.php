<?php
$Titulo = "Inicio";
include_once("../estructura/cabecera.php");
include_once("../../control/controlSubeArchivos.php");
$obj = new controlArchivos();
$arreglo = $obj->obtenerArchivos();
?>

<div class="text-center mb-5">
    <div class="mt-3 mb-3">
        <img alt="Programación Web Dinámica" class="mt-3 mb-3" src="../img/logoPWD.jpeg">
        <h2 class="mt-2"><strong>Programación Web Dinámica</strong></h2>
        <h5 class="mb-3">HTML - CSS - JAVASCRIPT - BOOSTRAP</h5>
    </div>

    <!-- <div>
        <p>Valide todos los formularios que implemente en cada uno de los siguientes ejercicios de TP. Utilice los atributos de HTML5 y donde crea necesario complemente la validación con javascript.
            Valide todos los formularios que implemente en cada uno de los siguientes ejercicios de TP. Utilice los atributos de HTML5 y donde crea necesario complemente la validación con javascript.
            Valide todos los formularios que implemente en cada uno de los siguientes ejercicios de TP. Utilice los atributos de HTML5 y donde crea necesario complemente la validación con javascript.
        </p>
    </div> -->
</div>


<h2>Lista de películas</h2>
<div class="row">
    <div class="col-sm-12 mb-3">
        <a class="btn btn-secondary" href="ejer3TP3.php" role="button">Agregar película <i class="fas fa-angle-double-right"></i></a>
    </div>
</div>

<form id="ejeArchivos" name="ejeArchivos" method="POST" action="../acciones/accionEjeArchivos.php">
    <div class="row mb-3">
        <?php
        for ($i = 0; $i <count($arreglo); $i++) {
            $imagen = $arreglo[$i];            
            if(!($i=count($arreglo)))
            {
                $texto =  $arreglo[$i+1];
            }

            if (strlen($imagen) > 2 && strpos($imagen, "txt") <= 0  && strpos($imagen, "pdf") <= 0) {
                echo "<div class='col-lg-2 col-md-3 col-sm-4  mb-3'>";
                echo "<img alt='$imagen' class='' src='../../uploads/$imagen'  width='100%' height='80%'>";
                echo "<input type='submit' name='Seleccion:$texto' id='Seleccion:$texto' class='btn btn-secondary btn-block btn-sm' value='Ver Detalles »'></input>";
                echo "</div>";                
            }           
        }
        ?>
    </div>
</form>


<?php
include_once("../estructura/pie.php");
?>