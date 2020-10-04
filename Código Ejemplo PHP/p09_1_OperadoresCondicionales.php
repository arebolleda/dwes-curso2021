<HTML>
<HEAD> <TITLE> Operadores Condicionales </TITLE> </HEAD>

<BODY>
<?php
 
 // Operador if una sola instrucción
  $A=3; $B=3;
  if ($A==$B)
	echo "A es igual B <br><br>";
		
 // Operador if más de una instrucción
 if ($A==$B){ 
	echo "A es igual B - ";
    echo "Este if tiene varias instrucciones";
    echo "contenidas entre llaves <br><br>";
	}

 // Sintaxis alternartiva con endif
 if ($A==$B): 
	echo "A es igual B endif -";
    echo "Este if tiene varias instrucciones";
    echo "contenidas entre llaves con endif <br><br>";
	endif;

 if ($A==$B){ 
	echo "A es igual B - ";
    echo "Este if tiene varias instrucciones";
    echo "contenidas entre llaves <br><br>";
	}
 else
  {
    echo "A NO es igual B <br><br> ";
  }

  $a=5;
  if ($a==1)
    {
		echo "El valor de la variable A es 1";
	} 
	elseif ($a==2)
	{
		echo "El valor de la variable A es 2";
	}
	elseif ($a==3)
	{
		echo "El valor de la variable A es 3";
	}
	else
	{
		echo "La variable A no es 1, ni 2, ni 3";
	 }
	
	
	
	
 // Otra forma para incluir HTML
 if ($A==$B){ ?>
 <!-- esto es HTML no PHP -->
  <H1> Esto no se intepreta por PHP </H1> 
  <?php echo "Esto es PHP";
   }
   
	
 
?>
</BODY>
</HTML>
