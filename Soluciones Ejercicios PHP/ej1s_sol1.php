<HTML>
<HEAD> <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE> </HEAD>

<BODY>
<?php

$ip="192.18.16.204";
$iporiginal=$ip;

$ip1=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

//*echo $ip1."**".$ip."<br>";

$ip2=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

//*echo $ip2."**".$ip."<br>";

$ip3=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

//*echo $ip3."**".$ip."<br>";
$ip4=$ip;

//*echo $ip4."**".$ip."<br>";


printf("IP $iporiginal en binario es %08b.%08b.%08b.%08b ",$ip1,$ip2,$ip3,$ip4);





?>
</BODY>
</HTML>