<HTML>
<HEAD> <TITLE> Funciones Cadenas Caracteres </TITLE> </HEAD>

<BODY>
<?php
 
 $cadena1="esta es una cadena de Caracteres";
 
 $num=65;
 $caracter="A";

 
echo "Funcion chr($num)=".chr($num)."<br/>";
echo "Funcion ord($caracter)=".ord($caracter)."<br/><br/>";

echo "Funcion strlen($cadena1)=".strlen($cadena1)."<br/>";
echo "Funcion strtolower($cadena1)=".strtolower($cadena1)."<br/>";
echo "Funcion strtoupper($cadena1)=".strtoupper($cadena1)."<br/>";
echo "Funcion ucwords($cadena1)=".ucwords($cadena1)."<br/>";
echo "Funcion ucfirst($cadena1)=".ucfirst($cadena1)."<br/><br/>";

$cadena2="   esta es otra cadena de Caracteres  ";

echo "Funcion ltrim($cadena2)=".ltrim($cadena2)."<br/>";
echo "Funcion rtrim($cadena2)=".rtrim($cadena2)."<br/>";
echo "Funcion trim($cadena2)=".trim($cadena2)."<br/><br/>";	


echo "Funcion substr($cadena1,0)=".substr($cadena1,0)."<br/>";
echo "Funcion substr($cadena1,-5)=".substr($cadena1,-5)."<br/>";
echo "Funcion substr($cadena1,-2)=".substr($cadena1,-2)."<br/>";
echo "Funcion substr($cadena1,2,6)=".substr($cadena1,2,6)."<br/>";
echo "Funcion substr($cadena1,0,8)=".substr($cadena1,0,8)."<br/>";
echo "Funcion substr($cadena1,2,-3)=".substr($cadena1,2,-3)."<br/>";
echo "Funcion substr($cadena1,-7,5)=".substr($cadena1,-7,5)."<br/>";
echo "Funcion substr($cadena1,-7,-5)=".substr($cadena1,-7,-5)."<br/>";
echo "Funcion substr($cadena1,-5,-7)=".substr($cadena1,-5,-7)."<br/><br/>";


echo "Funcion strrev($cadena1)=".strrev($cadena1)."<br/>";
echo "Funcion str_repeat($cadena1,3)=".str_repeat($cadena1,2)."<br/><br/>";



$cadena3="cadenacaracteres";
echo "Funcion str_pad($cadena3,50,'*',STR_PAD_BOTH)=".str_pad($cadena3,50,"*",STR_PAD_BOTH)."<br/>";
echo "Funcion str_pad($cadena3,50,'*',STR_PAD_LEFT)=".str_pad($cadena3,50,"*",STR_PAD_LEFT)."<br/>";
echo "Funcion str_pad($cadena3,50,'*',STR_PAD_RIGHT)=".str_pad($cadena3,50,"*",STR_PAD_RIGHT)."<br/><br/>";

echo "\$cadena3=$cadena3"."<br/>";
echo 'Funcion str_replace("a","e",$cadena3)='.str_replace("a","e",$cadena3)."<br/>";
echo 'Funcion str_replace("ca","K",$cadena3)='.str_replace("ca","K",$cadena3)."<br/><br/>";









?>
</BODY>
</HTML>
