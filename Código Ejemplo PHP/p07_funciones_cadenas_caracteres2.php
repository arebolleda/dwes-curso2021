<HTML>
<HEAD> <TITLE> Funciones printf y sprintf </TITLE> </HEAD>

<BODY>
<?php
 
 // Funcion printf ("formato", [arg1, [arg2 ... ]]) muestra resultado en pantalla
 
 $num1=192;

printf("Numero $num1 se representa en binario como %b <br/>",$num1);
printf("Numero $num1 se representa en octal como %o <br/>",$num1);
printf("Numero $num1 se representa en hexadecimal como %x <br/>",$num1);
printf("Numero $num1 se representa en hexadecimal como %X <br/>",$num1);
printf("Numero $num1 se representa en decimal como %d <br/>",$num1);
printf("Numero $num1 se representa en notacion cientifica como %E <br/><br/>",$num1);

 // Funcion sprintf ("formato", [arg1, [arg2 ... ]]) no muestra el resultado en pantalla
echo "Uso de sprintf <br/>";
$valor=sprintf("Numero $num1 se representa en binario como %b <br/>",$num1);
echo $valor."tipo ".gettype($valor)."<br/>";

$valor2=printf("Numero $num1 se representa en binario como %b <br/>",$num1);
echo "\$valor2=$valor2 <br/>";






?>
</BODY>
</HTML>
