<HTML>
<HEAD> <TITLE> Operadores Comparacion </TITLE> </HEAD>

<BODY>
<?php
 
 // Operador == 
 // Compara los valores de dos variables y devuelve 1(CIERTO) en el caso de 
 // que sean iguales y el valor NUL–carácter ASCII 0– (FALSO) cuando son distintas.
 $a=123;  $b=123;
 echo "Comparacion $a == $b: ".($a==$b)."<br/>";

 $a=123.0;  $b=123;
 echo "Comparacion $a == $b: ".($a==$b)."<br/>";
 
 $a=123;  $b="123";
 echo "Comparacion $a == $b: ".($a==$b)."<br/>";

 $a=123;  $b=124;
 echo "Comparacion $a == $b: ".($a==$b)."<br/>";
 
 $a="abc";  $b="abc";
 echo "Comparacion $a == $b: ".($a==$b)."<br/>";
 
 $a="abc";  $b="ABC";
 echo "Comparacion $a == $b: ".($a==$b)."<br/>";
 
 $a="abc";  $b="abcd";
 echo "Comparacion $a == $b: ".($a==$b)."<br/><br/>";

 // Operador ===
 // Realiza la comparación en sentido estricto. Para que devuelva 1es necesario 
// que sean iguales los valores de las variables y también su tipo
$a=123;  $b=123;
 echo "Comparacion $a === $b: ".($a===$b)."<br/>";

 $a=123.0;  $b=123;
 echo "Comparacion $a === $b: ".($a===$b)."<br/>";
 
 $a=123;  $b="123";
 echo "Comparacion $a === $b: ".($a===$b)."<br/>";

 $a=123;  $b=124;
 echo "Comparacion $a === $b: ".($a===$b)."<br/>";
 
 $a="abc";  $b="abc";
 echo "Comparacion $a === $b: ".($a===$b)."<br/>";
 
 $a="abc";  $b="ABC";
 echo "Comparacion $a === $b: ".($a===$b)."<br/>";
 
 $a="abc";  $b="abcd";
 echo "Comparacion $a === $b: ".($a===$b)."<br/><br/>";
 
 // Operador !=
 // Devuelve 1 cuando los valores de las variables son distintos
 // y devuelve NUL cuando son iguales.
 // Este operador no compara en sentido estricto, por lo que puede considerar iguales los valores de 
//  dos variables de distinto tipo.
 $a=123;  $b=123;
 echo "Distinto $a != $b: ".($a!=$b)."<br/>";

 $a=123.0;  $b=123;
 echo "Distinto $a != $b: ".($a!=$b)."<br/>";
 
 $a=123;  $b="123";
 echo "Distinto $a != $b: ".($a!=$b)."<br/>";

 $a=123;  $b=124;
 echo "Distinto $a != $b: ".($a!=$b)."<br/>";
 
 $a="abc";  $b="abc";
 echo "Distinto $a != $b: ".($a!=$b)."<br/>";
 
 $a="abc";  $b="ABC";
 echo "Distinto $a != $b: ".($a!=$b)."<br/>";
 
 $a="abc";  $b="abcd";
 echo "Distinto $a != $b: ".($a!=$b)."<br/><br/>";
 
 
 // Operador $a<$b
 // El operador < devuelve 1 cuando los valores de $a son menores que los de $b .
  $a=123;  $b=123;
 echo "Operador menor $a < $b: ".($a<$b)."<br/>";

 $a=123.0;  $b=123;
 echo "Operador menor $a < $b: ".($a<$b)."<br/>";
 
 $a=123;  $b="123";
 echo "Operador menor $a < $b: ".($a<$b)."<br/>";

 $a=123;  $b=124;
 echo "Operador menor $a < $b: ".($a<$b)."<br/>";
 
 $a="abc";  $b="abc";
 echo "Operador menor $a < $b: ".($a<$b)."<br/>";
 
 $a="abc";  $b="ABC";
 echo "Operador menor $a < $b: ".($a<$b)."<br/>";
 
 $a="abc";  $b="abcd";
 echo "Operador menor $a < $b: ".($a<$b)."<br/><br/>";
?>
</BODY>
</HTML>
