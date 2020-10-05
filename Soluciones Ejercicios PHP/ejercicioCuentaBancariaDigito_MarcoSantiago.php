<!--Ejercicio-7-->
<!--Marco Santiago-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
           ej7
        </title>
        <link rel="icon" type="image/png" href="media/">
    </head>
    <body>
        <div class="">
            <?php
                $banco=1234;
                $sucursal=2222;
                $num_cuenta=3333333333;
                //La primera cifra del banco se multiplica por 4.
                $banco_parched_1=substr($banco,-4,1)*4;
                //La segunda cifra del banco se multiplica por 8.
                $banco_parched_2=substr($banco,-3,1)*8;
                //La tercera cifra del banco se multiplica por 5.
                $banco_parched_3=substr($banco,-2,1)*5;
                //La cuarta cifra del banco se multiplica por 10.
                $banco_parched_4=substr($banco,-1,1)*10;
                //La primera cifra de la entidad se multiplica por 9.
                $sucursal_parched_1=substr($sucursal,-4,1)*9;
                //La segunda cifra de la entidad se multiplica por 7.
                $sucursal_parched_2=substr($sucursal,-3,1)*7;
                //La tercera cifra de la entidad se multiplica por 3.
                $sucursal_parched_3=substr($sucursal,-2,1)*3;
                //La cuarta cifra de la entidad se multiplica por 6.
                $sucursal_parched_4=substr($sucursal,-1,1)*6;
                //Se suman todos los resultados obtenidos.
                $total=$banco_parched_1+$banco_parched_2+$banco_parched_3+$banco_parched_4+$sucursal_parched_1+$sucursal_parched_2+$sucursal_parched_3+$sucursal_parched_4;
                //Se divide entre 11 y nos quedamos con el resto de la división.
                $total_parched=11-($total%11);
                //A 11 le quitamos el resto anterior, y ese el el primer dígito de control, con la salvedad de que si nos da 10, el dígito es 1 y si es 11 ponemos 0.
                $first=$total_parched;
                if ($first==10)
                    $first=1;
                if ($first==11)
                    $first=0;
                //////////////////////////////
                //La primera cifra de la cuenta se multiplica por 1
                $cuenta_parched_1=substr($sucursal,-10,1)*1;
                //La segunda cifra de la cuenta se multiplica por 2
                $cuenta_parched_2=substr($sucursal,-9,1)*2;
                //La tercera cifra de la cuenta se multiplica por 4
                $cuenta_parched_3=substr($sucursal,-8,1)*4;
                //La cuarta cifra de la cuenta se multiplica por 8
                $cuenta_parched_4=substr($sucursal,-7,1)*8;
                //La quinta cifra de la cuenta se multiplica por 5
                $cuenta_parched_5=substr($sucursal,-6,1)*5;
                //La sexta cifra de la cuenta se multiplica por 10
                $cuenta_parched_6=substr($sucursal,-5,1)*10;
                //La séptima cifra de la cuenta se multiplica por 9
                $cuenta_parched_7=substr($sucursal,-4,1)*9;
                //La octava cifra de la cuenta se multiplica por 7
                $cuenta_parched_8=substr($sucursal,-3,1)*7;
                //La novena cifra de la cuenta se multiplica por 3
                $cuenta_parched_9=substr($sucursal,-2,1)*3;
                //La décima cifra de la cuenta se multiplica por 6
                $cuenta_parched_10=substr($sucursal,-1,1)*6;
                //Se suman todos los resultados obtenidos.
                $total_p=$cuenta_parched_1+$cuenta_parched_2+$cuenta_parched_3+$cuenta_parched_4+$cuenta_parched_5+$cuenta_parched_6+$cuenta_parched_7+$cuenta_parched_8+$cuenta_parched_9+$cuenta_parched_10;
                $total_parched2=11-($total_p%11);
                //A 11 le quitamos el resto anterior, y ese el el segundo dígito de control, con la salvedad de que si nos da 10, el dígito es 1 y si es 11 ponemos 0.
                $second=$total_parched2;
                if ($second==10)
                    $second=1;
                if ($second==11)
                    $second=0;
                ////////////////////////
                echo "El banco es: ".$banco."<br>";
                echo "La sucursal es: ".$sucursal."<br>";
                echo "El numero de cuneta es: ".$num_cuenta."<br>";
                echo "El numero de control calculado es: ".$first.$second."<br>";
                echo "Numero de cuenta es: ".$banco.$sucursal.$first.$second.$num_cuenta;
                ?>
        </div>
    </body>
</html>