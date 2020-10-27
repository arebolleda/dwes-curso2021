<?php
/* Mediante el bucle foreach leemos el array $_FILES.
Observa la sintaxis. Escribimos como nombre del array
$_['archivo'] con lo cual foreach leerá los elementos
del array que tienen "archivo" como primer indice
(coincide con el name que hemos puesto
en la etiqueta input=file del formulario) */

foreach ($_FILES['archivo'] as $indice=>$valor){
print $indice."--->".$valor."<br>";
}

if (copy ($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name'])) {
echo "<h2>Se ha transferido el archivo ". $_FILES['archivo']['name']. "</h2>";
}
else{
echo "<h2>No ha podido transferirse el fichero</h2>";
}
?>