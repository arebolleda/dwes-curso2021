<!DOCTYPE html>
<html>
<head>
	<title>Dígito de Control de Cuenta bancaria</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php 
		# Daniel González Carretero

		$banco = "1234";
		$entidad = "5678";
		$cuenta = "1234567890";

		$primerDigito = ( substr($banco, 0, 1) * 4 ) + // La primera cifra del banco se multiplica por 4. //4
						( substr($banco, 1, 1) * 8 ) + // La segunda cifra del banco se multiplica por 8. //16
						( substr($banco, 2, 1) * 5 ) + // La tercera cifra del banco se multiplica por 5. //15
						( substr($banco, 3, 1) * 10) + // La cuarta  cifra del banco se multiplica por 10. //40 -> 75

						( substr($entidad, 0, 1) * 9 ) + // La primera cifra de la entidad se multiplica por 9. //45
						( substr($entidad, 1, 1) * 7 ) + // La segunda cifra de la entidad se multiplica por 7. //42
						( substr($entidad, 2, 1) * 3 ) + // La tercera cifra de la entidad se multiplica por 3. //21
						( substr($entidad, 3, 1) * 6 );  // La cuarta  cifra de la entidad se multiplica por 6. //48 -> 156


		switch (11 - ($primerDigito % 11) ) {
			case 10: $primerDigito = 1; break;
			case 11: $primerDigito = 0; break;
			default: $primerDigito = 11 - ($primerDigito % 11); break;
		}


		$segundoDigito = ( substr($cuenta, 0, 1) * 1 ) + // La primera cifra de la cuenta se multiplica por 1
						 ( substr($cuenta, 1, 1) * 2 ) + // La segunda cifra de la cuenta se multiplica por 2
						 ( substr($cuenta, 2, 1) * 4 ) + // La tercera cifra de la cuenta se multiplica por 4
						 ( substr($cuenta, 3, 1) * 8 ) + // La cuarta cifra de la cuenta se multiplica por 8
						 ( substr($cuenta, 4, 1) * 5 ) + // La quinta cifra de la cuenta se multiplica por 5
						 ( substr($cuenta, 5, 1) * 10) + // La sexta cifra de la cuenta se multiplica por 10
						 ( substr($cuenta, 6, 1) * 9 ) + // La séptima cifra de la cuenta se multiplica por 9
						 ( substr($cuenta, 7, 1) * 7 ) + // La octava cifra de la cuenta se multiplica por 7
						 ( substr($cuenta, 8, 1) * 3 ) + // La novena cifra de la cuenta se multiplica por 3
						 ( substr($cuenta, 9, 1) * 6 ); // La décima cifra de la cuenta se multiplica por 6

		switch (11 - ($segundoDigito % 11) ) {
			case 10: $segundoDigito = 1; break;
			case 11: $segundoDigito = 0; break;
			default: $segundoDigito = 11 - ($segundoDigito % 11); break;
		}


		echo "La cuenta bancaria sería: ". $banco ." ". $entidad ." <strong>". $primerDigito . $segundoDigito . "</strong> ". $cuenta ." <br />";
	?>
</body>
</html>
