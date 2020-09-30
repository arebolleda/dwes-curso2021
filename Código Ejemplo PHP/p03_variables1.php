<HTML>
<HEAD> <TITLE> Tipos Variables </TITLE> </HEAD>

<BODY>
<?php
/* En PHP no es necesariauna definición previa del tipo de variables*/
 /* Integer $a=1234 2147483647 -2147483647 Cualquier valor numérico entero (dentro de este intervalo) que se 
asigne a una variable será convertido a este tipo */

//Double $a=1.23 Cualquier valor numérico decimal, o entero fuera del intervalo anterior, 
//que se asigne a una variable la convertirá a este tipo

//String $a="123" Cualquier valor entrecomillado(sean números o letras) que se asigne a 
//una variable la convertirá a este tipo

 $a1=347; echo "$a1 es del tipo". gettype($a1)."<br/>";
 $a2=2147483647; echo "$a2 es del tipo".gettype($a2)."<br/>";
 $a3=-2147483647; echo "$a3 es del tipo".gettype($a3)."<br/>";
 $a4=23.7678; echo "$a4 es del tipo".gettype($a4)."<br/>";
 $a5=3.1416; echo "$a5 es del tipo".gettype($a5)."<br/>";
 $a6="347"; echo "$a6 es del tipo".gettype($a6)."<br/>";
 $a7="3.1416"; echo "$a7 es del tipo".gettype($a7)."<br/>";
 $a8="Solo literal"; echo "$a8 es del tipo".gettype($a8)."<br/>";
 $a9="12.3 Literal con número"; echo "$a9 es del tipo". gettype($a9)."<br/>";
 $a10="";echo "$a10 es del tipo".gettype($a10)."<br/>";
 
 // Variables booleanas
 $var1=true; echo "$var1 es del tipo".gettype($var1)."<br/>";
 $var2=false; echo "$var2 es del tipo".gettype($var2)."<br/>";
 

// Cadenas en bloque
$cadena1 = <<<Cadena
Esta es otra cadena con el nombre Pepa
puedo escribir Pepa cuantas veces quiera
porque el PHP no interpretará el final de
documento incrustado hasta que no la escriba
en una sola linea y seguida del punto y coma
<br/>
Cadena;

$cadena2 = "Esto es una cadena\n
definida en bloque.\n
Podemos utilizar variables como\n
en las cadenas de dobles comillas.\n
Esto es un ejemplo: $var1.\n";

echo $cadena1;
echo $cadena2;

?>
</BODY>
</HTML>
