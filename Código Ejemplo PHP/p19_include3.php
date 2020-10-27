<html>
<body>

<h1>Ejemplos del uso de la instrucci&oacuten INCLUDE vs REQUIRE</h1>
<p>En este caso estamos incluyendo un fichero con variables, que podran serialize
   utilizadas posteriormente</p>
   
<?php 
include "p19_variables3.php";
echo "Variable \$$aplicacion vale: <b>$aplicacion</b><br>";
echo "Variable \$$modulo vale: <b>$modulo</b><br>";
?>

<p>Incluimos tambien funciones definidas en un fichero</p>
<?php 
require "p19_funciones3.php";
$fecha=fecha_hora();
echo "<b>Fecha/hora GMT <b>".$fecha."<br>";

?>

</body>
</html> 