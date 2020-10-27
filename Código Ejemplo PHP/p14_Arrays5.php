<HTML>
<HEAD> <TITLE> Arrays Multidimensionales </TITLE> </HEAD>

<BODY>
<?php
// Array 2 dimensiones -> array de arrays
// Tabla calificaciones de alumnos en programación
// 
// Nombre	PHP		Java
// ======================
// Juan		9		3
// Pedro	7		8
// Ana		10 		9
// Marta	3		5

$calificaciones = array ("Juan" => array(9,3), "Pedro"=>array(7,8), "Ana"=>array(10,9), "Marta"=> array(3,5));

echo "Notas del alumno Juan en PHP ".$calificaciones['Juan'][0]." y en Java ".$calificaciones['Juan'][1]."<BR>";

echo "Nota media= ". (($calificaciones["Juan"][0]+$calificaciones["Juan"][1])/2)."<BR>";

 
  // Mostrar longitud del array
 $numdatos=count($calificaciones);
 echo "Longitud del array asociativo bidimensional: ".$numdatos."<br><br>";

 
  // Mostrar todo el array aosciativo con bucle Foreach
 foreach($calificaciones as $clave => $valor) 
 {
    echo "Alumno: ".$clave;
	
	foreach ($valor as $indice => $notas)
	  echo " ".$notas;
	  
	echo "<br>";
 }
 
 
 /*
 // Mostrar todas las calificaciones
for ($fila = 0; $fila < $numdatos; $fila++) {
  echo "<p><b>Fila $fila</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$calificaciones[$fila][$col]."</li>";
  }
  echo "</ul>";
}

*/

?>
</BODY>
</HTML>
