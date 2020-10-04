<HTML>
<HEAD> <TITLE> Operadores Condicionales </TITLE> </HEAD>

<BODY>
<?php
 
 /*switch ( variable ) {
	case n1:
		instrucciones caso n1...
		.....................
		break;
	case n2:
		instrucciones caso n2...
		.....................
		break;
}
*/

$i=1;
 
switch ($i) {
	case 0:
		print "i es igual a 0 <br>";
		break;
	case 1:
		print "i es igual a 1 <br>";
		break;
	case 2:
		print "i es igual a 2 <br>";
		break;
}

$i=45;
switch ($i) {
	case 0:
		print "i es igual a 0 <br>";
		break;
	case 1:
		print "i es igual a 1 <br>";
		break;
	case 2:
		print "i es igual a 2 <br>";
		break;
default: // se ejecuta si no se cumplen ninguna de las condiciones anteriores
 		print "i no esta entre 0 y 2 <br>";
}
   
	
 
?>
</BODY>
</HTML>
