<html>
<body>

<h1>Ejemplos del uso de la instrucci&oacuten INCLUDE vs REQUIRE</h1>
<p> Con las instrucciones require o include se puede insertar
el contenido de un fichero PHP dentro de otro (antes de que el servidor ejecute el codigo)
</p>
<p>Ambas instrucciones hacen exactamente lo mismo, se diferencian en como
   se comportan cuando se produce un fallo: <br><br>
	
    <b>require:</b> PARA la ejecucion del script y genera fallo (E_COMPILE_ERROR)<br>
    <b>include:</b> NO PARA la ejecucion del script y genera un warning (E_WARNING)<br>
</p>

<p>En este caso estamos incluyendo un pie de pagina en la parte inferior</p>

<?php 
   require "p19_footer1.php";
  
?>



</body>
</html> 