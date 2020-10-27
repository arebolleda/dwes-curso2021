<HTML>
<HEAD> <TITLE> Ficheros Externos - Funciones </TITLE> </HEAD>

<BODY>
<?php
# leemos el fichero y lo presentamos en diferentes modalidades
echo "<b>Lectura del fichero con funcion readfile </b> <br><br>";
$fichero=readfile("quijote.txt");
readfile("quijote.txt");
echo $fichero, "<br><br><br>";


#leemos el fichero y lo almacenamos en un array asociativo
echo "<b>Lectura del fichero con funcion file almacena en array </b> <br><br>";
$z=file("quijote.txt");
# recorremos el array y lo mostramos por pantalla
foreach($z as $linea=>$texto) {
	echo "Linea: ",$linea," Texto: ",$texto,"<br>";
};
echo "<br><br>";

// Operaciones con ficheros
echo "<b>Operacion copia de fichero -> copy </b> <br><br>";
if (!copy("quijote.txt", "otroquijote.txt")) {
print("Error en el proceso de copia<br>\n");
}else{
print "<br>Fichero copiado con exito";
}

echo "<br><br>";
# renombramos un fichero con mensaje de resultado
echo "<b>Operacion renombrado de fichero -> rename </b> <br><br>";
if (!rename("otroquijote.txt", "quijote2.txt")) {
print("Error en el proceso de renombrado<br>");
}else{
print "<br>Fichero renombrado con exito <br><br>";
}

// Otras funciones de ficheros
echo "<br>El tamano del fichero es: ", filesize("quijote.txt")," bytes<br>";
echo "<br>El  fichero es tipo: ", filetype("quijote.txt")," <br>";
echo "<br>Devuelve un 1 si el fichero existe: ",file_exists("quijote.txt");

// Funciones de ficheros referencia
//https://www.w3schools.com/php/php_ref_filesystem.asp
?>
</BODY>
</HTML>
