<HTML>
<HEAD> <TITLE> Ficheros Externos - Funciones </TITLE> </HEAD>

<BODY>
<?php
 
# Abrimos el fichero en modo lectura
$f1=fopen("quijote.txt","r");

# Este bucle nos escribirá cada una de las lineas del fichero
while(!feof($f1)){
$z=fgets($f1,4000);
echo $z,"<br>";
}

echo "<br><br><br>";
echo "<b>Situamos el puntero al comienzo del fichero y Situamos el puntero señalando el byte numero 500 del fichero </b><br><br>";
# Situamos el puntero al comienzo del fichero
rewind($f1);
# Situamos el puntero señalando el byte número 500 del fichero
fseek($f1,500);
# Releemos el fichero ahora la primera linea estará incompleta
#LE FALTARAN LOS 500 PRIMEROS CARACTERES

while(!feof($f1)){
$z=fgets($f1,4000);
echo $z,"<br>";
}

echo "<br><br><br>";
echo "<b>Situamos el puntero al comienzo del fichero, leemos primera linea y mostramos posicion puntero </b><br><br>";
# volvemos el puntero al comienzo del fichero
rewind($f1);
#leemos la primera linea
$z=fgets($f1,4000);
echo $z,"<br>";
# Determinamos LA POSICION ACTUAL DEL PUNTERO
echo ftell($f1),"<br>";
# Cerramos el fichero
fclose($f1);



?>
</BODY>
</HTML>
