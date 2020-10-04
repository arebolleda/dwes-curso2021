<HTML>
<HEAD> <TITLE> Bucle WHILE </TITLE> </HEAD>

<BODY>
<?php
 
 /* while(condición)
      instrucción
  */
	
  $A=0; 
  while ($A<5) echo "El valor de A es: ",$A++,"<br>";

  /* while(condición)
    { 
		...instrucción1
		...instrucción2
		.....
		.....
	} 
  */
  echo "<br>";
  $B=0; 
  while ($B<5) 
   {
     echo "El valor de B es: ".$B++;
	 echo "<br>";
   }

    /* while(condición):
    
		...instrucción1
		...instrucción2
		.....
		.....
	  endwhile 
  */
  echo "<br>";
  $C=0; 
  while ($C<5): 
     echo "El valor de C es: ".$C++;
	 echo "<br>";
   endwhile;
?>
</BODY>
</HTML>
