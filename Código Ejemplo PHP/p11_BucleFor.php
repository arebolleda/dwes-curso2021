<HTML>
<HEAD> <TITLE> Bucle FOR </TITLE> </HEAD>

<BODY>
<?php
/* 
 for ( desde ; hasta ; incre ){
.........
...instrucciones....
.........
}
*/
for ($i = 1; $i <= 10; $i++) {
print $i."<br>";
}
echo "<br>";

// Ojo posible bucle infinito
for ($i = 1;;$i++) 
{
	if ($i > 10){
		break;
				}
print $i."<br>";
}
echo "<br>";
/* 
 for ( desde ; hasta ; incre ):
.........
...instrucciones....
.........
endfor
*/

for($i = 1; $i <=10;$i++):
echo $i,"<br>";
endfor;

?>

<?php for ($i = 1; $i <= 10;$i++):?>
<H1>Esto se repite 10 veces</H1>
<?php endfor;
?>



</BODY>
</HTML>
