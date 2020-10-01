<HTML>
<HEAD> <TITLE> EJ3-Direccion de Red, Broadcast y Rango de IPs </TITLE> </HEAD>

<BODY>
<?php

$ip="10.33.15.100/8";
$iporiginal=$ip;

echo "IP $ip"."<br>";

$mascara=substr($ip,strpos($ip,"/")+1);
echo "Mascara $mascara"."<br>";

$ip1=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip2=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip3=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip4=$ip;

// Variable var contiene la IP en binario
$var=sprintf("%08b%08b%08b%08b ",$ip1,$ip2,$ip3,$ip4);

// Almacenamos tantos bits como indica la máscara
$dirred=substr($var,0,$mascara);
// Completamos con 0 hasta alcanzar 32 bits
$dirred=str_pad($dirred,32,"0",STR_PAD_RIGHT);

$dirreddecimal=sprintf("%d.%d.%d.%d",
		bindec(substr($dirred,0,8)),
		bindec(substr($dirred,8,8)),
		bindec(substr($dirred,16,8)),
		bindec(substr($dirred,24,8))
		);
		
// Calculamos el rango -> Rango Inferior: dirección red +1
$rango_inferior=sprintf("%d.%d.%d.%d",
		bindec(substr($dirred,0,8)),
		bindec(substr($dirred,8,8)),
		bindec(substr($dirred,16,8)),
		bindec(substr($dirred,24,8))+1
		);


echo "Direccion Red: $dirreddecimal"."<br>";

// Almacenamos tantos bits como indica la máscara
$dirbroad=substr($var,0,$mascara);
// Completamos con 1 hasta alcanzar 32 bits
$dirbroad=str_pad($dirbroad,32,"1",STR_PAD_RIGHT);

$dirbroaddecimal=sprintf("%d.%d.%d.%d",
		bindec(substr($dirbroad,0,8)),
		bindec(substr($dirbroad,8,8)),
		bindec(substr($dirbroad,16,8)),
		bindec(substr($dirbroad,24,8))
		);
		
// Calculamos el rango -> Rango Superior: dirección broadcast -1
$rango_superior=sprintf("%d.%d.%d.%d",
		bindec(substr($dirbroad,0,8)),
		bindec(substr($dirbroad,8,8)),
		bindec(substr($dirbroad,16,8)),
		bindec(substr($dirbroad,24,8))-1
		);	
		
echo "Direccion Broadcast: $dirbroaddecimal"."<br>";


echo "Rango: ".$rango_inferior." a ".$rango_superior."<br>";





?>
</BODY>
</HTML>