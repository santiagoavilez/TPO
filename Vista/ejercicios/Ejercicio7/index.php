<?php
$Titulo= "Ejercicio 1";
include_once("../estructura/cabecera.php");
?>


<div id="contenido" style="height: 512px; width: 89%; margin-left:10.5%;" >
<p>
Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En 
los inputs se ingresarán números y el select debe dar la opción de una operación 
matemática que podrá resolverse usando los números ingresados. En la página que 
procesa la información se debe 

mostrar por pantalla la operación seleccionada, cada 
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del 
formulario:

</p>

<form  id="eje7" name="eje7" method="POST" action="accion.php">

Numero 1<input type="text" id="1" name="1" > <br/>
Numero 2<input type="text" id="2" name="2" > <br/>
<br/>
Operacion 
<select id="selector" name="selector">
    <option value="suma">  suma</option>
    <option value="resta"> resta</option>
    <option value="multiplicacion">multiplicacion</option>
    <option value="division">division</option>
</select>

<input id="btn_eje"  name="btn_eje" type="submit" value="Enviar" class="btn btn-dark">
<input type="reset" class="btn btn-dark">
</form>



</div>
<?php 
include_once("../estructura/pie.php");
?>

