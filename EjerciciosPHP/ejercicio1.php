<html>
    <head>
        <title>Ejercicio 1</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <h4>Hacer un programa que sume, reste, multiplique y divida dos variables</h4>
        <?php
            $numero1=10;
            $numero2=12;
            //sumar
            $suma=$numero1+$numero2;
            echo "$numero1+$numero2"."<br>";
            echo "suma = ".$suma."<br>";
            //restar
            $resta=$numero1-$numero2;
            echo "$numero1-$numero2"."<br>";
            echo "resta = ".$resta."<br>";
            //multiplicar
            $multiplicar=$numero1*$numero2;
            echo "$numero1*$numero2"."<br>";
            echo "multiplicar = ".$multiplicar."<br>";
            //dividir
            $dividir=$numero1*$numero2;
            echo "$numero1/$numero2"."<br>";
            echo "dividir = ".$dividir."<br>";
        ?>
    <p>NOMBRE DEL ALUMNO:</p>
    <a href="index.php">Regresar al menu</a>
    </body>
</html>