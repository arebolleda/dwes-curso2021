<HTML>
<HEAD> <TITLE> EJ1_1-Conversion IP Decimal a Binario </TITLE> </HEAD>

<BODY>
<?php

$ip="192.18.16.204";
$iporiginal=$ip;

$ip1=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip2=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip3=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip4=$ip;

$bin1=decbin($ip1);
$bin2=decbin($ip2);
$bin3=decbin($ip3);
$bin4=decbin($ip4); 

echo "IP $iporiginal = ".str_pad($bin1,8,"0",STR_PAD_LEFT).".".str_pad($bin2,8,"0",STR_PAD_LEFT).".".str_pad($bin3,8,"0",STR_PAD_LEFT).".".str_pad($bin4,8,"0",STR_PAD_LEFT)."<br>";



 








?>
</BODY>
</HTML>