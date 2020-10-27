<HTML>
<HEAD> <TITLE> Arrays Asociativos </TITLE> </HEAD>

<BODY>
<?php
// Array asociativo -> indexado por un valor denominado clave
 $calificaciones['Juan']=9;
 $calificaciones['Pedro']=7;
 $calificaciones['Ana']=10;
 $calificaciones['Marta']=3;
 
  // Mostrar longitud del array
 $numdatos=count($calificaciones);
 echo "Longitud del array asociativo: ".$numdatos."<br>";
 
 // Mostrar todo el array aosciativo con bucle Foreach
 foreach($calificaciones as $clave => $valor) 
 {
    echo "Alumno: ".$clave." Nota PHP: ".$valor;
    echo "<br>";
 }
 
 // Forma alternativa definición array
 
  $calificaciones = array ("Juan"=>9, "Pedro"=>7, "Ana"=>10, "Marta"=>3);
  echo "La nota de Juan es ".$calificaciones['Juan'];



?>
</BODY>
</HTML>
