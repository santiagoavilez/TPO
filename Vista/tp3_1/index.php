<?php
$Titulo = "Ejercicio 1";
include_once("../estructura/cabecera.php");
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="was-validated" id="tp3e1" action="post" enctype="multipart/form-data"action="accion.php">

                <div class="mb-3">
                    <input type="file" class="form-control" aria-label="file example" accept="application/doc, application/pdf" required>
                    <div class="invalid-feedback">Archivos permitidos: .pdf o .doc</div>
                </div>

                <div class="mb-3">
                <imput id="tp3e1" class="form-control btn-block btn-success" name="tp3e1" type="submit" value="Enviar" >
                </div>
            </form>
        </div>


    </div>



    <?php
    include_once("../estructura/pie.php");
    ?>