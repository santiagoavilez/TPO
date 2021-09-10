<?php
$Tiulo = "Ejercicio 8";
include_once("../estructura/cabecera.php");
?>

<div id="contenido" style="height: 512px; width: 89%; margin-left:10.5%;" >
<a href="index.php">Volver</a>

<?php 
$datos= data_submitted();
$obj8= new control_eje8();
//print_r($datos);
$respuesta = $obj8->cine($datos);
//se puede tambien hacer con get y post por parametro

echo "<p> Resultado: $respuesta </p> </div>";

include_once("../estructura/pie.php");
?>
