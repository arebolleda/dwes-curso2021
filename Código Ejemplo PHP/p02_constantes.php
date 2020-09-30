<HTML>
<HEAD><TITLE>Constantes</TITLE>
<h1> Diferentes ejemplos de uso de Constantes </h1>
</HEAD>
<BODY>
<?php
/* Definiremos la constante EurPtay le asignaremos el valor 166.386 */
define("EurPta",166.386);
/* Definiremos la constante PtaEurasignándole el valor 1/166.386 
En este caso el valor de la constante es el resultado
de la operación aritmética dividir 1 entre 166.386*/
define("PtaEur",1/166.386);
/* Definimos la constante Cadenas y le asignamos el valor: 12
   Esta constante es una cadena*/ 
define("Cadena","12 Esta constante es una cadena");

/* Definimos la constante Cadena2 y le asignamos el valor:
   12.54 Constante con punto decimal*/ 
define("Cadena2","12.54 Constante con punto decimal");
/* Comprobemos los valores.Observa la nueva forma en la que utilizamos echo
  Lo hacemos enlazando varias cadenas separadas con punto y/o coma,  
  según se trate de echo o de print */
echo "Valor de la constante EurPta: ",EurPta,"<BR>";
echo "Valor de la constante PtaEur: ".PtaEur ."<BR>";
print "Valor de la constante Cadena: " .Cadena ."<BR>";
print "Valor de la constante Cadena x EurPta: " .Cadena*EurPta ."<br>";
print "Valor de la constante Cadena2 x EurPta: " .Cadena2*EurPta ."<br>";
?>
</BODY>
</HTML>