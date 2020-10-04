<HTML>
<HEAD> <TITLE> Bucle DO WHILE </TITLE> </HEAD>

<BODY>
<?php
 
 
  /* do
    { 
		...instrucción1
		...instrucción2
		.....
		.....
	} while(condición);
  */

  $B=0; 
  do  
   {
     echo "El valor de B es: ".$B++;
	 echo "<br>";
   } while ($B<5);


  echo "<br>";
  $C=0; 
  do
   {
     echo "El valor de C es: ".$C++;
	 echo "<br>";
	 if ($C==10) break;
   }  while ($C<50);
?>
</BODY>
</HTML>
