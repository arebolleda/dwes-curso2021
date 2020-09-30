<HTML>
<HEAD> <TITLE> Forzado de Tipos Variables </TITLE> </HEAD>

<BODY>
<?php
 /*Forzado de tipos PHP permite forzarlos tipos de las variables. Eso quiere decir que se 
puede obligara PHP a asignar un tipo determinadoa una variable determinada, siempre que los 
valores que contenga estén dentro del rangodel nuevo tipo de variable. Los tipos se pueden forzartanto 
en el momento de definir la variable como después de haber sido definida.*/

 $a1=347; $b1=((real)347); echo gettype($a1)." "; echo gettype($b1)."<br/>";
 $a2=2147483647; $b2=((double)2147483647); echo gettype($a2)." "; echo gettype($b2)."<br/>";
 $a3=-2147483647; $b3=((double)2147483647); echo gettype($a2)." "; echo gettype($b2)."<br/>";
 $a4=23.7678; $b4=((int)23.7678); echo gettype($a4)." "; echo gettype($b4)."<br/>";
 $a5=3.1416;  $b5=((integer)3.1416); echo gettype($a5)." "; echo gettype($b5)."<br/>";
 $a6="347"; $b6=((double)"347"); echo gettype($a6)." "; echo gettype($b6)."<br/>";
 $a7="3.1416"; $b7=((integer)"3.1416"); echo gettype($a6)." "; echo gettype($b6)."<br/><br/><br/>";
 
$a1=347; echo "$a1 convertido a double ". ((double)$a1)."<br/>"; 
$a2=2147483647; echo "$a2 convertido a double ". ((double)$a2)."<br/>"; 
$a3=-2147483647; echo "$a3 convertido a double ".((float)$a3)."<br/>"; 
$a4=23.7678; echo "$a4 convertido a integer ". ((integer)$a4)."<br/>"; 
$a5="3.1416"; echo "$a5 convertido a integer ". ((integer)$a5)."<br/>"; 
$a6="347"; echo "$a6 convertido a double ". ((double)$a6)."<br/>"; 
$a7="3.1416"; echo "$a7 convertido a double ". ((double)$a7)."<br/>"; 
$a8="Solo literal"; echo "$a8 convertido a integer ". ((integer)$a8)."<br/>";
$a9="12.3 Literal con número"; echo ((double)$a9)."<br/>" ;
$a10=""; echo ((int)$a9)."<br/><br/><br/>";

/*Forzado de tipos en variables ya definidas La forma más aconsejable de forzadode tipos en variables que 
ya estuvieran definidas previamente, es el uso de la siguiente instrucción:
settype(var,tipo) donde vares el nombre de la variable cuyo tipo pretendemos modificar y tipouna expresión que 
puede contener (entre comillas) uno de estos valores: 'double', 'integer', o 'string'*/

$a1=347; settype($a1,'double'); echo gettype($a1); echo $a1."<br/>";
$a2=2147483647; settype($a2,'double'); echo gettype($a2); echo $a2."<br/>";
$a3=-2147483647; settype($a3,'double'); echo gettype($a3); echo $a3."<br/>";
$a4=23.7678; settype($a4,'integer'); echo gettype($a4); echo $a4."<br/>";
$a5="3.1416"; settype($a5,'integer'); echo gettype($a5); echo $a5."<br/>";
$a6="347"; settype($a6,'double'); echo gettype($a6); echo $a6."<br/>";
$a7="3.1416"; settype($a7,'integer'); echo gettype($a7); echo $a7."<br/>";
$a8="Solo literal"; settype($a8,'double'); echo gettype($a8); echo $a8."<br/>";
$a9="12.3 Literal con número"; settype($a9,'integer'); echo gettype($a9); echo $a9."<br/>";
$a10=""; settype($a10,'integer'); echo gettype($a10); echo $a10."<br/>";




?>
</BODY>
</HTML>
