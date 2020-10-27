<HTML>
<HEAD> <TITLE> Arrays Unidimensionales </TITLE> </HEAD>

<BODY>
<?php
// Funciones sobre arrays
 $semana[0]="Domingo";
 $semana[1]="Lunes";
 $semana[2]="Martes";
 $semana[3]="Miercoles";
 $semana[4]="Jueves";
 $semana[5]="Viernes";
 
 // Mostrar longitud del array
 $numdatos=count($semana);
 echo "Longitud del array: ".$numdatos."<br>";
 
 // Mostrar todo el array
 echo "Array Semana ->";
 for($x = 0; $x<$numdatos; $x++) 
 {
    echo $semana[$x];
    echo "<br>";
 }
 
 //Otra forma de definir un array usando la función array()
  $otrasemana=array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");

  //Mostrar 4 elemento del array
  echo $otrasemana[3];
  echo "<br><br>";  
  
  
 // Mostrar todo el array
 $numdatos=count($otrasemana);
 echo "Array Otra Semana ->";
 for($x = 0; $x<$numdatos; $x++) 
 {
    echo $otrasemana[$x];
    echo "<br>";
 }

?>
</BODY>
</HTML>
