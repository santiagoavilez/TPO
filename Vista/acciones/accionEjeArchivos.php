<?php
$Titulo = "Acción 1 - TP3";
include_once("../estructura/cabeceraBT.php");
include_once("../../control/controlSubeArchivos.php");

//$datos = data_submitted();
$obj = new controlArchivos();
$infoArchivo = $obj->verInformacion($_POST);
?>

<div class="row  mb-3">
    <div class="col-sm-4 ">

        <?php
        echo $infoArchivo;
        ?>

    </div>
    <!-- <div class="col-sm-8 ">
        <?php
        // echo  "<img class='' src='../../uploads/" . $infoArchivo["NombreArchivo"] . "' width='100%' height='100%'>";
        ?>
    </div> -->

</div>

<!-- <div class="row  mb-3">
    <div class="col-sm-12 ">
        <?php
        //if ($infoArchivo["HayArchivodeTexto"])
        //    echo "<a class='btn btn-primary' href='../uploads/" . $infoArchivo['ArchivoTexto'] . "'> Adjunto</a>";
        ?>
    </div>
</div> -->

<div class="alert alert-primary" role="alert">
    <?php echo "Tamaño en KB: " . $infoArchivo["Tamanio"] ?>
</div>

<div class="alert alert-success" role="alert">
    <?php echo "Ultimo Acceso:" . $infoArchivo["UltimoAcceso"] ?>
</div>

<div class="alert alert-danger" role="alert">
    <?php echo "Enlaces:" . $infoArchivo["Enlaces"] ?>
</div>

<div class="alert alert-warning" role="alert">
    <?php echo "Ultima modif:" . $infoArchivo["UltimaModificacion"] ?>
</div>

<div class="alert alert-secondary" role="alert">
    <?php echo "Tipo:" . $infoArchivo["Tipo"] ?>
</div>

<?php
include_once("../estructura/pieBT.php");
?>