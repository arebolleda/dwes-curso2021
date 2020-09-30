<HTML>
<HEAD> <TITLE> Cambios de base y formato </TITLE> </HEAD>

<BODY>
<?php
 
 $decimal=17; // en decimal 17
 $octal=017; // en decimal 15
 $hexa1=0x17; // en decimal 23
 $hexa2=0x3E8; // en decimal 1000
 $bin=101010; // en decimal 42
 
// Cambios de base
echo "Numero $decimal decimal en octal = ".decoct($decimal)."<br/>";
echo "Numero $decimal decimal en hexadecimal = ".dechex($decimal)."<br/>";
echo "Numero $decimal decimal en binario = ".decbin($decimal)."<br/><br/><br/>";

echo "Numero $octal octal en decimal = ".octdec($octal)."<br/>";
echo "Numero $hexa1 hexadecimal en decimal = ".hexdec($hexa1)."<br/>";
echo "Numero $hexa2 hexadecimal en decimal = ".hexdec($hexa2)."<br/>";
echo "Numero $bin binario en decimal = ".bindec($bin)."<br/><br/><br/>";

// Otros cambios de base

$a=134; // Suponemos es base 7 en decimal 74

echo "Numero $a en base 7 es ". base_convert($a,7,10)." en decimal y ".base_convert($a,7,14)." en base 14<br/>";
echo "Numero $a en base 5 es ". base_convert($a,5,10)." en decimal y ".base_convert($a,5,18)." en base 18<br/><br/><br/>";

// Formatos de presentación de numeros
/*number_format (número)
Presenta la parte entera del número (sin decimales) y utiliza como separador de miles una coma (,).
number_format (número, número de cifras decimales) Presenta el número de cifras decimales que se indiquen y utiliza como separador 
decimal un punto (.) y el separador de miles es una coma (,).
number_format (número, núm decimales, "sep. decimal", "sep. miles") Permite establecer el número de cifras decimales de la presentación así como el 
carácter que se establezca como separador de decimales y como separadores de miles.
*/

$num=1234567.234;
echo "$num sin decimales ".number_format($num)."<br>";
echo "$num con 2 decimales ".number_format($num,2)."<br>";
echo "$num con 1 decimal (miles . decimales ,) ".number_format($num,2,",",".")."<br>";
echo "$num con 1 decimal (miles espacio decimales ,) ".number_format($num,2,","," ")."<br>";



?>
</BODY>
</HTML>
