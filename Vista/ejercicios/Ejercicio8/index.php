<?php
$Titulo= "Ejercicio 8";
include_once("../estructura/cabecera.php");
?>


<div id="contenido" style="height: 512px; width: 89%; margin-left:10.5%;" >
<p>
Ejercicio 8
La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un 
formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con 
un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. 
Agregar un botón para limpiar el formulario y volver a consultar.
</p>

<form  id="eje8" name="eje8" method="POST" action="accion.php">
Ingrese su edad
<input type="number"  name="edad" id="edad" type="text" required> 
<br/>
Estudia?
 si<input type="radio" name="estudia" value="si" required >
 no<input type="radio" name="estudia" value="no">

<br/>
<input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
<input type="reset" class="btn btn-dark">
</form>


</div>
<?php 
include_once("../estructura/pie.php");
?>
