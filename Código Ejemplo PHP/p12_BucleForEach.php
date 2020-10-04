<HTML>
<HEAD> <TITLE> Bucle FOREACH </TITLE> </HEAD>

<BODY>
<?php
/* 
	foreach( array as var ){
	...instrucciones...
	}
*/

// array escalar
$a=array("a","b","c","d","e");

foreach($a as $var) 
{
	echo $var,"<br>";
};
echo "<br>";

// array asociativo
$semana=array
( "18" => "Lunes",
"19" => "Martes",
"20" => "Miercoles",
"21" => "Jueves",
"22" => "Viernes",
"23" => "Sabado",
"24" => "Domingo",
);

foreach($semana as $dia) 
{
	echo "dia: $dia <br>";
};

echo "<br>";
foreach($semana as $indice=>$dia) 
{
	echo "indice:$indice dia: $dia <br>";
};
?>



</BODY>
</HTML>
