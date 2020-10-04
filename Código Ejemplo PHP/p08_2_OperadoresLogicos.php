<HTML>
<HEAD> <TITLE> Operadores Logicos </TITLE> </HEAD>

<BODY>
<?php
 
 // Operador AND - &&
 $a=32;  $b=0; $c=7;

 echo "$a>$b AND $a>$c = ".($a>$b AND $a>$c)."<br/>";
 echo "$a>$b AND $a<$c = ".($a>$b AND $a<$c)."<br/>";
 echo "$a<$b AND $a>$c = ".($a<$b AND $a>$c)."<br/>";
 echo "$a<$b AND $a<$c = ".($a<$b AND $a<$c)."<br/><br/>";

// Operador OR - ||
 $a=32;  $b=0; $c=7;

 echo "$a>$b OR $a>$c = ".($a>$b OR $a>$c)."<br/>";
 echo "$a>$b OR $a<$c = ".($a>$b OR $a<$c)."<br/>";
 echo "$a<$b OR $a>$c = ".($a<$b OR $a>$c)."<br/>";
 echo "$a<$b OR $a<$c = ".($a<$b OR $a<$c)."<br/><br/>";
 
 // Operador XOR
 $a=32;  $b=0; $c=7;

 echo "$a>$b XOR $a>$c = ".($a>$b XOR $a>$c)."<br/>";
 echo "$a>$b XOR $a<$c = ".($a>$b XOR $a<$c)."<br/>";
 echo "$a<$b XOR $a>$c = ".($a<$b XOR $a>$c)."<br/>";
 echo "$a<$b XOR $a<$c = ".($a<$b XOR $a<$c)."<br/><br/>";

 // Operador NOT !
 $a=32;  $b=0; $c=7;

 echo "NOT $a>$b = ".!($a>$b)."<br/>";
 echo "NOT $a<$b = ".!($a<$b)."<br/><br/>";

 // Precedencia NOT, &&, ||, AND, XOR y OR.
 


 
 
?>
</BODY>
</HTML>
