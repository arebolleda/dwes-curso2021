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

$calificaciones = array (array("Juan",9,3),array("Pedro",7,8), array("Ana",10,9), array("Marta",3,5));

echo "Notas del alumno ". $calificaciones[0][0]." en PHP ".$calificaciones[0][1]." y en Java ".$calificaciones[0][2]."<BR>";
echo "Nota media= ". (($calificaciones[0][1]+$calificaciones[0][2])/2)."<BR>";

 
  // Mostrar longitud del array
 $numdatos=count($calificaciones);
 echo "Longitud del array bidimensional: ".$numdatos."<br>";
 
 // Mostrar todas las calificaciones
for ($fila = 0; $fila < $numdatos; $fila++) {
  echo "<p><b>Fila $fila</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$calificaciones[$fila][$col]."</li>";
  }
  echo "</ul>";
}



?>
</BODY>
</HTML>
