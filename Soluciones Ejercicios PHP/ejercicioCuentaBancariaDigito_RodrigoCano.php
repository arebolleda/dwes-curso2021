<HTML>
<HEAD> <TITLE> Calcular cuenta bancaria </TITLE> </HEAD>
<BODY>
<h1>Calcular cuenta bancaria</h1>
<?php
$cuenta="12345678061234567890";
echo "Cuenta: ".$cuenta."<br>";
$suma1=(substr($cuenta,0,1)*4)+(substr($cuenta,1,1)*8)+(substr($cuenta,2,1)*5)+(substr($cuenta,3,1)*10);
$suma1+=(substr($cuenta,4,1)*9)+(substr($cuenta,5,1)*7)+(substr($cuenta,6,1)*3)+(substr($cuenta,7,1)*6);
$resto1=11-($suma1%11);
if ($resto1==11)
	$resto1=0;
elseif ($resto1==10)
	$resto1=1;

$suma3=(substr($cuenta,10,1)*1)+(substr($cuenta,11,1)*2)+(substr($cuenta,12,1)*4)+(substr($cuenta,13,1)*8)+(substr($cuenta,14,1)*5)+(substr($cuenta,15,1)*10)+(substr($cuenta,16,1)*9)+(substr($cuenta,17,1)*7)+(substr($cuenta,18,1)*3)+(substr($cuenta,19,1)*6);
$resto2=11-($suma3%11);
if ($resto2==11)
	$resto2=0;
elseif ($resto2==10)
	$resto2=1;
$control="".$resto1."".$resto2;
if (substr($cuenta,8,2)==$control)
	echo "La cuenta bancaria es Correcta ".substr($cuenta,8,2)." = ".$control;
else
	echo "El D.C. de la cuenta bancaria es Incorrecta: ".substr($cuenta,8,2)." != ".$control;

?>
</BODY>
</HTML>