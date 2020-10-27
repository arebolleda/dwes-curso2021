<HTML>
<HEAD> <TITLE> Ficheros Externos - Funciones </TITLE> </HEAD>

<BODY>
<?php
/* Apertura de fichero fopen(fichero, modo)
donde modo:
r 	Abre el fichero en modo lectura y coloca el puntero al comienzo del fichero
r+ 	Abre el fichero en modo lectura y escritura y coloca el puntero al comienzo del fichero
w	Abre el fichero en modo escritura y coloca el puntero al comienzo del fichero, reduce su tamaño a cero y si el fichero no existe intenta crearlo
w+ 	Abre el fichero en modo lectura y escritura y coloca el puntero al comienzo del fichero, reduce su tamaño a cero y si el fichero no existe intenta crearlo
a 	Abre el fichero en modo escritura y coloca el puntero al final del fichero y si no existe intenta crearlo
a+  Abre el fichero en modo lectura y escritura y coloca el puntero al final del fichero y si no existe intenta crearlo
*/
  
$f1=fopen("fichero.txt","w+");
# escribimos en el fichero vacio
fwrite($f1,"Esta es la primera linea que escribimos en el fichero \n");
fwrite($f1,"Esta es la segunda linea que escribimos en el fichero \n");
fwrite($f1,"Esta es la tercera linea que escribimos en el fichero \n");
#cerramos el fichero
fclose($f1);

/**** Bloque 1 de código *****/
echo "<H2>Este es el resultado despu&eacutes del tercer fwrite</H2><br>";
echo "<H3>Es la funci&oacuten include qui&eacuten provoca el resultado: consultar la ayuda para saber m&aacutes</H3><br>";
include("fichero.txt");
echo "<H2>Qu&eacute pasar&iacutea si comentamos la funci&oacuten include?</H2><br>";

/**** Bloque 2 de código *****/
echo "<h2>Leyendo el fichero con fgetc</h2><br>";
$f1=fopen("fichero.txt","r+");
# leemos el primer caracter del fichero ya que el puntero esta el principio
$z=fgetc($f1);
# imprimimos el primer carácter
echo "El primer car&aacutecter es: ",$z,"<br>";  
# leemos el segundo caracter del fichero ya que el puntero se ha movido a esa posición al leer anteriormente el primer carácter.
$z=fgetc($f1);
echo "El segundo car&aacutecter es: ",$z,"<br>"; 
$z=fgetc($f1);
echo "El tercer car&aacutecter es: ",$z,"<br>"; 

/**** Bloque 3 de código *****/
# Leemos desde la posición actual (caracter 3) -> 200 caracteres
$z=fgets($f1,200);
echo "Ahora se ha leido: ",$z,"<br>"; 
fclose($f1); // se cierra el fichero

/**** Bloque 4 de código *****/
echo "<br><H2>Al abrir el fichero de nuevo fgets comienza desde el principio</h2><br>";
#Abrimos de nuevo el fichero
$f1=fopen("fichero.txt","r");
#Leemos su contenido
$za=fgets($f1,5000);
#Presentamos el contenido
echo $za;
#Ahora cerramos el fichero
fclose($f1);




?>
</BODY>
</HTML>
