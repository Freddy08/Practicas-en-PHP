<html>
    <head>
        <title>Ejercicio 5</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <h4>Mostrar en pantalla cual es el mayor de tres números</h4>
        <?php
            $n1=54;
            $n2=10;
            $n3=36;
            if($n1>$n2 && $n1<$n3)
            {
                echo "El primer número (".$n1.") es mayor que el segundo (".$n2.") y es menor que el tercer numero (".$n3.")";
            }else if($n2>$n1 && $n2<$n3)
            {
                echo "El segundo número (".$n2.") es mayor que el primero (".$n1.") y es menor que el tercer numero (".$n3.")";
            }else if($n3>$n2 && $n3<$n1)
            {
                echo "El tercer número (".$n3.") es mayor que el segundo (".$n2.") y es menor que el primer numero (".$n1.")";
            }
        ?>
    <p>NOMBRE DEL ALUMNO:</p>
    <a href="index.php">Regresar al menu</a>
    </body>
</html>